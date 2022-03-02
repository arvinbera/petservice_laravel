<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreGroupMemberRequest;
use App\Http\Requests\Api\V1\UpdateGroupMemberRequest;
use App\Http\Resources\GroupMemberResource;
use App\Models\GroupMember;

class GroupMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupMember = GroupMember::latest()->paginate();

        return GroupMemberResource::collection($groupMember);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGroupMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupMemberRequest $request)
    {
        $groupMember = GroupMember::create($request->all());

        return response(['message' => 'created successfully.', 'data' => GroupMemberResource::make($groupMember)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function show(GroupMember $groupMember)
    {
        return GroupMemberResource::make($groupMember);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupMemberRequest  $request
     * @param  \App\Models\GroupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupMemberRequest $request, GroupMember $groupMember)
    {
        $groupMember->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  GroupMemberResource::make($groupMember)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupMember $groupMember)
    {
        $groupMember->delete();

        return response(['message' => 'deleted successfully']);
    }
}
