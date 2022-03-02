<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreUserOrderRequest;
use App\Http\Requests\Api\V1\UpdateUserOrderRequest;
use App\Http\Resources\UserOrderResource;
use App\Models\UserOrder;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userOrder = UserOrder::latest()->paginate();

        return UserOrderResource::collection($userOrder);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserOrderRequest $request)
    {
        $userOrder = UserOrder::create($request->all());

        return response(['message' => 'created successfully.', 'data' => UserOrderResource::make($userOrder)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function show(UserOrder $userOrder)
    {
        return UserOrderResource::make($userOrder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserOrderRequest  $request
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserOrderRequest $request, UserOrder $userOrder)
    {
        $userOrder->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  UserOrderResource::make($userOrder)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserOrder $userOrder)
    {
        $userOrder->delete();

        return response(['message' => 'deleted successfully']);
    }
}
