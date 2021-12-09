<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    function addMember(Request $req){ //database create method
        $data = array(
            'name' => $req->name,
            'age' => $req->age,
        );

        Member::create($data);
        echo "registered";
    }

    function memberAdd(Request $req){
        $data = array(
            'name' => $req->name,
            'age' => $req->age,
        );

        DB::table('members')->insert($data);
        echo "successfull";
    }
}
