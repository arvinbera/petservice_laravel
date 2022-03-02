<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Helpers\Cart;
use Ichtrojan\Otp\Otp;
use App\Models\UserCart;
use Illuminate\Support\Str;
// use App\Services\Sms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\UserLoginRequest;
use App\Http\Requests\Api\V1\UserOtpSendRequest;
use App\Http\Requests\Api\V1\UserOtpVerifyRequest;
use App\Http\Requests\Api\V1\UserRegisterRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    public function register(UserRegisterRequest $request)
    {
        // $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);
        $request['type'] = 2;

        $user = User::create($request->toArray());

        $token = $user->createToken('auth_token')->plainTextToken;

        return response([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'message' => 'register Successfully',
        ]);
    }

    public function login(UserLoginRequest $request)
    {
        $user = User::whereMobile($request->mobile)->firstOrFail();

        if ($user) {

            $user->markClientAsVerified([
                'device_os' => $request->device_os,
                'device_type' => $request->device_type,
                'device_name' => $request->device_name,
                'device_token' => $request->device_token,
            ]);

            $token = $user->createToken($request->device_name)->plainTextToken;

            $response = [
                'data' => UserResource::make($user),
                'token_type' => 'bearer',
                'access_token' => $token,
                'message' => 'User Login Success',
            ];

            return response($response);
        }
    }

    protected function sendOtp(UserOtpSendRequest $request)
    {
        $user = User::whereMobile($request->mobile)->firstOrFail();

        if ($user) {

            $otp = (new Otp)->generate($user->mobile, 6, 15);

            $message = "OTP for mobile verification is :" . $otp->token;
            // Sms::send($request->mobile, $message);

            return response(["data" => $otp]);
        }
    }

    public function otpVerify(UserOtpVerifyRequest $request)
    {
        $user = User::whereMobile($request->mobile)->firstOrFail();

        if ($user) {

            $verify = (new Otp)->validate($user->mobile, $request->code);

            if ($verify->status) {

                $user->markClientAsVerified([
                    'device_os' => $request->device_os,
                    'device_type' => $request->device_type,
                    'device_name' => $request->device_name,
                    'device_token' => $request->device_token,
                ]);

                $token = $user->createToken($request->device_name)->plainTextToken;


                $response = [
                    'User' => UserResource::make($user),
                    'token_type' => 'bearer',
                    'access_token' => $token,
                    'message' => 'User Login Success',
                ];
                return response($response);
            }

            return response(["data" => $verify]);
        }
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response(["message" => 'logout successfully.']);
    }
}
