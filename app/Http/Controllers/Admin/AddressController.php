<?php

namespace App\Http\Controllers\Admin;

use App\Models\Address;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\StoreAddressRequest;
use App\Http\Requests\Admin\UpdateAddressRequest;

class AddressController extends Controller
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
        $this->setPageTitle('Addess', 'Add Addess');

        return view('admin.attribute.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressRequest $request)
    {
        $request['slug'] = Str::slug($request->name);
        $request['category_type'] = 1;

        if ($file = $request->file('file')) {
            $request['image'] =  $imageName = "image-" . Str::random(40) . '.' .  strtolower($file->getClientOriginalExtension());
            Storage::putFileAs('public/images', $file, $imageName);
        }

        Address::create($request->all());

        return redirect()->route('admin.addess.index')->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        $this->setPageTitle('Addess', 'List of all Addess');

        return view('admin.attribute.show', compact('attribute'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        $this->setPageTitle('Addess', 'List of all Addess');

        return view('admin.attribute.show', compact('attribute'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddressRequest  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {

        if ($file = $request->file('file')) {
            $request['image'] =  $imageName = "image-" . Str::random(40) . '.' .  strtolower($file->getClientOriginalExtension());
            Storage::putFileAs('public/images', $file, $imageName);
        }

        $address->update($request->all());

        return redirect()->route('admin.attribute.index')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();

        return redirect()->route('admin.attribute.index')->with('success', 'Deleted successfully');
    }
}
