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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('first',function(){
    return view('first');

});
Route::get('second',function(){
return view('second');
});
*/
//Route::view('first','first');
//Route::view('second','second');
//Route::get('first/{id}',function($id){
  //  echo $id;
   // return view('first');

//});
//Route::get('hello','FirstController@index');//error
Route::get('hello/{id}',[App\Http\Controllers\FirstController::class,'index']);
Route::get('hello',[App\Http\Controllers\FirstController::class,'index']);
Route::get('home',[App\Http\Controllers\FirstController::class,'home']);
Route::get('about',[App\Http\Controllers\FirstController::class,'about']);
Route::get('services',[App\Http\Controllers\FirstController::class,'services']);
Route::get('index',[App\Http\Controllers\FirstController::class,'index']);



Route::view('page','page');//sidebar
Route::view('page2','page2');//sidebar

Route::view('my_form','my_form');
Route::post('formSubmit',[App\Http\Controllers\Form::class,'index']);





Route::get('web',function(){
    return view('web',array('name'=>'vishal'));

});
Route::get('web1',function(){
    return view('web1',array('data'=>array('name'=>1,2,3,4,5,6)));
   

//Route::view('my_form','my_form')->middleware('UserCheck');//route middleware

});
//Route::view('denied','denied');//global middleware
Route::view('denied','denied');
Route::view('second','second')->middleware('UserCheck'); 

Route::group(['middleware'=>['UserCheck']],function(){
    Route::view('first','first');
});
Route::group(['middleware'=>['UserCheck']],function(){
    Route::view('page','page');
    Route::view('page2','page2');

});



Route::get('login',function(){
     return view('login');
});
Route::post('FormSubmit',[App\Http\Controllers\Form1::class,'index']);
Route::view('welcome1','welcome1');
Route::get('session_set',[App\Http\Controllers\FirstController::class,'session_set']);
Route::get('session_get',[App\http\controllers\FirstController::class,'session_get']);
Route::get('session_remove',[App\Http\Controllers\FirstController::class,'session_remove']);
Route::get('session_check',[App\Http\Controllers\FirstController::class,'session_check']);



Route::view('login1','login1');



