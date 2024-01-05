<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//add single line route
//Route::view('/post','post');


Route::get("/post/firstblog", function(){
    return view("firstblog");
})->name('blog');
//redirection routes
Route::redirect('/post/firstblog','/roast');

//routes parameter
Route::get("/post/{id?}", function(string $id=null){
    if($id){
        return "<h1>Post ID:".$id."</h1>";}
    else{
        return "<h1>No id found</h1>";
    }

    });

    // numeric ky liay WhereNumber
    //Alphabetic ky liay whereAlpha
    //numer+alpha ky liay whereAlphaNumeric
    //parameter as defined whereIn("category",["movie","song"])
    //start with @ where('id','[@0-9]+')  ---0-9 its a regular expressions