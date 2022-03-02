<?php


use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BreedController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventParticipantController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FriendshipController;
use App\Http\Controllers\Admin\GroupMemberController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderTrackerController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PetDetailController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\PostCommentController;
use App\Http\Controllers\Admin\PostLikeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RatingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\UserCartController;
use App\Http\Controllers\Admin\UserGalleryController;
use App\Http\Controllers\Admin\UserOrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserServiceController;
use App\Http\Controllers\Admin\UserSubscriptionController;
use App\Http\Controllers\Admin\UserTransactionController;
use App\Http\Controllers\Admin\UserWalletController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
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

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('profile', AddressController::class);

    Route::resource('address', AddressController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('breed', BreedController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('event-participant', EventParticipantController::class);
    Route::resource('event', EventController::class);
    Route::resource('friendship', FriendshipController::class);
    Route::resource('group-member', GroupMemberController::class);
    Route::resource('group', GroupController::class);
    Route::resource('notification', NotificationController::class);
    Route::resource('order-detail', OrderDetailController::class);
    Route::resource('order', OrderController::class);
    Route::resource('order-tracker', OrderTrackerController::class);
    Route::resource('organization', OrganizationController::class);
    Route::resource('page', PageController::class);
    Route::resource('pet-detail', PetDetailController::class);
    Route::resource('pet', PetController::class);
    Route::resource('post-comment', PostCommentController::class);
    Route::resource('post-like', PostLikeController::class);
    Route::resource('post', PostController::class);
    Route::resource('product', ProductController::class);
    Route::resource('rating', RatingController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('shop', ShopController::class);
    Route::resource('subscription', SubscriptionController::class);
    Route::resource('user-cart', UserCartController::class);
    Route::resource('user-gallery', UserGalleryController::class);
    Route::resource('user-order', UserOrderController::class);
    Route::resource('user', UserController::class);
    Route::resource('user-service', UserServiceController::class);
    Route::resource('user-subscription', UserSubscriptionController::class);
    Route::resource('user-transaction', UserTransactionController::class);
    Route::resource('user-wallet', UserWalletController::class);
});
