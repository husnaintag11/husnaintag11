<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoultryController;
use App\Http\Controllers\AppleController;
use App\Http\Controllers\CatageriousController;


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

Route::get('/list/{name}',[PoultryController::class,'productlist']);
Route::get('/add/{id}',[PoultryController::class,'addproduct']);
Route::get('/update/{id}',[PoultryController::class,'updateproduct']);

Route::get('/catg/{id}',[CatageriousController::class,'catg'])->name('catg.product');








