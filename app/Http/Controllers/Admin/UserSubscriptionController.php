<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserSubscriptionRequest;
use App\Http\Requests\Admin\UpdateUserSubscriptionRequest;
use App\Models\UserSubscription;

class UserSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->setPageTitle('Addess', 'List of all Address');

        $address = Address::latest()->paginate();

        return view('admin.address.index', compact('address'), $this->data);
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
     * @param  \App\Http\Requests\StoreUserSubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserSubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserSubscription  $userSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(UserSubscription $userSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserSubscription  $userSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSubscription $userSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserSubscriptionRequest  $request
     * @param  \App\Models\UserSubscription  $userSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserSubscriptionRequest $request, UserSubscription $userSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSubscription  $userSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSubscription $userSubscription)
    {
        //
    }
}
