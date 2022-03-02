<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserTransactionRequest;
use App\Http\Requests\Admin\UpdateUserTransactionRequest;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(UserTransaction $userTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTransaction $userTransaction)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTransaction  $userTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTransaction $userTransaction)
    {
        //
    }
}
