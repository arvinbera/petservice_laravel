<?php

namespace App\Observers;

use App\Models\Friendship;

class FriendshipObserver
{
    /**
     * Handle the Friendship "created" event.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return void
     */
    public function created(Friendship $friendship)
    {
        //
    }

    /**
     * Handle the Friendship "updated" event.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return void
     */
    public function updated(Friendship $friendship)
    {
        //
    }

    /**
     * Handle the Friendship "deleted" event.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return void
     */
    public function deleted(Friendship $friendship)
    {
        //
    }

    /**
     * Handle the Friendship "restored" event.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return void
     */
    public function restored(Friendship $friendship)
    {
        //
    }

    /**
     * Handle the Friendship "force deleted" event.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return void
     */
    public function forceDeleted(Friendship $friendship)
    {
        //
    }
}
