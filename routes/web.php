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

Route::get("/login", function () {
	echo "fuck you";
})->name("login");

//Auth::routes();
Route::get("/seeker/login", "Auth\SeekerLoginController@showLoginForm"); //udah
Route::post("/seeker/login", "Auth\SeekerLoginController@login"); //udah
Route::post("/seeker/logout", "Auth\SeekerLoginController@logout"); //udah
Route::get("/seeker/register", "Auth\SeekerRegisterController@showRegistrationForm");
Route::post("/seeker/register", "Auth\SeekerRegisterController@register");
Route::get("/seeker/home", "SeekerController@index");

Route::get("/client/login", "Auth\ClientLoginController@showLoginForm"); //udah
Route::post("/client/login", "Auth\ClientLoginController@login"); //udah
Route::post("/client/logout", "Auth\ClientLoginController@logout"); //udah
Route::get("/client/register", "Auth\ClientRegisterController@showRegistrationForm");
Route::post("/client/register", "Auth\ClientRegisterController@register");
Route::get("/client/home", "ClientController@index");

Route::get("/staff/login", "Auth\StaffLoginController@showLoginForm"); //udah
Route::post("/staff/login", "Auth\StaffLoginController@login"); //udah
Route::post("/staff/logout", "Auth\StaffLoginController@logout"); //udah
Route::get("/staff/register", "Auth\StaffRegisterController@showRegistrationForm");
Route::post("/staff/register", "Auth\StaffRegisterController@register");
Route::get("/staff/home", "StaffController@index");

?>