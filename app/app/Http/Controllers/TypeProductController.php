<?php

namespace App\Http\Controllers;

use App\Models\Type_Product;
use App\Http\Requests\StoreType_ProductRequest;
use App\Http\Requests\UpdateType_ProductRequest;

class TypeProductController extends Controller
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
     * @param  \App\Http\Requests\StoreType_ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreType_ProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type_Product  $type_Product
     * @return \Illuminate\Http\Response
     */
    public function show(Type_Product $type_Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type_Product  $type_Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_Product $type_Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateType_ProductRequest  $request
     * @param  \App\Models\Type_Product  $type_Product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateType_ProductRequest $request, Type_Product $type_Product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type_Product  $type_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_Product $type_Product)
    {
        //
    }
}
