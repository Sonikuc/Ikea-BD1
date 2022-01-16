<?php

namespace App\Http\Controllers;

use App\Models\Payment_Instrument;
use App\Http\Requests\StorePayment_InstrumentRequest;
use App\Http\Requests\UpdatePayment_InstrumentRequest;

class PaymentInstrumentController extends Controller
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
     * @param  \App\Http\Requests\StorePayment_InstrumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayment_InstrumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment_Instrument  $payment_Instrument
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_Instrument $payment_Instrument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_Instrument  $payment_Instrument
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_Instrument $payment_Instrument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayment_InstrumentRequest  $request
     * @param  \App\Models\Payment_Instrument  $payment_Instrument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayment_InstrumentRequest $request, Payment_Instrument $payment_Instrument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_Instrument  $payment_Instrument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_Instrument $payment_Instrument)
    {
        //
    }
}
