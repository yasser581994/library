<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//read

Route::get('/authors', 'ApiAuthorController@index'); 
Route::get('/authors/show/{id}', 'ApiAuthorController@show'); 


Route::middleware('apiUserAuth')->group(function(){

//create
Route::post('/authors/store', 'ApiAuthorController@store'); 

//update
Route::post('/authors/update/{id}', 'ApiAuthorController@update'); 


//delete
Route::get('/authors/delete/{id}', 'ApiAuthorController@delete'); 

});
