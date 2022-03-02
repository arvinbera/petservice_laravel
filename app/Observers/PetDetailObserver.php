<?php

namespace App\Observers;

use App\Models\PetDetail;

class PetDetailObserver
{
    /**
     * Handle the PetDetail "created" event.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return void
     */
    public function created(PetDetail $petDetail)
    {
        //
    }

    /**
     * Handle the PetDetail "updated" event.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return void
     */
    public function updated(PetDetail $petDetail)
    {
        //
    }

    /**
     * Handle the PetDetail "deleted" event.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return void
     */
    public function deleted(PetDetail $petDetail)
    {
        //
    }

    /**
     * Handle the PetDetail "restored" event.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return void
     */
    public function restored(PetDetail $petDetail)
    {
        //
    }

    /**
     * Handle the PetDetail "force deleted" event.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return void
     */
    public function forceDeleted(PetDetail $petDetail)
    {
        //
    }
}
