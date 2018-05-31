<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Institutions as InstitutionsResource;
use App\Institution;

class institutionController extends Controller
{
    function index(){
        // return Institution::all();
        return InstitutionsResource::collection(Institution::all());
    }

    public function show($id)
    {
        $institutions = Institution::find($id);
        return new InstitutionsResource($institutions);
    }
}
