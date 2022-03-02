<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreOrganizationRequest;
use App\Http\Requests\Api\V1\UpdateOrganizationRequest;
use App\Http\Resources\OrganizationResource;
use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organization = Organization::latest()->paginate();

        return OrganizationResource::collection($organization);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrganizationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganizationRequest $request)
    {
        $organization = Organization::create($request->all());

        return response(['message' => 'created successfully.', 'data' => OrganizationResource::make($organization)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        return OrganizationResource::make($organization);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrganizationRequest  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        $organization->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  OrganizationResource::make($organization)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();

        return response(['message' => 'deleted successfully']);
    }
}
