<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserServiceRequest;
use App\Http\Requests\Admin\UpdateUserServiceRequest;
use App\Models\UserService;

class UserServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreUserServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserService  $userService
     * @return \Illuminate\Http\Response
     */
    public function show(UserService $userService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserService  $userService
     * @return \Illuminate\Http\Response
     */
    public function edit(UserService $userService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserServiceRequest  $request
     * @param  \App\Models\UserService  $userService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserServiceRequest $request, UserService $userService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserService  $userService
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserService $userService)
    {
        //
    }
}
