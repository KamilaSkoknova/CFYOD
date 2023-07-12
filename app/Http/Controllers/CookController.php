<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cooks = User::where('role', '1')->paginate(20);
        return view('cooks.index')->with('cooks', $cooks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //nie
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //nie
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $cook = User::where('name', $name)->firstOrFail();
        return view('cooks.show')->with('cook', $cook);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', $id)->firstOrFail();
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update(array('role' => '1'));
        return to_route('dashboard')->with('success', 'You are a cook now.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //nie
    }
}
