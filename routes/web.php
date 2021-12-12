<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\OwnerController;
use App\Models\Mechanic;

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
    return view('welcome');
});
Route::get('addmechanic', [MechanicController::class, 'addMechanic']);
Route::get('addcar/{id}', [CarController::class, 'addCar']);
Route::get('addowner/{id}', [OwnerController::class, 'addOwner']);
Route::get('showowner/{id}', [OwnerController::class, 'showOwner']);