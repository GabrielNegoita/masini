<?php

namespace App\Http\Controllers;

use App\Models\Order_Cars;
use Illuminate\Http\Request;

class OrderCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_cars = Order_Cars::all();

        $data = [
            'order_cars' => $order_cars
        ];

        return view('/order_cars/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_Cars $order_Cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order_Cars $order_Cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order_Cars $order_Cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order_Cars $order_Cars)
    {
        //
    }
}
