<?php

namespace App\Observers;

use App\Models\UserWallet;

class UserWalletObserver
{
    /**
     * Handle the UserWallet "created" event.
     *
     * @param  \App\Models\UserWallet  $userWallet
     * @return void
     */
    public function created(UserWallet $userWallet)
    {
        //
    }

    /**
     * Handle the UserWallet "updated" event.
     *
     * @param  \App\Models\UserWallet  $userWallet
     * @return void
     */
    public function updated(UserWallet $userWallet)
    {
        //
    }

    /**
     * Handle the UserWallet "deleted" event.
     *
     * @param  \App\Models\UserWallet  $userWallet
     * @return void
     */
    public function deleted(UserWallet $userWallet)
    {
        //
    }

    /**
     * Handle the UserWallet "restored" event.
     *
     * @param  \App\Models\UserWallet  $userWallet
     * @return void
     */
    public function restored(UserWallet $userWallet)
    {
        //
    }

    /**
     * Handle the UserWallet "force deleted" event.
     *
     * @param  \App\Models\UserWallet  $userWallet
     * @return void
     */
    public function forceDeleted(UserWallet $userWallet)
    {
        //
    }
}
