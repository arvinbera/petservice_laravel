<?php

namespace App\Observers;

use App\Models\UserOrder;

class UserOrderObserver
{
    /**
     * Handle the UserOrder "created" event.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return void
     */
    public function created(UserOrder $userOrder)
    {
        //
    }

    /**
     * Handle the UserOrder "updated" event.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return void
     */
    public function updated(UserOrder $userOrder)
    {
        //
    }

    /**
     * Handle the UserOrder "deleted" event.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return void
     */
    public function deleted(UserOrder $userOrder)
    {
        //
    }

    /**
     * Handle the UserOrder "restored" event.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return void
     */
    public function restored(UserOrder $userOrder)
    {
        //
    }

    /**
     * Handle the UserOrder "force deleted" event.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return void
     */
    public function forceDeleted(UserOrder $userOrder)
    {
        //
    }
}
