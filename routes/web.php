<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
//common Resource Routes:
//index - show all listings
// show - show single listing 
// create - show form create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - Delete listing

//All listings
Route::get('/', [ListingController::class, 'index']);

//Show Create form
Route::get('/listings/create',[ListingController::class, 'create'])->middleware('auth');

//Store listing data
Route::post('/listings',[ListingController::class, 'store'])->middleware('auth');

//show edit Form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//Update the edited listing
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

//Delete A list
Route::delete('/listings/{listing}',[ListingController::class,'delete'])->middleware('auth');

//Manage Listing
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);

//show register/create form 
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create users
Route::post('/users', [UserController::class, 'store']);

//Log out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log In user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);