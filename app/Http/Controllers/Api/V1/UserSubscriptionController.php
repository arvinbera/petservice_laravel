<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreUserSubscriptionRequest;
use App\Http\Requests\Api\V1\UpdateUserSubscriptionRequest;
use App\Http\Resources\UserSubscriptionResource;
use App\Models\UserSubscription;

class UserSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userSubscription = UserSubscription::latest()->paginate();

        return UserSubscriptionResource::collection($userSubscription);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserSubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserSubscriptionRequest $request)
    {
        $userSubscription = UserSubscription::create($request->all());

        return response(['message' => 'created successfully.', 'data' => UserSubscriptionResource::make($userSubscription)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserSubscription  $userSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(UserSubscription $userSubscription)
    {
        return UserSubscriptionResource::make($userSubscription);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserSubscriptionRequest  $request
     * @param  \App\Models\UserSubscription  $userSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserSubscriptionRequest $request, UserSubscription $userSubscription)
    {
        $userSubscription->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  UserSubscriptionResource::make($userSubscription)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSubscription  $userSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSubscription $userSubscription)
    {
        $userSubscription->delete();

        return response(['message' => 'deleted successfully']);
    }
}
