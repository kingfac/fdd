<?php

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
    return view('pages.welcome');
})->name('home');

Route::get('/about-us/{el}', function ($el) {
    return view('pages.about', ['el'=>$el]);
})->name('about');

Route::get('/rapports', function () {
    return view('pages.rapport');
})->name('rapport');

Route::get('/part-don/{el}', function ($el) {
    return view('pages.participer', ['el'=>$el]);
})->name('part');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
