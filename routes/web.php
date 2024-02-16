<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogsController;
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

Route::get('/', function () {
    return view('public.index');
});

Route::get('/about-us', function () {
    return view('public.about-us');
});

Route::get('/blogs', BlogsController::class);
Route::get('/blogs/{id}', BlogController::class);
