<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEventParticipantRequest;
use App\Http\Requests\Admin\UpdateEventParticipantRequest;
use App\Models\EventParticipant;

class EventParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventParticipantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventParticipantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return \Illuminate\Http\Response
     */
    public function show(EventParticipant $eventParticipant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return \Illuminate\Http\Response
     */
    public function edit(EventParticipant $eventParticipant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventParticipantRequest  $request
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventParticipantRequest $request, EventParticipant $eventParticipant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventParticipant $eventParticipant)
    {
        //
    }
}
