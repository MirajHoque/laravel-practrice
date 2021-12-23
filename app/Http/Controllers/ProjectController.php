<?php

namespace App\Http\Controllers;

use App\Models\Deployment;
use App\Models\Project;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\Language;

class ProjectController extends Controller
{
    function addProject(){
        $project = new Project();
        $project->name = "School";
        $project->save();
    }
}
