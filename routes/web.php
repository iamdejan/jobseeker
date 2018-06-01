<?php

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
    return view("welcome");
});

Route::get("/home", function () {
	return redirect("/");
});

//Auth::routes();
Route::get("/seeker/login", "Auth\SeekerLoginController@showLoginForm"); //udah
Route::post("/seeker/login", "Auth\SeekerLoginController@login"); //udah
Route::post("/seeker/logout", "Auth\SeekerLoginController@logout"); //udah
Route::get("/seeker/register", "Auth\SeekerRegisterController@showRegistrationForm");
Route::post("/seeker/register", "Auth\SeekerRegisterController@register");
Route::get("/seeker/home", "SeekerController@index");


Route::get("/client/home", "ClientController@index");


Route::get("/staff/home", "StaffController@index");

?>