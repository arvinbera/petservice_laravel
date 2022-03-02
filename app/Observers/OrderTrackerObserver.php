<?php

namespace App\Observers;

use App\Models\OrderTracker;

class OrderTrackerObserver
{
    /**
     * Handle the OrderTracker "created" event.
     *
     * @param  \App\Models\OrderTracker  $orderTracker
     * @return void
     */
    public function created(OrderTracker $orderTracker)
    {
        //
    }

    /**
     * Handle the OrderTracker "updated" event.
     *
     * @param  \App\Models\OrderTracker  $orderTracker
     * @return void
     */
    public function updated(OrderTracker $orderTracker)
    {
        //
    }

    /**
     * Handle the OrderTracker "deleted" event.
     *
     * @param  \App\Models\OrderTracker  $orderTracker
     * @return void
     */
    public function deleted(OrderTracker $orderTracker)
    {
        //
    }

    /**
     * Handle the OrderTracker "restored" event.
     *
     * @param  \App\Models\OrderTracker  $orderTracker
     * @return void
     */
    public function restored(OrderTracker $orderTracker)
    {
        //
    }

    /**
     * Handle the OrderTracker "force deleted" event.
     *
     * @param  \App\Models\OrderTracker  $orderTracker
     * @return void
     */
    public function forceDeleted(OrderTracker $orderTracker)
    {
        //
    }
}
