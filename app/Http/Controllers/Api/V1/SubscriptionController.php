<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreSubscriptionRequest;
use App\Http\Requests\Api\V1\UpdateSubscriptionRequest;
use App\Http\Resources\SubscriptionResource;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscription = Subscription::latest()->paginate();

        return SubscriptionResource::collection($subscription);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriptionRequest $request)
    {
        $subscription = Subscription::create($request->all());

        return response(['message' => 'created successfully.', 'data' => SubscriptionResource::make($subscription)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        return SubscriptionResource::make($subscription);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscriptionRequest  $request
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscriptionRequest $request, Subscription $subscription)
    {
        $subscription->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  SubscriptionResource::make($subscription)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return response(['message' => 'deleted successfully']);
    }
}
