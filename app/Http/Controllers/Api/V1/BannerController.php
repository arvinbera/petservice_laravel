<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreBannerRequest;
use App\Http\Requests\Api\V1\UpdateBannerRequest;
use App\Http\Resources\BannerResource;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->paginate();

        return BannerResource::collection($banners);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerRequest $request)
    {
        $banner = Banner::create($request->all());

        return response(['message' => 'created successfully.', 'data' => BannerResource::make($banner)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        return BannerResource::make($banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $banner->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  BannerResource::make($banner)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return response(['message' => 'deleted successfully']);
    }
}
