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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/artigo', 'HomeController@artigo')->name('artigos');
Route::get('/gestao','HomerController@gestao')->name('gestao');
Route::get('/institucional','HomeController@institu')->name('institu');
                                //reset password//
Route::get('/reset/password','Auth\\ResetPasswordController@getResetPassword')->name('reset.password');
Route::post('/reset/password/','Auth\\ResetPasswordController@sendReset')->name('sendReset');
Route::get('/reset/{token}/{email}','Auth\\ResetPasswordController@getReset')->name('password.reset');
Route::put('/update-password/{token}/{email}','Auth\\ResetPasswordController@update')->name('password.update');
                    //rotas de autenticação//
Route::get('/login','Auth\\AuthController@index')->name('login');
Route::post('/login.auth','Auth\\AuthController@auth')->name('login.do');
Route::get('/register','Auth\\RegisterController@index')->name('register');
Route::post('/register/','Auth\\RegisterController@validator')->name('register.do');
Route::get('/logout','Auth\\AuthController@logout')->name('logout');

Route::get('/home','User\\UserController@index')->middleware('auth')->name('home.user');
Route::post('/post','AdminController@post')->middleware('auth')->name('post');
Route::delete('/archivo/delete/','AdminController@distroy')->middleware('auth')->name('delete');



