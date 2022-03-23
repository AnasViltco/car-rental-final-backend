<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ManageBookingController;
use App\Http\Controllers\ManageContactController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ManagepagesController;
use App\Http\Controllers\UpdateInfoController;
use App\Http\Controllers\ManageSubscribersController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('login');
});

Route::post('/singin', [AuthController::class,'singin']);



Route::get("/createbrands", [BrandController::class,'index']);
Route::post("/createbrands", [BrandController::class,'save']);
Route::get("/managebrand", [BrandController::class,'list']);
Route::get("/deletebrand/{id}", [BrandController::class,'deletebrand'])->name('deletebrand');
Route::get("/editbrand/{id}", [BrandController::class,'editbrand'])->name('editbrand');

Route::get("/createvehical", [VehicleController::class,'index']);
Route::post("/createvehical", [VehicleController::class,'save']);
Route::get("/managevehicle", [VehicleController::class,'list']);
Route::get("/deletevehicle/{id}", [VehicleController::class,'deletevehicle'])->name('deletevehicle');

Route::get("/managebooking", [ManageBookingController::class,'index']);
Route::post("/managebooking", [ManageBookingController::class,'save']);
Route::get("/deletebooking/{id}", [ManageBookingController::class,'deletebooking'])->name('deletebooking');

Route::get("/managetestominals", [ManageBookingController::class,'testominal']);

Route::get("/managecontact", [ManageContactController::class,'index']);
Route::get("/registeruser", [RegisterUserController::class,'index']);
Route::get("/managepages", [ManagepagesController::class,'index']);
Route::get("/updateinfo", [UpdateInfoController::class,'index']);
Route::get("/managesubscribers", [ManageSubscribersController::class,'index']);