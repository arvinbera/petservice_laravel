<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StorePetRequest;
use App\Http\Requests\Api\V1\UpdatePetRequest;
use App\Http\Resources\PetResource;
use App\Models\Pet;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet = Pet::latest()->paginate();

        return PetResource::collection($pet);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetRequest $request)
    {
        $pet = Pet::create($request->all());

        return response(['message' => 'created successfully.', 'data' => PetResource::make($pet)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return PetResource::make($pet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetRequest  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetRequest $request, Pet $pet)
    {
        $pet->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  PetResource::make($pet)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();

        return response(['message' => 'deleted successfully']);
    }
}
