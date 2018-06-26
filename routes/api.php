<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::resource('employment','employmentController');
// Route::resource('employment/{id}','employmentController');

Route::Resources([
    'institutions' => 'institutionController',
    'institutions/id' => 'institutionController',
    'employment' => 'employmentController',
    'employment/id' => 'employmentController',
    'projects' => 'projectController',
    'projects/id' => 'projectController'    
    ]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();
 });
