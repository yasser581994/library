<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//register
Route::get('/register', 'AuthController@register')->name('registerAuth'); 
Route::post('/do-register', 'AuthController@doRegister')->name('doRegisterAuth');

//login
Route::get('/login', 'AuthController@login')->name('loginAuth'); 
Route::post('/do-login', 'AuthController@doLogin')->name('doLoginAuth');

//middleware
Route::middleware('userAuth')->group(function()
{
    Route::get('/logout', 'AuthController@logout')->name('logoutAuth');


 //middleware
  Route::middleware('isAdmin')->group(function()
  {
       
  //delete
  Route::get('/authors/delete/{id}', 'AuthorController@delete')->name('deleteAuthors');


 //delete
 Route::get('/books/delete/{id}', 'BookController@delete')->name('deleteBooks');

  });


  // createBook
  Route::get('/books/create', 'BookController@create')->name('createBooks'); 
  Route::post('/books/store', 'BookController@store')->name('storeBooks');
  
  
  //updateBook
  Route::get('/books/edit/{id}', 'BookController@edit')->name('editBooks'); 
  Route::post('/books/update/{id}', 'BookController@update')->name('updateBooks');


  // createAuthor
Route::get('/authors/create', 'AuthorController@create')->name('createAuthors'); 
Route::post('/authors/store', 'AuthorController@store')->name('storeAuthors');


//updateAuthor
Route::get('/authors/edit/{id}', 'AuthorController@edit')->name('editAuthors'); 
Route::post('/authors/update/{id}', 'AuthorController@update')->name('updateAuthors');

 
  

});


//logout


Route::get('/', function () {
    return view('welcome');
}); 
Route::post('/message/send', 'MessageController@send')->name('sendMessage');
 // read
Route::get('/authors', 'AuthorController@index')->name('allAuthors'); 
Route::get('/authors/latest', 'AuthorController@latest')->name('latestAuthors');
Route::get('/authors/show/{id}', 'AuthorController@show')->name('showAuthor'); 
Route::get('/authors/search/{word}', 'AuthorController@search')->name('searchAuthors');





 // read
 Route::get('/books', 'BookController@index')->name('allBooks'); 
 Route::get('/books/latest', 'BookController@latest')->name('latestBooks');
 Route::get('/books/show/{id}', 'BookController@show')->name('showBook'); 
 Route::get('/books/search/{word}', 'BookController@search')->name('searchBooks');
 

 
