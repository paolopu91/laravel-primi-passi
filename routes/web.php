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
    return view('home', "Hello World");
})->name("home");



Route::get('/', function(){
    $AboutMe=[
        'name'=> 'Paolo',
        'surname'=> 'Pugliese',
        'role'=> 'Dev',
    ];

    return view('About', [
    'AboutMe'=> $AboutMe
]);
})->name("about_us");



Route::get('/', function(){
    $team =[
        'user1'=>'Paolo',
        'user2'=> 'Matteo',
        'user3'=> 'Flavia',
        'user4'=> 'Giuseppe'
    ];

    return view('team', [
        'team'=> $team,
    ]);
})->name("team");