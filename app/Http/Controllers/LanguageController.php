<?php

namespace App\Http\Controllers;
use App\Models\Language;
use App\Models\Project;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    function addLanguage($id){
        $project = Project::find($id);
        $language = new Language();
        $language->name = "PHP";
        $project->language()->save($language);

    }
}
