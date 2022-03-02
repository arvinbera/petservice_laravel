<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserGalleryRequest;
use App\Http\Requests\Admin\UpdateUserGalleryRequest;
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
     * @param  \App\Http\Requests\StoreUserGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return \Illuminate\Http\Response
     */
    public function show(UserGallery $userGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(UserGallery $userGallery)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserGallery  $userGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserGallery $userGallery)
    {
        //
    }
}
