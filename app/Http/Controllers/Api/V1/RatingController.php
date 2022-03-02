<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreRatingRequest;
use App\Http\Requests\Api\V1\UpdateRatingRequest;
use App\Http\Resources\RatingResource;
use App\Models\Rating;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rating = Rating::latest()->paginate();

        return RatingResource::collection($rating);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRatingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRatingRequest $request)
    {
        $rating = Rating::create($request->all());

        return response(['message' => 'created successfully.', 'data' => RatingResource::make($rating)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        return RatingResource::make($rating);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRatingRequest  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRatingRequest $request, Rating $rating)
    {
        $rating->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  RatingResource::make($rating)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        $rating->delete();

        return response(['message' => 'deleted successfully']);
    }
}
