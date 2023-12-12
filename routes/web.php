<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(form ::class)->group(function () {
    Route::get('/view','view')->name('view');
    Route::post('/view','reg')->name('view');
    Route::get('/dlt{id}','delete')->name('dlt');
});


