<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CookController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/how-this-works', function () {
    return view('works');
});



Route::resource('recipes', RecipeController::class);
Route::resource('cooks', CookController::class);
Route::resource('contributors', ContributorController::class);
Route::resource('services', ServiceController::class);
Route::resource('orders', OrderController::class);

Route::get('/', [FrontpageController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});