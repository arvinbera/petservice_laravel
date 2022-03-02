<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreEventParticipantRequest;
use App\Http\Requests\Api\V1\UpdateEventParticipantRequest;
use App\Http\Resources\EventParticipantResource;
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
        $eventParticipant = EventParticipant::latest()->paginate();

        return EventParticipantResource::collection($eventParticipant);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventParticipantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventParticipantRequest $request)
    {
        $eventParticipant = EventParticipant::create($request->all());

        return response(['message' => 'created successfully.', 'data' => EventParticipantResource::make($eventParticipant)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return \Illuminate\Http\Response
     */
    public function show(EventParticipant $eventParticipant)
    {
        return EventParticipantResource::make($eventParticipant);
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
        $eventParticipant->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  EventParticipantResource::make($eventParticipant)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventParticipant  $eventParticipant
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventParticipant $eventParticipant)
    {
        $eventParticipant->delete();

        return response(['message' => 'deleted successfully']);
    }
}
