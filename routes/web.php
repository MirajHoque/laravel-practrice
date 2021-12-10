<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/adduser', [UserController::class, 'insertRecords']);
Route::get('/getphone/{id}', [UserController::class, 'fetchPhoneByUser']);
Route::get('/getuser', [UserController::class, 'fetchUserByPhone']);

