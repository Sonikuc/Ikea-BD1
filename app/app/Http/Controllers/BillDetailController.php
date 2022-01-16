<?php

namespace App\Http\Controllers;

use App\Models\Bill_Detail;
use App\Http\Requests\StoreBill_DetailRequest;
use App\Http\Requests\UpdateBill_DetailRequest;

class BillDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreBill_DetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBill_DetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill_Detail  $bill_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Bill_Detail $bill_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill_Detail  $bill_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill_Detail $bill_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBill_DetailRequest  $request
     * @param  \App\Models\Bill_Detail  $bill_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBill_DetailRequest $request, Bill_Detail $bill_Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill_Detail  $bill_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill_Detail $bill_Detail)
    {
        //
    }
}
