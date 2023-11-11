<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

Route::get('/listings/{id}', [ListingController::class, 'show']);

Route::get('/listings/edit/{listing}', [ListingController::class, 'edit'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);



Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/users/login', [UserController::class, 'authenticate']);

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show from to edit listing
// update - Update listing
// destroy - Delete listing