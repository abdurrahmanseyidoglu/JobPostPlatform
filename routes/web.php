<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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

//All listings
Route::get('/listings', [ListingController::class, 'index']);
//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);
//Store form
Route::post('/listings', [ListingController::class, 'store']);
//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
//Save edited form (update the form)
Route::put('/listings/{listing}', [ListingController::class, 'update']);
//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


//Show single list
Route::get('/listings/{listing}', [ListingController::class, 'show']);
