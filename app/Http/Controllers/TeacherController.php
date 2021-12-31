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
         $req->validate([
             'name' => 'required',
             'title' => 'required',
             'institute' => 'required',
         ]);

         $teacher = Teacher::insert([
             'name' => $req->name,
             'title' => $req->title,
             'institute' => $req->institute,
         ]);
         
         return response()->json($teacher);
     }

     function editTeacher($id){
         $teacherInfo = Teacher::findorFail($id);
         return response()->json($teacherInfo);
     }

     function updateTeacher(Request $req, $id){
        $req->validate([
            'name' => 'required',
            'title' => 'required',
            'institute' => 'required',
        ]);

        $teacher = Teacher::findOrFail($id)->update([
            'name' => $req->name,
            'title' => $req->title,
            'institute' => $req->institute,
        ]);
        
        return response()->json($teacher);
     }
}
