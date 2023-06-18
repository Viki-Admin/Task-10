<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/libreri', function () {
    return view('libreri');
})->name('libreri');

Route::get('/regist', function () {
    return view('regist');
})->name('regist');

Route::get(
    '/profil/{id}',
    'App\Http\Controllers\UserController@profil'
)-> name('profil');


Route::post(
    '/regist/submit',
    'App\Http\Controllers\UserController@reg'
) -> name('regist_form');

Route::post(
    '/auth/submit',
    'App\Http\Controllers\UserController@auth'
) -> name('auth_form');

Route::post(
    '/book/submit',
    'App\Http\Controllers\UserController@book'
) -> name('book_form');

Route::get(
    '/login',
    'App\Http\Controllers\UserController@login'
) -> name('login');

Route::get(
    '/logout',
    'App\Http\Controllers\UserController@logout'
) -> name('logout');

Route::post(
    '/comments/submit',
    'App\Http\Controllers\UserController@com'
) -> name('regist_com');

Route::get(
    '/out_users',
    'App\Http\Controllers\UserController@out_users'
) -> name('out_users');

Route::get(
    '/libreri',
    'App\Http\Controllers\UserController@libreri'
) -> name('libreri');


Route::get(
    '/libreri/book/{id}',
    'App\Http\Controllers\UserController@book_out'
) -> name('book');


Route::get(
    '/libreri/delete/{id}',
    'App\Http\Controllers\UserController@book_delete'
) -> name('book_delete');

Route::get(
    '/libreri/update/{id}',
    'App\Http\Controllers\UserController@book_update'
) -> name('book_update');

Route::post(
    '/libreri/update/{id}',
    'App\Http\Controllers\UserController@form_update_book'
) -> name('form_update_book');




