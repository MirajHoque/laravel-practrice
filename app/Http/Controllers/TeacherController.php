<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    function index(){
        return view('teacher.index');
    }

    function allData(){
        $data = Teacher::orderBy('id', 'DESC')->get();
        return response()->json($data);
    }

     function addData(Request $req){
         $teacher = Teacher::insert([
             'name' => $req->name,
             'title' => $req->title,
             'institute' => $req->institute,
         ]);
         
         return response()->json($teacher);
     }
}
