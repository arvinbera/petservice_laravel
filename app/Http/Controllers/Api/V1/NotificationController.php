<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreNotificationRequest;
use App\Http\Requests\Api\V1\UpdateNotificationRequest;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notification = Notification::latest()->paginate();

        return NotificationResource::collection($notification);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNotificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotificationRequest $request)
    {
        $notification = Notification::create($request->all());

        return response(['message' => 'created successfully.', 'data' => NotificationResource::make($notification)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        return NotificationResource::make($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotificationRequest  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        $notification->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  NotificationResource::make($notification)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();

        return response(['message' => 'deleted successfully']);
    }
}
