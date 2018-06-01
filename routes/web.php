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
    //die(Hash::make("1234efgh"));
});

Auth::routes();

Route::get("/seeker/home", "SeekerController@index");
Route::get("/client/home", "ClientController@index");
Route::get("/staff/home", "StaffController@index");