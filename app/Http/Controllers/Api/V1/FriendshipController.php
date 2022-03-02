<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreFriendshipRequest;
use App\Http\Requests\Api\V1\UpdateFriendshipRequest;
use App\Http\Resources\FriendshipResource;
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
        $friendship = Friendship::latest()->paginate();

        return FriendshipResource::collection($friendship);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFriendshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFriendshipRequest $request)
    {
        $friendship = Friendship::create($request->all());

        return response(['message' => 'created successfully.', 'data' => FriendshipResource::make($friendship)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function show(Friendship $friendship)
    {
        return FriendshipResource::make($friendship);
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
        $friendship->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  FriendshipResource::make($friendship)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friendship $friendship)
    {
        $friendship->delete();

        return response(['message' => 'deleted successfully']);
    }
}
