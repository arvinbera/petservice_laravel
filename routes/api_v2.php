<?php

use App\Http\Controllers\Api\V1\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('user/register', [UserAuthController::class, 'register']);
Route::post('user/login', [UserAuthController::class, 'login']);
Route::post('user/send-otp', [UserAuthController::class, 'sendOtp']);
Route::post('user/verify-otp', [UserAuthController::class, 'otpVerify']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
