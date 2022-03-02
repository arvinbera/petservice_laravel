<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreUserTransactionRequest;
use App\Http\Requests\Api\V1\UpdateUserTransactionRequest;
use App\Http\Resources\UserTransactionResource;
use App\Models\UserTransaction;

class UserTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTransaction = UserTransaction::latest()->paginate();

        return UserTransactionResource::collection($userTransaction);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserTransactionRequest $request)
    {
        $userTransaction = UserTransaction::create($request->all());

        return response(['message' => 'created successfully.', 'data' => UserTransactionResource::make($userTransaction)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(UserTransaction $userTransaction)
    {
        return UserTransactionResource::make($userTransaction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserTransactionRequest  $request
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserTransactionRequest $request, UserTransaction $userTransaction)
    {
        $userTransaction->update($request->all());

        return response(['message' => 'updated successfully.', 'data' =>  UserTransactionResource::make($userTransaction)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTransaction $userTransaction)
    {
        $userTransaction->delete();

        return response(['message' => 'deleted successfully']);
    }
}
