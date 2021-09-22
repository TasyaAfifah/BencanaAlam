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
Route::get('/About Us', function () {
    return view('About Us', [
        "title" => "About Us"
       
    ]);
});

Route::get('/Log in', function () {
    return view('Log in', [
        "title" => "Log in"
    ]);
});

Route::get('/Daftar', function () {
    return view('Daftar', [
        "title" => "Daftar"
       
    ]);
});

Route::get('/informasi', [InformasiController::class, 'index']);
