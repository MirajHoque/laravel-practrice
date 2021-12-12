<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Mechanic;
use App\Models\Owner;

class MechanicController extends Controller
{
    function addMechanic(){
        $mechanic = new Mechanic();
        $mechanic->name = "Tom";
        $mechanic->save();
    }
  
}
