<?php

use Illuminate\Support\Facades\Route;
use App\Services\Geolocation\Geolocation;

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
    //call service rom container using global app() helper function 
    //dd(app(\App\Services\Geolocation\Geolocation::class));
    //dd(app(Geolocation::class));

    //call service from container using map() from app instance
    //dd(app()->make(App\Services\Geolocation\Geolocation::class));
    //dd(app()->make(Geolocation::class));

    //acess service method
    $geolocation = app(Geolocation::class)->search('xyz');
    dd($geolocation);
   
    //return view('welcome');
});
