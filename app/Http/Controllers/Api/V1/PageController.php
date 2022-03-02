<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StorePageRequest;
use App\Http\Requests\Api\V1\UpdatePageRequest;
use App\Http\Resources\PageResource;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::latest()->paginate();

        return PageResource::collection($page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        $page = Page::create($request->all());

        return response(['message' => 'created successfully.', 'data' => PageResource::make($page)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return PageResource::make($page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageRequest  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $page->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  PageResource::make($page)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        return response(['message' => 'deleted successfully']);
    }
}
