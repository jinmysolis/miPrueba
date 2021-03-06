<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@inicio');

Route::get('home', 'HomeController@index');
Route::get('inicio', 'HomeController@inicio');


Route::controllers([
	'users' => 'UsersController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('example', function(){
       $user= 'Jinmy';
	   return view('examples.template',compact('user'));
});

Route::group(['prefix' => 'admin','namespace'=> 'Admin'],function (){
         Route::resource('users','UsersController');
      
});

//Route::group(['middleware' => ['web']], function () {
//    //routes here
//});
