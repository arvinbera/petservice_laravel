<?php

namespace App\Observers;

use App\Models\UserGallery;

class UserGalleryObserver
{
    /**
     * Handle the UserGallery "created" event.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return void
     */
    public function created(UserGallery $userGallery)
    {
        //
    }

    /**
     * Handle the UserGallery "updated" event.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return void
     */
    public function updated(UserGallery $userGallery)
    {
        //
    }

    /**
     * Handle the UserGallery "deleted" event.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return void
     */
    public function deleted(UserGallery $userGallery)
    {
        //
    }

    /**
     * Handle the UserGallery "restored" event.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return void
     */
    public function restored(UserGallery $userGallery)
    {
        //
    }

    /**
     * Handle the UserGallery "force deleted" event.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return void
     */
    public function forceDeleted(UserGallery $userGallery)
    {
        //
    }
}
