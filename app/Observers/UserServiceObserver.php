<?php

namespace App\Observers;

use App\Models\UserService;

class UserServiceObserver
{
    /**
     * Handle the UserService "created" event.
     *
     * @param  \App\Models\UserService  $userService
     * @return void
     */
    public function created(UserService $userService)
    {
        //
    }

    /**
     * Handle the UserService "updated" event.
     *
     * @param  \App\Models\UserService  $userService
     * @return void
     */
    public function updated(UserService $userService)
    {
        //
    }

    /**
     * Handle the UserService "deleted" event.
     *
     * @param  \App\Models\UserService  $userService
     * @return void
     */
    public function deleted(UserService $userService)
    {
        //
    }

    /**
     * Handle the UserService "restored" event.
     *
     * @param  \App\Models\UserService  $userService
     * @return void
     */
    public function restored(UserService $userService)
    {
        //
    }

    /**
     * Handle the UserService "force deleted" event.
     *
     * @param  \App\Models\UserService  $userService
     * @return void
     */
    public function forceDeleted(UserService $userService)
    {
        //
    }
}
