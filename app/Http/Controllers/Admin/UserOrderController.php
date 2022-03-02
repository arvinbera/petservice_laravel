<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserOrderRequest;
use App\Http\Requests\Admin\UpdateUserOrderRequest;
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
     * @param  \App\Http\Requests\StoreUserOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function show(UserOrder $userOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(UserOrder $userOrder)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserOrder $userOrder)
    {
        //
    }
}
