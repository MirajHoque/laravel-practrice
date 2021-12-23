<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectController;

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
Route::get('addproject', [ProjectController::class, 'addProject']);
Route::get('addlanguage/{id}', [LanguageController::class, 'addLanguage']);
Route::get('adddeployment/{id}', [DeploymentController::class, 'addDeployment']);
Route::get('showdeployment/{id}', [DeploymentController::class, 'showDeployment']);