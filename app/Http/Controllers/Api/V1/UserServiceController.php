<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreUserServiceRequest;
use App\Http\Requests\Api\V1\UpdateUserServiceRequest;
use App\Http\Resources\UserServiceResource;
use App\Models\UserService;

class UserServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userService = UserService::latest()->paginate();

        return UserServiceResource::collection($userService);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserServiceRequest $request)
    {
        $userService = UserService::create($request->all());

        return response(['message' => 'created successfully.', 'data' => UserServiceResource::make($userService)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserService  $userService
     * @return \Illuminate\Http\Response
     */
    public function show(UserService $userService)
    {
        return UserServiceResource::make($userService);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserServiceRequest  $request
     * @param  \App\Models\UserService  $userService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserServiceRequest $request, UserService $userService)
    {
        $userService->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  UserServiceResource::make($userService)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserService  $userService
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserService $userService)
    {
        $userService->delete();

        return response(['message' => 'deleted successfully']);
    }
}
