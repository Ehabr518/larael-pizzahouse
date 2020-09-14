<?php
use App\Http\Controllers\Pizzas_controller;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [Pizzas_controller::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', 'App\Http\Controllers\Pizzas_controller@create')->name('pizzas.create');
Route::post('/pizzas', 'App\Http\Controllers\Pizzas_controller@store')->name('pizzas.store');
Route::get('/pizzas/{id}', [Pizzas_controller::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', [Pizzas_controller::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
