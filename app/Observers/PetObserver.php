<?php

namespace App\Observers;

use App\Models\Pet;

class PetObserver
{
    /**
     * Handle the Pet "created" event.
     *
     * @param  \App\Models\Pet  $pet
     * @return void
     */
    public function created(Pet $pet)
    {
        //
    }

    /**
     * Handle the Pet "updated" event.
     *
     * @param  \App\Models\Pet  $pet
     * @return void
     */
    public function updated(Pet $pet)
    {
        //
    }

    /**
     * Handle the Pet "deleted" event.
     *
     * @param  \App\Models\Pet  $pet
     * @return void
     */
    public function deleted(Pet $pet)
    {
        //
    }

    /**
     * Handle the Pet "restored" event.
     *
     * @param  \App\Models\Pet  $pet
     * @return void
     */
    public function restored(Pet $pet)
    {
        //
    }

    /**
     * Handle the Pet "force deleted" event.
     *
     * @param  \App\Models\Pet  $pet
     * @return void
     */
    public function forceDeleted(Pet $pet)
    {
        //
    }
}
