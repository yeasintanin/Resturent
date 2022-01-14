<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteusers/{id}",[AdminController::class,"deleteuser"]);
Route::post("/update/{id}",[AdminController::class,"update"]);

Route::get("/foods",[AdminController::class,"foods"]);
Route::post("/uploadfood",[AdminController::class,"upload"]);
Route::get("/deletefood/{id}",[AdminController::class,"deletefood"]);
Route::get("/updatefood/{id}",[AdminController::class,"updatefood"]);

Route::post("/reservation",[AdminController::class,"reservation"]);
Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/viewChefs",[AdminController::class,"viewChefs"]);
Route::post("/uploadchefs",[AdminController::class,"uploadchefs"]);
Route::get("/deletechefs/{id}",[AdminController::class,"deletechefs"]);
Route::get("/updatechef/{id}",[AdminController::class,"updatechef"]);
Route::post("/updatechefs,{id}",[AdminController::class,"updatedchefs"]);

