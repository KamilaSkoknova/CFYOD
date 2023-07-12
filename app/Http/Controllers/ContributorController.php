<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contributors = User::latest('updated_at')->paginate(20);
        return view('contributors.index')->with('contributors', $contributors);
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
        $contributor = User::where('name', $name)->firstOrFail();
        return view('contributors.show')->with('contributor', $contributor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //nie
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //nie
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //nie
    }
}
