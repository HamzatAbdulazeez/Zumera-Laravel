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
})->name('index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/invest', function () {
    return view('invest');
})->name('invest');

Route::get('/leadership', function () {
    return view('leadership');
})->name('leadership');

Route::get('/services', function () {
    return view('our-services');
})->name('services');

Route::get('/philosophy', function () {
    return view('philosophy');
})->name('philosophy');

Route::get('/properties', function () {
    return view('properties');
})->name('properties');

Route::get('/tower', function () {
    return view('tower');
})->name('tower');

Route::get('/view-blog', function () {
    return view('view-blog');
})->name('view-blog');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/tribe', function () {
    return view('tribe');
})->name('tribe');

Route::get('/event', function () {
    return view('event');
})->name('event');

Route::get('/csr', function () {
    return view('csr');
})->name('csr');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/realtor', function () {
    return view('realtor');
})->name('realtor');

Route::get('/register', function () {
    return view('register');
})->name('register');

