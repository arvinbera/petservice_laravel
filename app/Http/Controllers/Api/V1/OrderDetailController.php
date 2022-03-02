<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreOrderDetailRequest;
use App\Http\Requests\Api\V1\UpdateOrderDetailRequest;
use App\Http\Resources\OrderDetailResource;
use App\Models\OrderDetail;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderDetail = OrderDetail::latest()->paginate();

        return OrderDetailResource::collection($orderDetail);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderDetailRequest $request)
    {
        $orderDetail = OrderDetail::create($request->all());

        return response(['message' => 'created successfully.', 'data' => OrderDetailResource::make($orderDetail)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDetail $orderDetail)
    {
        return OrderDetailResource::make($orderDetail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderDetailRequest  $request
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderDetailRequest $request, OrderDetail $orderDetail)
    {
        $orderDetail->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  OrderDetailResource::make($orderDetail)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail->delete();

        return response(['message' => 'deleted successfully']);
    }
}
