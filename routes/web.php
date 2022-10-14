<?php

use App\Http\Controllers\ContohController;
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

Route::get('/biodata-diri', [ContohController::class, 'biodata']);
Route::get('/biodata', [ContohController::class, 'dataDiri']);
Route::get('/profil', [ContohController::class, 'profil']);
