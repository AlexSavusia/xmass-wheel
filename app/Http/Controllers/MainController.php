<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Exceptions\BusinessException;
use App\Models\Wheel\AccrualPrize;
use App\Services\SSOService;
use App\Services\WheelService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Throwable;

final class MainController extends Controller
{
    public function __construct(
        private readonly SSOService $service,
        private readonly WheelService $wheelService
    )
    {
    }

    public function index(): View
    {
        $user = null;
        $wheel = null;
        try {
            if (Auth::id() !== null && is_numeric(Auth::id())) {
                $token = Session::get('yellow_sso_token') ?? '';
                $user = $this->service->getFullUserInfo((int)Auth::id(), $token, true);
                $wheel = $this->wheelService->getWheelAttemptsByUser((int) Auth::id());
            }
        } catch (BusinessException $exception) {
            Log::error(
                $exception->getMessage(),
                $exception->getContext() + ['do' => 'MainController::__invoke']
            );
        } catch (Throwable $exception) {
            Log::error($exception->getMessage(), ['do' => 'MainController::__invoke']);
        }

        Log::info('view', [
            'user' => $user,
            'token' => $token ?? null,
            'spin_info' => $this->wheelService->spinInfo(Auth::id()),
            'free_attempt_available_time_at' => $wheel?->free_attempt_available_time_at,
        ]);

        return view('main', [
            'user' => $user,
            'token' => $token ?? null,
            'spin_info' => $this->wheelService->spinInfo(Auth::id()),
            'free_attempt_available_time_at' => $wheel?->free_attempt_available_time_at,
        ]);
    }

    public function spin(): View
    {
        $user = null;
        $wheel = null;
        try {
            if (Auth::id() !== null && is_numeric(Auth::id())) {
                $token = Session::get('yellow_sso_token') ?? '';
                $user = $this->service->getFullUserInfo((int)Auth::id(), $token, true);
                $wheel = $this->wheelService->getWheelAttemptsByUser((int) Auth::id());
            }
        } catch (BusinessException $exception) {
            Log::error(
                $exception->getMessage(),
                $exception->getContext() + ['do' => 'MainController::__invoke']
            );
        } catch (Throwable $exception) {
            Log::error($exception->getMessage(), ['do' => 'MainController::__invoke']);
        }

        Log::info('view', [
            'user' => $user,
            'token' => $token ?? null,
            'spin_info' => $this->wheelService->spinInfo(Auth::id()),
            'free_attempt_available_time_at' => $wheel?->free_attempt_available_time_at,
        ]);

        return view('spin', [
            'user' => $user,
            'token' => $token ?? null,
            'spin_info' => $this->wheelService->spinInfo(Auth::id()),
            'free_attempt_available_time_at' => $wheel?->free_attempt_available_time_at,
        ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }

    public function prizes(): JsonResponse
    {
        $model = new AccrualPrize();
        return response()->json($model::all(['prize_name', 'prize_type', 'prize_slug'])->toArray());
    }

    public function debug(Request $request): RedirectResponse|JsonResponse
    {
        if ($request->get('key') !== config('yellowimages.jwt_key')) {
            return redirect('/');
        }

        return response()->json(
            [
                'prizeTicketerCollection' => $this->wheelService->getTicketersPrizeList(),
                'prizeNonTicketerCollection' => $this->wheelService->getNonTicketersPrizeList(),
            ]
        );
    }
}