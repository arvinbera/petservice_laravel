<?php

use App\Http\Controllers\Api\V1\AddressController;
use App\Http\Controllers\Api\V1\BannerController;
use App\Http\Controllers\Api\V1\BreedController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\EventController;
use App\Http\Controllers\Api\V1\EventParticipantController;
use App\Http\Controllers\Api\V1\FriendshipController;
use App\Http\Controllers\Api\V1\GroupController;
use App\Http\Controllers\Api\V1\GroupMemberController;
use App\Http\Controllers\Api\V1\NotificationController;
use App\Http\Controllers\Api\V1\OrderController;
use App\Http\Controllers\Api\V1\OrderDetailController;
use App\Http\Controllers\Api\V1\OrganizationController;
use App\Http\Controllers\Api\V1\PageController;
use App\Http\Controllers\Api\V1\PetController;
use App\Http\Controllers\Api\V1\PetDetailController;
use App\Http\Controllers\Api\V1\PostCommentController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\PostLikeController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\RatingController;
use App\Http\Controllers\Api\V1\ServiceController;
use App\Http\Controllers\Api\V1\SettingController;
use App\Http\Controllers\Api\V1\ShopController;
use App\Http\Controllers\Api\V1\SubscriptionController;
use App\Http\Controllers\Api\V1\UserAuthController;
use App\Http\Controllers\Api\V1\UserCartController;
use App\Http\Controllers\Api\V1\UserGalleryController;
use App\Http\Controllers\Api\V1\UserOrderController;
use App\Http\Controllers\Api\V1\UserServiceController;
use App\Http\Controllers\Api\V1\UserSubscriptionController;
use App\Http\Controllers\Api\V1\UserTransactionController;
use App\Http\Controllers\Api\V1\UserWalletController;
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

Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('address', AddressController::class);
    Route::apiResource('banner', BannerController::class);
    Route::apiResource('breed', BreedController::class);
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('event', EventController::class);
    Route::apiResource('event-participant', EventParticipantController::class);
    Route::apiResource('friendship', FriendshipController::class);
    Route::apiResource('group', GroupController::class);
    Route::apiResource('group-member', GroupMemberController::class);

    Route::apiResource('notification', NotificationController::class);
    Route::apiResource('order', OrderController::class);
    Route::apiResource('order-detail', OrderDetailController::class);
    Route::apiResource('organization', OrganizationController::class);
    Route::apiResource('page', PageController::class);

    Route::apiResource('pet', PetController::class);
    Route::apiResource('pet-detail', PetDetailController::class);
    Route::apiResource('post-comment', PostCommentController::class);
    Route::apiResource('post', PostController::class);
    Route::apiResource('post-like', PostLikeController::class);
    Route::apiResource('product', ProductController::class);
    Route::apiResource('rating', RatingController::class);
    Route::apiResource('service', ServiceController::class);
    Route::apiResource('setting', SettingController::class);
    Route::apiResource('shop', ShopController::class);
    Route::apiResource('subscription', SubscriptionController::class);
    Route::apiResource('user-cart', UserCartController::class);
    Route::apiResource('user-gallery', UserGalleryController::class);
    Route::apiResource('user-order', UserOrderController::class);
    Route::apiResource('user-service', UserServiceController::class);
    Route::apiResource('user-subscription', UserSubscriptionController::class);
    Route::apiResource('user-transaction', UserTransactionController::class);
    Route::apiResource('user-wallet', UserWalletController::class);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
