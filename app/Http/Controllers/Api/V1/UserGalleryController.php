<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreUserGalleryRequest;
use App\Http\Requests\Api\V1\UpdateUserGalleryRequest;
use App\Http\Resources\UserGalleryResource;
use App\Models\UserGallery;

class UserGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userGallery = UserGallery::latest()->paginate();

        return UserGalleryResource::collection($userGallery);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserGalleryRequest $request)
    {
        $userGallery = UserGallery::create($request->all());

        return response(['message' => 'created successfully.', 'data' => UserGalleryResource::make($userGallery)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return \Illuminate\Http\Response
     */
    public function show(UserGallery $userGallery)
    {
        return UserGalleryResource::make($userGallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserGalleryRequest  $request
     * @param  \App\Models\UserGallery  $userGallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserGalleryRequest $request, UserGallery $userGallery)
    {
        $userGallery->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  UserGalleryResource::make($userGallery)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserGallery $userGallery)
    {
        $userGallery->delete();

        return response(['message' => 'deleted successfully']);
    }
}
