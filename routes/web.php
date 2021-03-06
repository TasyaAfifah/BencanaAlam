<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Role_Controller;
use App\Http\Controllers\Provinsi_Controller;
use App\Http\Controllers\Kategori_Bencana_Controller;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\Registrasi;
use App\Http\Controllers\Login;

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
Route::get('/user', [User2Controller::class, 'user']);
Route::get('/role', [Role_Controller::class, 'role']);
Route::get('/provinsi', [Provinsi_Controller::class, 'provinsi']);
Route::get('/katbencana', [Kategori_Bencana_Controller::class, 'katbencana']);

Route::post('/createKategori_Bencana', [Kategori_Bencana_Controller::class, 'store']);
Route::get('/createKategori_Bencana', [Kategori_Bencana_Controller::class, 'createkatbencana']);

Route::post('/createProvinsi', [Provinsi_Controller::class, 'store']);
Route::get('/createProvinsi', [Provinsi_Controller::class, 'createprovinsi']);

Route::post('/createRole', [Role_Controller::class, 'store']);
Route::get('/createRole', [Role_Controller::class, 'createrole']);

Route::delete('/delete-katbencana-{id}', [Kategori_Bencana_Controller::class, 'destroy']);

Route::delete('/delete-provinsi-{id}', [Provinsi_Controller::class, 'destroy']);

Route::delete('/delete-role-{id}', [Role_Controller::class, 'destroy']);

Route::get('/form-edit-katbencana-{id}', [Kategori_Bencana_Controller::class, 'edit']);
Route::put('/update-katbencana-{id}', [Kategori_Bencana_Controller::class, 'update']);

Route::get('/form-edit-provinsi-{id}', [Provinsi_Controller::class, 'edit']);
Route::put('/update-provinsi-{id}', [Provinsi_Controller::class, 'update']);


Route::get('/form-edit-role-{id}', [Role_Controller::class, 'edit']);
Route::put('/update-role-{id}', [Role_Controller::class, 'update']);

Route::get ('/register',[Registrasi::class,'Register']);

Route::get ('/login',[Login::class,'Login']);