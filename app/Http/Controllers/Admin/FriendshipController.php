<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFriendshipRequest;
use App\Http\Requests\Admin\UpdateFriendshipRequest;
use App\Models\Friendship;

class FriendshipController extends Controller
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
     * @param  \App\Http\Requests\StoreFriendshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFriendshipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function show(Friendship $friendship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function edit(Friendship $friendship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFriendshipRequest  $request
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFriendshipRequest $request, Friendship $friendship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friendship $friendship)
    {
        //
    }
}
