<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Exceptions\BusinessException;
use App\Services\SSOService;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Throwable;

final class SSOController extends Controller
{
    public function __construct(
      private readonly SSOService $service
    ) {
    }

    public function redirect(): JsonResponse
    {
        return response()->json(
          [
            'redirect_url' => $this->service->getRedirectUrl(),
          ]
        );
    }

    public function callback(Request $request): RedirectResponse|JsonResponse
    {
        try {
            $token = $request->get('state');
            if ($token === '') {
                throw new BusinessException('empty state', ['validation' => ['state' => 'empty field']]);
            }
            $token = JWT::decode($token, new Key(config('yellowimages.jwt_key'), 'HS256'));
            if (!property_exists($token, 'id') || !is_numeric($token->id)) {
                throw new BusinessException('empty or incorrect id', ['id' => $token->id ?? '']);
            }
            if (!property_exists($token, 'token') || empty($token->token)) {
                throw new BusinessException('empty or incorrect token', ['token' => $token->token ?? '']);
            }
            Session::put('yellow_sso_token', $token->token);
            Auth::loginUsingId($token->id);
        } catch (BusinessException $exception) {
            Log::error($exception->getMessage(), $exception->getContext() + ['method' => 'SSOController::callback']);

            return response()->json(
              [
                'success' => false,
                'message' => $exception->getMessage(),
              ]
            );
        } catch (Throwable $exception) {
            Log::error($exception->getMessage(), ['method' => 'SSOController::callback']);

            return response()->json(
              [
                'success' => false,
                'message' => 'Something wrong!',
              ]
            );
        }

        return redirect('/');
    }

    public function getShortUserInfo(Request $request): JsonResponse
    {
        try {
            if (empty($request->get('user_id')) || !is_numeric($request->get('user_id'))) {
                throw new BusinessException('invalid request body: empty user_id', []);
            }

            if (empty($request->get('token'))) {
                throw new BusinessException('invalid request body: empty token', []);
            }

            return response()->json(
              [
                'success' => true,
                'user' => $this->service->getShortUserInfo((int) $request->get('user_id'), $request->get('token'))
              ]
            );
        } catch (Throwable $exception) {
            return response()->json(
              [
                'success' => false,
                'msg' => $exception->getMessage()
              ]
            );
        }
    }

    public function getFullUserInfo(Request $request): JsonResponse
    {
        try {
            if (empty($request->get('user_id')) || !is_numeric($request->get('user_id'))) {
                throw new BusinessException('invalid request body', []);
            }

            return response()->json(
              [
                'success' => true,
                'user' => $this->service->getFullUserInfo((int) $request->get('user_id'), true)
              ]
            );
        } catch (Throwable $exception) {
            return response()->json(
              [
                'success' => false,
                'msg' => $exception->getMessage()
              ]
            );
        }
    }
}