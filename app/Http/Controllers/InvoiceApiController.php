<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoiceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices= Invoice::orderBy('id', 'desc')->limit(1)->get();
        return $invoices;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $invoice = new Invoice;
        $invoice->invoice_no = request()->invoice_no;
        $invoice->tb_id = request()->tb_id;
        $invoice->total = request()->total;
        $invoice->tax = request()->tax;
        $invoice->net_total = request()->net_total;
        $invoice->status = request()->status;
        $invoice->save();
        return $invoice;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Invoice::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $invoice = Invoice::find($id);
        $invoice->tb_id = request()->tb_id;
        $invoice->total = request()->total;
        $invoice->tax = request()->tax;
        $invoice->net_total = request()->net_toal;
        $invoice->status = request()->status;
        $invoice->save();
        return $invoice;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return $invoice;
    }
}
