<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;

class SongController extends Controller
{
    function addSong(){ 
        $song = new Song();
        $song->title = "Baby Vaccine Hai";
        $song->save();
    }

    //get song based on singer id

    function showSong($id){
        $songs = Singer::find($id)->songs;
        return $songs;
    }
}
