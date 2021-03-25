<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[BlogController::class,'index']);
Route::get('/signup',[UserController::class,'signup']);
Route::post('/signup',[UserController::class,'saveuser']);
Route::get('/login',[UserController::class,'loginview']);
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);
Route::resource('/admin',AdminController::class);
Route::post('/addcomment',[BlogController::class,'addcomment']);
Route::get('/comment',[BlogController::class,'showcomments']);
Route::get('/{username}',[BlogController::class,'blogbyauthor']);
Route::get('/{username}/{slug}',[BlogController::class,'showcontent']);