<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index() {

        //Looks into views folder for projects folder, inside that, index.php
       // By starting with \ indicates that Laravel needs to start searching at the root
        $projects = Project::all();
        //Laravel interprets this as interpreting a JSON file
        return $projects; 
        //return view('projects.index');
    }
}
