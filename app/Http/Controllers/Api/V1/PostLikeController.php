<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StorePostLikeRequest;
use App\Http\Requests\Api\V1\UpdatePostLikeRequest;
use App\Http\Resources\PostLikeResource;
use App\Models\PostLike;

class PostLikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postLike = PostLike::latest()->paginate();

        return PostLikeResource::collection($postLike);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostLikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostLikeRequest $request)
    {
        $postLike = PostLike::create($request->all());

        return response(['message' => 'created successfully.', 'data' => PostLikeResource::make($postLike)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostLike  $postLike
     * @return \Illuminate\Http\Response
     */
    public function show(PostLike $postLike)
    {
        return PostLikeResource::make($postLike);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostLikeRequest  $request
     * @param  \App\Models\PostLike  $postLike
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostLikeRequest $request, PostLike $postLike)
    {
        $postLike->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  PostLikeResource::make($postLike)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostLike  $postLike
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostLike $postLike)
    {
        $postLike->delete();

        return response(['message' => 'deleted successfully']);
    }
}
