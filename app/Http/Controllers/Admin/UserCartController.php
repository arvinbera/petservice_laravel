<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserCartRequest;
use App\Http\Requests\Admin\UpdateUserCartRequest;
use App\Models\UserCart;

class UserCartController extends Controller
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
     * @param  \App\Http\Requests\StoreUserCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return \Illuminate\Http\Response
     */
    public function show(UserCart $userCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCart $userCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCartRequest  $request
     * @param  \App\Models\UserCart  $userCart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCartRequest $request, UserCart $userCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCart $userCart)
    {
        //
    }
}
