<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {return view('index');});
Route::get('/about',function (){ return view('about');});
Route::get('/portfolio',function (){ return view('portfolio');});
Route::get('/contact',function (){ return view('contact');});
Route::get('/privacy-policy',function (){ return view('privacy');});
Route::get('/terms-and-conditions',function (){ return view('terms');});
Route::get('/refund-policy',function (){ return view('refund');});
Route::get('/our-price',function (){ return view('price');});
Route::get('/animation-video',function (){ return view('video');});
Route::post('/send-email',[Controller::class,'sendEmail'])->name('send.email');


