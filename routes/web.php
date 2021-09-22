<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;

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
    return view('Home', [
        "title" => "Home"
        
    ]);

});
Route::get('/about', function () {
    return view('about', [
        "title" => "About Us"
       
    ]);
});

Route::get('/log in', function () {
    return view('log in', [
        "title" => "Log in"
       
    ]);
});

Route::get('/informasi', [InformasiController::class, 'index']);
