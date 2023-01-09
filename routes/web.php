<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SSOController;
use App\Http\Controllers\WheelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('/debug', [MainController::class, 'debug']);
Route::get('/prizes', [MainController::class, 'prizes']);
Route::get('/spin', [MainController::class, 'spin']);
Route::get('/sso', [SSOController::class, 'redirect']);
Route::get('/sso/callback', [SSOController::class, 'callback']);
Route::get('/sso/short-user-info', [SSOController::class, 'getShortUserInfo']);
Route::get('/sso/full-user-info', [SSOController::class, 'getFullUserInfo']);
Route::get('/logout', [MainController::class, 'logout']);
Route::post('/wheel/spin', [WheelController::class, 'spin']);
Route::post('/wheel/spin-info', [WheelController::class, 'spinInfo']);
Route::post('/increment-spin-count', [WheelController::class, 'accrualAttemptCountByOrder']);
Route::post('/accrual-attempt-count-free', [WheelController::class, 'accrualAttemptCountByFree']);
