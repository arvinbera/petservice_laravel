<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StorePetDetailRequest;
use App\Http\Requests\Api\V1\UpdatePetDetailRequest;
use App\Http\Resources\PetDetailResource;
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
        $petDetail = PetDetail::latest()->paginate();

        return PetDetailResource::collection($petDetail);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetDetailRequest $request)
    {
        $petDetail = PetDetail::create($request->all());

        return response(['message' => 'created successfully.', 'data' => PetDetailResource::make($petDetail)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PetDetail $petDetail)
    {
        return PetDetailResource::make($petDetail);
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
        $petDetail->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  PetDetailResource::make($petDetail)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetDetail  $petDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetDetail $petDetail)
    {
        $petDetail->delete();

        return response(['message' => 'deleted successfully']);
    }
}
