<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Exceptions\BusinessException;
use App\Services\WheelService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Throwable;

final class WheelController extends Controller
{
    public function __construct(
        private readonly WheelService $wheelService
    ){}

    public function accrualAttemptCountByOrder(Request $request): JsonResponse
    {
        try {
            $orderId = $request->get('order_id');
            $userId = $request->get('user_id');
            if (!is_numeric($userId)) {
                throw new BusinessException('empty or invalid user_id', ['user_id' => $userId]);
            }
            $count = $request->get('increment');
            if (!is_numeric($count)) {
                throw new BusinessException('empty or invalid increment', ['increment' => $count]);
            }
            $success = $this->wheelService->accrualAttempt($userId, $orderId, $count, 'order');
        } catch (BusinessException $exception) {
            Log::error($exception->getMessage(), $exception->getContext() + ['method' => 'WheelController::accrualAttemptCountByOrder']);

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

        return response()->json(
            [
                'success' => $success,
            ]
        );
    }

    public function accrualAttemptCountByFree(Request $request): JsonResponse
    {
        try {
            $userId = $request->get('user_id');
            if (!is_numeric($userId)) {
                throw new BusinessException('empty or invalid user_id', ['user_id' => $userId]);
            }
            $success = $this->wheelService->accrualAttempt($userId, null, 1, 'free');
        } catch (BusinessException $exception) {
            Log::error($exception->getMessage(), $exception->getContext() + ['method' => 'WheelController::accrualAttemptCountByFree']);

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

        return response()->json(
            [
                'success' => $success,
            ]
        );
    }

    public function spin(Request $request): JsonResponse
    {
        try {
            $userId = $request->get('user_id');
            if (!is_numeric($userId)) {
                throw new BusinessException('invalid request body: user_id', ['user_id' => $userId]);
            }

            if (empty($request->get('token'))) {
                throw new BusinessException('invalid request body: empty token', []);
            }

            $prize = $this->wheelService->spin((int)$userId, $request->get('token'));
        } catch (BusinessException $exception) {
            Log::error($exception->getMessage(), $exception->getContext() + ['method' => 'WheelController::incrementSpinCount']);

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

        return response()->json(
            [
                'success' => !($prize == false),
                'prize' => $prize,
                'spin_info' => $this->wheelService->spinInfo($userId)
            ]
        );
    }

    public

function spinInfo(Request $request): JsonResponse
{
        $userId = (int) $request->get('user_id');
        return response()->json($this->wheelService->spinInfo($userId));
    }
}