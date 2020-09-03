<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $order = new Order;
        $order->invoice_id = request()->invoice_id;
        $order->tb_id = request()->tb_id;
        $order->p_id = request()->p_id;
        $order->p_name = request()->p_name;
        $order->p_price = request()->p_price;
        $order->p_qty = request()->p_qty;
        $order->sub_total = request()->sub_total;
        $order->status = request()->status;
        $order->save();
        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $order = Order::find($id);
        $order->invoice_id = request()->invoice_id;
        $order->tb_id = request()->tb_id;
        $order->p_id = request()->p_id;
        $order->p_name = request()->p_name;
        $order->p_price = request()->p_price;
        $order->p_qty = request()->p_qty;
        $order->sub_total = request()->sub_total;
        $order->status = request()->status;
        $order->save();
        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return $order;
    }
}
