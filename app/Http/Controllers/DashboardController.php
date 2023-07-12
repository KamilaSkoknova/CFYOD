<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = User::where('id', Auth::id())->firstOrFail();

        if ($user->role == '5') {
            $recipes = Recipe::latest('updated_at')->paginate(20);
            $orders = Order::latest('updated_at')->paginate(20); //ako klient
            $services = Service::latest('updated_at')->paginate(20);
        } else {
            $recipes = Recipe::whereBelongsTo(Auth::user())->latest('updated_at')->paginate(12);
            $orders = Order::whereBelongsTo(Auth::user())->latest('updated_at')->paginate(12); //ako klient
            $services = Service::whereBelongsTo(Auth::user())->latest('updated_at')->paginate(12);
        }

        return view('dashboard')
            ->with('orders', $orders)
            ->with('recipes', $recipes)
            ->with('services', $services)
            ->with('user', $user);
    }
}
