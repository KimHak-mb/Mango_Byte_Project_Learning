<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessoryController;

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
    return view('components.master');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/discount', function() {
    return view('pages.discount');
});

Route::get('/newStock', function() {
    return view('/pages.newStock');
});

Route::get('/accessories', function() {
    return view('/pages.accessories');
});

Route::get('/laptop', function() {
    return view('/pages.laptop');
});

Route::get('/ipadTablet', function() {
    return view('/pages.ipadTablet');
});

Route::get('/smartWatch', function() {
    return view('/pages.smartWatch');
});

Route::get('/profile', function() {
    return view('/pages.profile');
});



Route::post('insertAccessory', [AccessoryController::class, 'insert']);

Route::get('/product',[AccessoryController::class,'readdata']);

Route::get('updateDelete',[AccessoryController::class, 'updateOrDelete']);

Route::get('updateAccessory',[AccessoryController::class, 'updateAccessory']);
