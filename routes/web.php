<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventcontroller;
use App\Http\Controllers\facilitiescontroller;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\Roomcontroller;
use App\Http\Controllers\Imagescontroller;
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

Route::get('events',[eventcontroller::class,'getData']);

Route::get('facilities',[facilitiescontroller::class,'getData']);


Route::post('forms',[formcontroller::class,'getData']);
Route::view("forms","forms");

Route::get('Roomlist',[Roomcontroller::class,'show']);

Route::get('Imagelist',[Imagescontroller::class,'show']);