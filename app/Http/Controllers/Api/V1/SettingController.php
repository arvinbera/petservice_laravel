<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreSettingRequest;
use App\Http\Requests\Api\V1\UpdateSettingRequest;
use App\Http\Resources\SettingResource;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::latest()->paginate();

        return SettingResource::collection($setting);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSettingRequest $request)
    {
        $setting = Setting::create($request->all());

        return response(['message' => 'created successfully.', 'data' => SettingResource::make($setting)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        return SettingResource::make($setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  SettingResource::make($setting)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();

        return response(['message' => 'deleted successfully']);
    }
}
