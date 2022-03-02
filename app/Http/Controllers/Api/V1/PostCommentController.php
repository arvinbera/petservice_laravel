<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StorePostCommentRequest;
use App\Http\Requests\Api\V1\UpdatePostCommentRequest;
use App\Http\Resources\PostCommentResource;
use App\Models\PostComment;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postComment = PostComment::latest()->paginate();

        return PostCommentResource::collection($postComment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostCommentRequest $request)
    {
        $postComment = PostComment::create($request->all());

        return response(['message' => 'created successfully.', 'data' => PostCommentResource::make($postComment)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function show(PostComment $postComment)
    {
        return PostCommentResource::make($postComment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostCommentRequest  $request
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostCommentRequest $request, PostComment $postComment)
    {
        $postComment->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  PostCommentResource::make($postComment)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostComment $postComment)
    {
        $postComment->delete();

        return response(['message' => 'deleted successfully']);
    }
}
