<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest('updated_at')->paginate(20);
        return view('orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::latest('updated_at')->paginate(20);
        return view('orders.create')->with('services', $services);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_title' => 'required|max:200',
            'details_location' => 'required',
            'details_time' => 'required',
            'price' => 'required',
            'details_concrete' => 'required',
        ]);

        Order::create([
            'user_id' => Auth::id(),
            'order_title' => $request->order_title,
            'details_location' => $request->details_location,
            'details_time' => $request->details_time,
            'price' => $request->price,
            'details_concrete' => $request->details_concrete,
        ]);

        return to_route('dashboard'); //toto zmeniť( na sekciu svojich objednávok )
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::where('id', $id)->firstOrFail();
        return view('orders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //nie
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //nie
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //ak, tak soft delete
    }
}
