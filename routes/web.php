<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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
//==============={Listings Routes}===============
//All listings
Route::get('/listings', [ListingController::class, 'index']);
//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);
//Store form
Route::post('/listings', [ListingController::class, 'store']);
//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
//Save edited form (update the form)[
Route::put('/listings/{listing}', [ListingController::class, 'update']);
//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
//Show single list
Route::get('/listings/{listing}', [ListingController::class, 'show']);


//==============={User Routes}===============
//Show register form
Route::get('/register',[UserController::class,'create']);
//Create new user
Route::post('/users',[UserController::class,'store']);
//Log user out
Route::post('/logout',[UserController::class,'logout']);
//Show login form
Route::get('/login',[UserController::class,'login']);
//Log user in
Route::post('/users/authenticate',[UserController::class,'authenticate']);
