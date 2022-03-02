<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreUserCartRequest;
use App\Http\Requests\Api\V1\UpdateUserCartRequest;
use App\Http\Resources\UserCartResource;
use App\Models\UserCart;

class UserCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCart = UserCart::latest()->paginate();

        return UserCartResource::collection($userCart);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCartRequest $request)
    {
        $userCart = UserCart::create($request->all());

        return response(['message' => 'created successfully.', 'data' => UserCartResource::make($userCart)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return \Illuminate\Http\Response
     */
    public function show(UserCart $userCart)
    {
        return UserCartResource::make($userCart);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCartRequest  $request
     * @param  \App\Models\UserCart  $userCart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCartRequest $request, UserCart $userCart)
    {
        $userCart->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  UserCartResource::make($userCart)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCart  $userCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCart $userCart)
    {
        $userCart->delete();

        return response(['message' => 'deleted successfully']);
    }
}
