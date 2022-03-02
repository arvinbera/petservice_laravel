<?php

namespace App\Observers;

use App\Models\UserCart;

class UserCartObserver
{
    /**
     * Handle the UserCart "created" event.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return void
     */
    public function created(UserCart $userCart)
    {
        //
    }

    /**
     * Handle the UserCart "updated" event.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return void
     */
    public function updated(UserCart $userCart)
    {
        //
    }

    /**
     * Handle the UserCart "deleted" event.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return void
     */
    public function deleted(UserCart $userCart)
    {
        //
    }

    /**
     * Handle the UserCart "restored" event.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return void
     */
    public function restored(UserCart $userCart)
    {
        //
    }

    /**
     * Handle the UserCart "force deleted" event.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return void
     */
    public function forceDeleted(UserCart $userCart)
    {
        //
    }
}
