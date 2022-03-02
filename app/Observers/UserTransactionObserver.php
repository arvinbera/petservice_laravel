<?php

namespace App\Observers;

use App\Models\UserTransaction;

class UserTransactionObserver
{
    /**
     * Handle the UserTransaction "created" event.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return void
     */
    public function created(UserTransaction $userTransaction)
    {
        //
    }

    /**
     * Handle the UserTransaction "updated" event.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return void
     */
    public function updated(UserTransaction $userTransaction)
    {
        //
    }

    /**
     * Handle the UserTransaction "deleted" event.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return void
     */
    public function deleted(UserTransaction $userTransaction)
    {
        //
    }

    /**
     * Handle the UserTransaction "restored" event.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return void
     */
    public function restored(UserTransaction $userTransaction)
    {
        //
    }

    /**
     * Handle the UserTransaction "force deleted" event.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return void
     */
    public function forceDeleted(UserTransaction $userTransaction)
    {
        //
    }
}
