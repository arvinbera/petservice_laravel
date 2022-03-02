<?php

namespace App\Observers;

use App\Models\EventParticipant;

class EventParticipantObserver
{
    /**
     * Handle the EventParticipant "created" event.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return void
     */
    public function created(EventParticipant $eventParticipant)
    {
        //
    }

    /**
     * Handle the EventParticipant "updated" event.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return void
     */
    public function updated(EventParticipant $eventParticipant)
    {
        //
    }

    /**
     * Handle the EventParticipant "deleted" event.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return void
     */
    public function deleted(EventParticipant $eventParticipant)
    {
        //
    }

    /**
     * Handle the EventParticipant "restored" event.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return void
     */
    public function restored(EventParticipant $eventParticipant)
    {
        //
    }

    /**
     * Handle the EventParticipant "force deleted" event.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return void
     */
    public function forceDeleted(EventParticipant $eventParticipant)
    {
        //
    }
}
