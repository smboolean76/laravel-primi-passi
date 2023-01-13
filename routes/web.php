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
    $data = [
        "title" => "Home Page",
        "name" => "Samuele",
        "students" => [
            "Francesco",
            "Massimo",
            "Valentina"
        ]
    ];

    // $title = "Home Page";
    // $name = "Samuele";

    // return view('homepage', compact("title", "name"));
    return view('homepage', $data);
});

Route::get('/about', function() {
    $data = [
        "title" => "Chi Siamo"
    ];

    return view('about', $data);
});