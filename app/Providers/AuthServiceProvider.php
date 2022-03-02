<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Address' => 'App\Policies\AddressPolicy',
        'App\Models\Banner' => 'App\Policies\BannerPolicy',
        'App\Models\Breed' => 'App\Policies\BreedPolicy',
        'App\Models\Category' => 'App\Policies\CategoryPolicy',
        'App\Models\EventParticipant' => 'App\Policies\EventParticipantPolicy',
        'App\Models\Event' => 'App\Policies\EventPolicy',
        'App\Models\Friendship' => 'App\Policies\FriendshipPolicy',
        'App\Models\GroupMember' => 'App\Policies\GroupMemberPolicy',
        'App\Models\Group' => 'App\Policies\GroupPolicy',
        'App\Models\Notification' => 'App\Policies\NotificationPolicy',
        'App\Models\OrderDetail' => 'App\Policies\OrderDetailPolicy',
        'App\Models\Order' => 'App\Policies\OrderPolicy',
        'App\Models\OrderTracker' => 'App\Policies\OrderTrackerPolicy',
        'App\Models\Organization' => 'App\Policies\OrganizationPolicy',
        'App\Models\Page' => 'App\Policies\PagePolicy',
        'App\Models\PetDetail' => 'App\Policies\PetDetailPolicy',
        'App\Models\Pet' => 'App\Policies\PetPolicy',
        'App\Models\PostComment' => 'App\Policies\PostCommentPolicy',
        'App\Models\PostLike' => 'App\Policies\PostLikePolicy',
        'App\Models\Post' => 'App\Policies\PostPolicy',
        'App\Models\Product' => 'App\Policies\ProductPolicy',
        'App\Models\Rating' => 'App\Policies\RatingPolicy',
        'App\Models\Service' => 'App\Policies\ServicePolicy',
        'App\Models\Setting' => 'App\Policies\SettingPolicy',
        'App\Models\Shop' => 'App\Policies\ShopPolicy',
        'App\Models\Subscription' => 'App\Policies\SubscriptionPolicy',
        'App\Models\UserCart' => 'App\Policies\UserCartPolicy',
        'App\Models\UserGallery' => 'App\Policies\UserGalleryPolicy',
        'App\Models\UserOrder' => 'App\Policies\UserOrderPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        'App\Models\UserService' => 'App\Policies\UserServicePolicy',
        'App\Models\UserSubscription' => 'App\Policies\UserSubscriptionPolicy',
        'App\Models\UserTransaction' => 'App\Policies\UserTransactionPolicy',
        'App\Models\UserWallet' => 'App\Policies\UserWalletPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
