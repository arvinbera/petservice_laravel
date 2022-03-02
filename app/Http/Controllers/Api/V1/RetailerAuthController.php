<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\UserCart;
// use App\Services\Sms;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Sanctum\PersonalAccessToken;

class RetailerAuthController extends Controller
{

    public function register(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:App\Models\User,email',
            'mobile' => 'required|numeric|unique:App\Models\User,mobile',
            'password' => 'required|string|min:8',
        ]);

        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);
        $user = User::create($request->toArray());

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'message' => 'register Successfully',
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|string',
            'password' => 'required|string',
            'device_token' => 'required|string|min:6',
            'device_name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['status' => false, 'errors' => $validator->errors()], 422);
        }

        $user = User::where('mobile', $request->mobile)->first();

        if ($user) {

            $user->markClientAsVerified([
                'device_os' => $request->device_os,
                'device_type' => $request->device_type,
                'device_name' => $request->device_name,
                'device_token' => $request->device_token,
            ]);

            $token = $user->createToken($request->device_name)->plainTextToken;

            $collections = UserCart::with('seller_product')->where('User_id', $user->id)->latest()->get();

            // $cart = Cart::getCartDetails($collections);

            $response = [
                'User' => UserResource::make($user),
                'token_type' => 'bearer',
                'access_token' => $token,
                'message' => 'User Login Success',
                // 'total_items' => $cart['total_items'],
                // 'sub_total_amount' => $cart['sub_total_amount'],
                // 'total_price' => $cart['total_amount'],
            ];
            return response()->json($response, 200);
        }

        return response(['status' => false, 'message' => 'This mobile is not register',], 200);
    }

    public function otpVerify(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|string',
            'code' => 'required|string',
            'password' => 'required|string',
            'device_token' => 'required|string|min:6',
            'device_name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['status' => false, 'errors' => $validator->errors()], 422);
        }

        $user = User::where('mobile', $request->mobile)->first();

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

                $collections = UserCart::with('seller_product')->where('User_id', $user->id)->latest()->get();

                // $cart = Cart::getCartDetails($collections);

                $response = [
                    'User' => UserResource::make($user),
                    'token_type' => 'bearer',
                    'access_token' => $token,
                    'message' => 'User Login Success',
                    //                    'cart' => $cart,
                    // 'total_items' => $cart['total_items'],
                    // 'sub_total_amount' => $cart['sub_total_amount'],
                    // 'total_price' => $cart['total_amount'],
                ];

                return response()->json($response, 200);
            }

            return response()->json($verify);
        }

        return response(['status' => false, 'message' => 'This mobile is not register',], 200);
    }

    public function reset(Request $request)
    {
        $credentials = $request->validate([
            'mobile' => 'required',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
        });

        if ($reset_password_status === Password::INVALID_TOKEN) {
            return response(["msg" => "Invalid token provided"], 400);
        }

        return response(["message" => "Password has been successfully changed"], 200);
    }

    public function change(Request $request)
    {
        $request->validate([
            'password' => ['required'],
        ]);

        User::find($request->user()->id)->update(['password' => Hash::make($request->password)]);
        return response(["message" => 'Password change successfully.'], 200);
    }

    public function logout(Request $request)
    {
        $user = Auth::guard('sanctum')->user();

        $accessToken = $user->currentAccessToken();

        if ($accessToken instanceof PersonalAccessToken) {
            $accessToken->delete();
        }

        return response(["message" => 'logout successfully.'], 200);
    }

    protected function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['status' => false, 'errors' => $validator->errors()], 422);
        }

        $user = User::where('mobile', $request->mobile)->first();

        if ($user) {

            $otp = (new Otp)->generate($user->mobile, 6, 15);

            $message = "OTP for mobile verification is :" . $otp->token;
            // Sms::send($request->mobile, $message);

            return response()->json($otp);
        }

        return response(['message' => 'This mobile is not register',], 200);
    }
}
