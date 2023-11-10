<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

Route::get('/listings/create', [ListingController::class, 'create']);

Route::get('/listings/{id}', [ListingController::class, 'show']);

Route::get('/listings/edit/{listing}', [ListingController::class, 'edit']);

Route::post('/listings', [ListingController::class, 'store']);

Route::put('/listings/{listing}', [ListingController::class, 'update']);

Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show from to edit listing
// update - Update listing
// destroy - Delete listing