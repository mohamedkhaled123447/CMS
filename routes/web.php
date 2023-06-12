<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MediaController;

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
// Pages Routes
Route::get('/', [PagesController::class,'index']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/features', [PagesController::class,'features']);
// Post Routes
Route::resource('posts', PostController::class);
// Media Routes
Route::get('/media', [MediaController::class,'index']);
Route::get('/media/create', [MediaController::class,'create']);
Route::post('/media', [MediaController::class,'store']);
Route::delete('/media/{id}', [MediaController::class,'destroy']);
Route::get('/media/{id}', [MediaController::class,'show']);
//  Auth Routes
Auth::routes();
