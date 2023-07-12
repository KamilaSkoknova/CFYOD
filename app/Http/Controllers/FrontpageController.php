<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index()
    {
        $recipes = Recipe::latest('updated_at')->skip(0)->take(8)->get();
        $cooks = User::where('role', '1')->skip(0)->take(4)->get();
        return view('welcome')
            ->with('cooks', $cooks)
            ->with('recipes', $recipes);
    }
}
