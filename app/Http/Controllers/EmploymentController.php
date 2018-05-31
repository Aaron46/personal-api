<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Http\Requests;
    use App\Http\Resources\Employment as EmploymentResource;
    // use App\Http\Resources\Employment as EmploymentResource;
    use App\Employment;

    class employmentController extends Controller
    {
        function index(){
            // return Employment::all();
            // return new EmploymentResource(Employment::find(1));
            return EmploymentResource::collection(Employment::all());
        }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function show($id)
        {
            $employment = Employment::find($id);
            return new EmploymentResource($employment);
        }
    }
