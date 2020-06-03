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

Route::get('/test', function () {return view('layout');})->name('layout');
Route::get('/test-home', function () {return view('home');})->name('home_test');
Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/image-gallery', function () {return view('image-gallery');})->name('gallery');
Route::get('/reproduction-information', function () {return view('reproduction');})->name('reproduction');
Route::get('/habitat', function () {return view('habitat');})->name('habitat');
Route::get('/sc-name-classification', function () {return view('classification');})->name('classification');
Route::get('/anatomy', function () {return view('anatomy');})->name('anatomy');
Route::get('/animal-behavior', function () {return view('behavior');})->name('behavior');
Route::get('/curiosidades', function () {return view('curiosidades');})->name('curiosidades');
Route::get('/infografía', function () {return view('infografia');})->name('infografia');
Route::get('/alimentación', function () {return view('alimentacion');})->name('alimentacion');
Route::get('/about', function () {return view('about');})->name('about');
