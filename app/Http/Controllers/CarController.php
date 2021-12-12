<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;

class CarController extends Controller
{
    function addCar($id){
        $mechanic = Mechanic::find($id);
        $car = new Car();
        $car->model = "corola";
        $mechanic->car()->save($car);

    }
}
