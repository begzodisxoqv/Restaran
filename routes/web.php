<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\ourchefss;
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

Route::get('/sds', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index']);

Route::get('/users',[AdminController::class,'user']);

Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);

Route::get('/updateview/{id}', [AdminController::class,'updateview']);

Route::post('/update/{id}', [AdminController::class,'update']);

Route::get('/ourmenu',[AdminController::class,'ourmenu']);

Route::post('/uploadfood',[AdminController::class,'upload']);

Route::post('/reservetion',[AdminController::class, 'reservetion']);

Route::get('/viewreservations',[AdminController::class, 'viewreservations']);

// ourchefss->
Route::get('/viewchefs',[AdminController::class, 'viewchefs']);

Route::post('/uploadchefs',[AdminController::class, 'uploadchefs']);

Route::get('/updatechef/{id}',[AdminController::class, 'updatechef']);


Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/ourmenu',[AdminController::class,'ourmenu']);

Route::get('/redirects',[HomeController::class,'redirects']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
