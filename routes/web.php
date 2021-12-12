<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;

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

Route::get('addsong', [SongController::class, 'addSong']);
Route::get('addsinger', [SingerController::class, 'addSinger']);
Route::get('showsongs/{id}', [SongController::class, 'showSong']);
Route::get('showsingers/{id}', [SingerController::class, 'showSinger']);
