<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreUserWalletRequest;
use App\Http\Requests\Api\V1\UpdateUserWalletRequest;
use App\Http\Resources\UserWalletResource;
use App\Models\UserWallet;

class UserWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userWallet = UserWallet::latest()->paginate();

        return UserWalletResource::collection($userWallet);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserWalletRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserWalletRequest $request)
    {
        $userWallet = UserWallet::create($request->all());

        return response(['message' => 'created successfully.', 'data' => UserWalletResource::make($userWallet)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserWallet  $userWallet
     * @return \Illuminate\Http\Response
     */
    public function show(UserWallet $userWallet)
    {
        return UserWalletResource::make($userWallet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserWalletRequest  $request
     * @param  \App\Models\UserWallet  $userWallet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserWalletRequest $request, UserWallet $userWallet)
    {
        $userWallet->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  UserWalletResource::make($userWallet)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserWallet  $userWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserWallet $userWallet)
    {
        $userWallet->delete();

        return response(['message' => 'deleted successfully']);
    }
}
