<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Role_Controller;
use App\Http\Controllers\Provinsi_Controller;
use App\Http\Controllers\Kategori_Bencana_Controller;

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
Route::get('/dashboard', [dashboard::class, 'dashboard']);
Route::get('/user', [User_Controller::class, 'user']);
Route::get('/role', [Role_Controller::class, 'role']);
Route::get('/provinsi', [Provinsi_Controller::class, 'provinsi']);
Route::get('/katbencana', [Kategori_Bencana_Controller::class, 'katbencana']);