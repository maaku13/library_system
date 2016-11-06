<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BooksController@index');
Route::get('/home', 'BooksController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Books
Route::get('books/manage', 'BooksController@listBooks');
Route::get('books/create', 'BooksController@create');
Route::post('books/create', 'BooksController@store');
Route::get('books/edit/{id}', 'BooksController@edit');
Route::post('books/update/{id}', 'BooksController@update');
Route::get('books/delete/{id}', 'BooksController@destroy');
Route::post('books/search/results', 'BooksController@searchBookResults');
Route::get('books/search', 'BooksController@searchBook');
Route::get('books/return', 'BooksController@booksOnHand');
Route::get('books/return/{id}', 'BooksController@returnBook');
Route::get('books/{id}', 'BooksController@showBook');
Route::get('books/barrow/{id}', 'BooksController@barrowBook');

// Members
Route::get('members/manage', 'UsersController@index');
Route::get('members/create', 'UsersController@create');
Route::post('members/create', 'UsersController@store');
Route::get('members/edit/{id}', 'UsersController@edit');
Route::post('members/update/{id}', 'UsersController@update');
Route::get('members/delete/{id}', 'UsersController@destroy');

// Reports
Route::get('reports', 'ReportsController@bookLoans');
Route::get('reports/loans', 'ReportsController@bookLoans');
Route::get('reports/balance', 'ReportsController@bookBalance');