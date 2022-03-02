<?php

namespace App\Observers;

use App\Models\PostLike;

class PostLikeObserver
{
    /**
     * Handle the PostLike "created" event.
     *
     * @param  \App\Models\PostLike  $postLike
     * @return void
     */
    public function created(PostLike $postLike)
    {
        //
    }

    /**
     * Handle the PostLike "updated" event.
     *
     * @param  \App\Models\PostLike  $postLike
     * @return void
     */
    public function updated(PostLike $postLike)
    {
        //
    }

    /**
     * Handle the PostLike "deleted" event.
     *
     * @param  \App\Models\PostLike  $postLike
     * @return void
     */
    public function deleted(PostLike $postLike)
    {
        //
    }

    /**
     * Handle the PostLike "restored" event.
     *
     * @param  \App\Models\PostLike  $postLike
     * @return void
     */
    public function restored(PostLike $postLike)
    {
        //
    }

    /**
     * Handle the PostLike "force deleted" event.
     *
     * @param  \App\Models\PostLike  $postLike
     * @return void
     */
    public function forceDeleted(PostLike $postLike)
    {
        //
    }
}
