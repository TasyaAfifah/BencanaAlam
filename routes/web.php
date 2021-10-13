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

Route::get('/', function () { return view('template', ["title" => "Home Page"]);
});
Route::get('/about', function () { return view('about', ["title" => "About Page"]);
});
Route::get('/news', function () { return view('news', ["title" => "News Page"]);
});
Route::get('/information', function () { return view('information', ["title" => "Information Page"]);
});
Route::get('/login', function () { return view('login', ["title" => "Login Page"]);
});
Route::get('/register', function () { return view('register', ["title" => "Register Page"]);
});


