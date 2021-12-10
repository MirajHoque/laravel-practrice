<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class UserController extends Controller
{
    public function insertRecords(){
        
        $phone = new Phone();
        $phone->phone = '01679684163';

        $user = new User();
        $user->name = "Tuly";
        $user->email = 'tuly@test.com';
        $user->password = '12345678';
        
        $user->save();
        $user->phone()->save($phone);

        return "record has been created successfully";     
    }

    function fetchPhoneByUser($id){
        $data = User::find($id)->phone;
        return $data;
    }
}
