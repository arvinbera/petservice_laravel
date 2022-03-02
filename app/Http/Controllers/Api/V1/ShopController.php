<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreShopRequest;
use App\Http\Requests\Api\V1\UpdateShopRequest;
use App\Http\Resources\ShopResource;
use App\Models\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Shop::latest()->paginate();

        return ShopResource::collection($shop);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopRequest $request)
    {
        $shop = Shop::create($request->all());

        return response(['message' => 'created successfully.', 'data' => ShopResource::make($shop)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return ShopResource::make($shop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopRequest  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        $shop->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  ShopResource::make($shop)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();

        return response(['message' => 'deleted successfully']);
    }
}
