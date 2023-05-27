<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Portfolio;
use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use App\Http\Controllers\features;
use App\Http\Controllers\Services;
use App\Http\Controllers\Team;
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


Route::get('/',[Home::class, 'index']);
Route::get('/feature',[features::class, 'index']);
Route::get('/service',[Services::class, 'index']);
Route::get('/portfolio',[Portfolio::class, 'index']);
Route::get('/team',[Team::class, 'index']);
Route::get('/about',[About::class, 'index']);
Route::get('/contact',[Contact::class, 'index']);

