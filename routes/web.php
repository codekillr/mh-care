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

Route::get('/patients', function () {
    $data=['name'=>'Tim Hortons','contact'=>5297773980,'visitedON'=>'2020-12-12','hasAppointment'=>FALSE];
    //return JSON
    //return($data);
    //return view
    return view('patients',$data);
});

Route::get('/doctors', function () {
    $data=['name'=>'John Doe','type'=>'Dermatologist','contact'=>5297773980,'isAvailable'=>TRUE];
    //return JSON
    //return($data);
    //return view
    return view('doctors',$data);
});
Route::get('/receptionist', function () {
    $data=['name'=>'Jane Doe','contact'=>5297773980,'isAvailable'=>TRUE];
    //return JSON
    //return($data);
    //return view
    return view('receptionist',$data);
});