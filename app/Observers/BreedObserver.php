<?php

namespace App\Observers;

use App\Models\Breed;

class BreedObserver
{
    /**
     * Handle the Breed "created" event.
     *
     * @param  \App\Models\Breed  $breed
     * @return void
     */
    public function created(Breed $breed)
    {
        //
    }

    /**
     * Handle the Breed "updated" event.
     *
     * @param  \App\Models\Breed  $breed
     * @return void
     */
    public function updated(Breed $breed)
    {
        //
    }

    /**
     * Handle the Breed "deleted" event.
     *
     * @param  \App\Models\Breed  $breed
     * @return void
     */
    public function deleted(Breed $breed)
    {
        //
    }

    /**
     * Handle the Breed "restored" event.
     *
     * @param  \App\Models\Breed  $breed
     * @return void
     */
    public function restored(Breed $breed)
    {
        //
    }

    /**
     * Handle the Breed "force deleted" event.
     *
     * @param  \App\Models\Breed  $breed
     * @return void
     */
    public function forceDeleted(Breed $breed)
    {
        //
    }
}
