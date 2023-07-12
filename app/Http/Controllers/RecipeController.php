<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::latest('updated_at')->paginate(20);
        return view('recipes.index')->with('recipes', $recipes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)  
    {
        $request->validate([
            'title' => 'required|max:200',
            'image_path' => 'required|max:5048|mimes:png,jpg,jpeg',
            'extract' => 'required',
            'text' => 'required',
        ]);

        $image_name = uniqid() . '.' . $request->image_path->extension();
        $request->image_path->move(public_path('images'), $image_name);
        $storage = '/images/' . $image_name;

        $title = $request->title;
        $slug = Str::slug($title, '-');

        Recipe::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'slug' => $slug,
            'image_path' => $storage,
            'extract' => $request->extract,
            'text' => $request->text,
        ]);

        return to_route('recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $recipe = Recipe::where('slug', $slug)->firstOrFail();
        return view('recipes.show')->with('recipe', $recipe);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $recipe = Recipe::where('slug', $slug)->where('user_id', Auth::id())->firstOrFail();

        //poistka
        if($recipe->user_id != Auth::id()) {
            return abort(403);
        }

        return view('recipes.edit')->with('recipe', $recipe);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        if($recipe->user_id != Auth::id()) {
            return abort(403);
        }

        $request->validate([
            'title' => 'required|max:200',
            'image_path' => 'max:5048|mimes:png,jpg,jpeg',
            'extract' => 'required',
            'text' => 'required',
        ]);

        $title = $request->title;
        $slug = Str::slug($title, '-');

        if($request->image_path != '') 
        {
            $image_name = uniqid() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images'), $image_name);
            $storage = '/images/' . $image_name;

            $recipe->update([
                'title' => $request->title,
                'slug' => $slug,
                'image_path' => $storage,
                'extract' => $request->extract,
                'text' => $request->text,
            ]);
        } else 
        {
            $recipe->update([
            'title' => $request->title,
            'slug' => $slug,
            'extract' => $request->extract,
            'text' => $request->text,
            ]);
        }

        $newslug = $recipe->slug; 

        return to_route('recipes.show', $newslug)->with('success', 'This recipe was updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //poistka
        if($recipe->user_id != Auth::id()) {
            return abort(403);
        }

        $recipe->delete();

        return to_route('recipes.index')->with('success', 'Recipe was deleted successfully.');
    }

}
