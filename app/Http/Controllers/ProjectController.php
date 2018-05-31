<?php

namespace App\Http\Controllers;

use App\Http\Resources\Projects as ProjectResource;
use Illuminate\Http\Request;

class projectController extends Controller
{
    function index(){
        return ProjectResource::collection(Project::all());       
    }

    public function show($id)
    {
        $projects = Project::find($id);
        return new ProjectResource($projects);
    }
}
