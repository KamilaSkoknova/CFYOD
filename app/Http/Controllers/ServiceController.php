<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest('updated_at')->paginate(20);
        return view('services.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'picture_path' => 'required|max:5048|mimes:png,jpg,jpeg',
            'available' => 'required',
            'more_info' => 'required',
        ]);

        $image_name = uniqid() . '.' . $request->picture_path->extension();
        $request->picture_path->move(public_path('images'), $image_name);
        $storage = '/images/' . $image_name;

        $title = $request->title;
        $slug = Str::slug($title, '-');

        Service::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'slug' => $slug,
            'picture_path' => $storage,
            'available' => $request->available,
            'more_info' => $request->more_info,
        ]);

        return to_route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $service = Service::where('slug', $slug)->where('user_id', Auth::id())->firstOrFail();

        //poistka
        if($service->user_id != Auth::id()) {
            return abort(403);
        }

        return view('services.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        if($service->user_id != Auth::id()) {
            return abort(403);
        }

        $request->validate([
            'title' => 'required|max:200',
            'picture_path' => 'max:5048|mimes:png,jpg,jpeg',
            'available' => 'required',
            'more_info' => 'required',
        ]);

        $title = $request->title;
        $slug = Str::slug($title, '-');

        if($request->picture_path != '') 
        {
            $picture_path = uniqid() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images'), $picture_path);
            $storage = '/images/' . $picture_path;

            $service->update([
                'title' => $request->title,
                'slug' => $slug,
                'picture_path' => $storage,
                'available' => $request->available,
                'more_info' => $request->more_info,
            ]);
        } else 
        {
            $service->update([
                'title' => $request->title,
                'slug' => $slug,
                'available' => $request->available,
                'more_info' => $request->more_info,
            ]);
        }

        $newslug = $service->slug; 

        return to_route('services.show', $newslug)->with('success', 'This service was updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //poistka
        if($service->user_id != Auth::id()) {
            return abort(403);
        }

        $service->delete();

        return to_route('services.index')->with('success', 'Service was deleted successfully.');
    }
}
