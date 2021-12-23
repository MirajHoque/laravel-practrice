<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deployment;
use App\Models\Language;
use App\Models\Project;

class DeploymentController extends Controller
{
    function addDeployment($id){
        $language = Language::find($id);
        $deployment = new Deployment();
        $deployment->work = "complete";
        $language->deployment()->save($deployment);
    }

    //Get Deployment based on project id

    function showDeployment($id){
       // $deployment = Project::find($id)->language->flatMap->deployment;
       $deployment = Project::find($id)->deployment;
        return $deployment;
    }
    

}
