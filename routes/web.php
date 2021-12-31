<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

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
Route::get('/ajax', [TeacherController::class, 'index']);
Route::get('/teacher/all', [TeacherController::class, 'allData']);
Route::post('/teacher/add', [TeacherController::class, 'addData']);
Route::get('/teacher/edit/{id}', [TeacherController::class, 'editTeacher']);
Route::post('/teacher/update/{id}', [TeacherController::class, 'updateTeacher']);