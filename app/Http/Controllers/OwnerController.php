<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use App\Models\Mechanic;

class OwnerController extends Controller
{
    function addOwner($id){
        $car = Car::find($id);

        $owner = new Owner();
        $owner->name = "sonam";
        $car->owner()->save($owner);
    }

    //Get Owner based on Mechanic id

    function showOwner($id){
        //$owner = Mechanic::find($id)->car->owner;
        $owner = Mechanic::find($id)->owner;
        return $owner;
    }
}
