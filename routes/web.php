<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HadithController;
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
    return view('index');
});

//read all hadiths add edite them
Route::get('/hadith/admin', [ HadithController::class , 'admin']);

Route::resource('/hadith', HadithController::class);