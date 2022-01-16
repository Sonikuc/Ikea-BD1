<?php

namespace App\Http\Controllers;

use App\Models\Cash_Register;
use App\Http\Requests\StoreCash_RegisterRequest;
use App\Http\Requests\UpdateCash_RegisterRequest;

class CashRegisterController extends Controller
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
     * @param  \App\Http\Requests\StoreCash_RegisterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCash_RegisterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cash_Register  $cash_Register
     * @return \Illuminate\Http\Response
     */
    public function show(Cash_Register $cash_Register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cash_Register  $cash_Register
     * @return \Illuminate\Http\Response
     */
    public function edit(Cash_Register $cash_Register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCash_RegisterRequest  $request
     * @param  \App\Models\Cash_Register  $cash_Register
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCash_RegisterRequest $request, Cash_Register $cash_Register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cash_Register  $cash_Register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cash_Register $cash_Register)
    {
        //
    }
}
