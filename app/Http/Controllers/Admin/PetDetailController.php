<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePetDetailRequest;
use App\Http\Requests\Admin\UpdatePetDetailRequest;
use App\Models\PetDetail;

class PetDetailController extends Controller
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
     * @param  \App\Http\Requests\StorePetDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PetDetail $petDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PetDetail $petDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetDetailRequest  $request
     * @param  \App\Models\PetDetail  $petDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetDetailRequest $request, PetDetail $petDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetDetail $petDetail)
    {
        //
    }
}
