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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('logout'); 
    Route::get('/admin/message', 'message');
    Route::post('/admin/dashboard', 'sendMessage');
    Route::get('/admin/viewmessage', 'view');
    
    });
