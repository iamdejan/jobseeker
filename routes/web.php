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

use Illuminate\Http\Request;
use App\Job as Job;

Route::get('/', function () {
    return view("welcome");
});

Route::get("/jobs/search", function (Request $request) {
	$keyword = $request->input("job");
	$location = $request->input("location");

	$jobs = [];

	foreach (Job::all() as $job) {
		if(str_contains(strtolower($job->JobName), strtolower($keyword)) &&
		   str_contains(strtolower($job->client->ClientAddress), strtolower($location))) {
			$jobs[] = $job;
		}
	}

	dd($jobs);
	die();
});

//Auth::routes();
Route::get("/seeker/login", "Auth\SeekerLoginController@showLoginForm"); //udah
Route::post("/seeker/login", "Auth\SeekerLoginController@login"); //udah
Route::post("/seeker/logout", "Auth\SeekerLoginController@logout"); //udah
Route::get("/seeker/register", "Auth\SeekerRegisterController@showRegistrationForm");
Route::post("/seeker/register", "Auth\SeekerRegisterController@register");
//manage
Route::get("/seeker/home", "SeekerController@index");
Route::get("/seeker/jobs", "SeekerController@showAllJobs");

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
//manage
Route::get("/staff/home", "StaffController@index");
Route::get("/staff/manages/{type}", "StaffController@manages");
Route::get("/staff/deletes/{type}/{SkillID}", "StaffController@delete"); //delete
Route::get("/staff/{type}/new", "StaffController@create"); //form
Route::post("/staff/{type}/new", "StaffController@store"); //store

?>