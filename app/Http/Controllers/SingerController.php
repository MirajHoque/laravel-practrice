<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;

class SingerController extends Controller
{
    function addSinger(){
        
        $singer = new Singer();
        $singer->name = "Neha Kakkar";
        $singer->save();

        $songIds = [1,3,5];
        $singer->songs()->attach($songIds);
    }

    //Get Singer based on Song id;

    function showSinger($id){
        $singers = Song::find($id)->singers;
        return $singers;
    }
}
