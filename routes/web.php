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

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/listaLibri', 'BookController@list')->name('book_list');

Route::get('/aggiungiLibro', 'BookController@addBook')->name('add_book');

Route::get('/aggiornaDivinaCommedia', 'BookController@editBook')->name('edit_book');
