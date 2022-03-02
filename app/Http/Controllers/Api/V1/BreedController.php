<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreBreedRequest;
use App\Http\Requests\Api\V1\UpdateBreedRequest;
use App\Http\Resources\BreedResource;
use App\Models\Breed;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breeds = Breed::latest()->paginate();

        return BreedResource::collection($breeds);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBreedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBreedRequest $request)
    {

        $breed = Breed::create($request->all());

        return response(['message' => 'created successfully.', 'data' => BreedResource::make($breed)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function show(Breed $breed)
    {
        return BreedResource::make($breed);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBreedRequest  $request
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        $breed->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  BreedResource::make($breed)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breed $breed)
    {
        $breed->delete();

        return response(['message' => 'deleted successfully']);
    }
}
