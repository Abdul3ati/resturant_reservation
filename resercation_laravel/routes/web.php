<?php

use Illuminate\Support\Facades\Auth;
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
    return view('Admin/inde');
});

// Route::get('/', function () {
//     return view('customer');
// });

Route::get('/','CustomerController@index');

Route::get('/customer/tambah','CustomerController@tambah');

Route::post('/customer/simpan', 'CustomerController@simpan');

// Route::get('/mahasiswa','MahasiswaController@index');

// Route::get('/mahasiswa/tambah','MahasiswaController@tambah');

// Route::post('/mahasiswa/simpan', 'MahasiswaController@simpan');

// Route::get('/mahasiswa/detail/{id}', 'MahasiswaController@detail');

// Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');

// Route::post('/mahasiswa/update', 'MahasiswaController@update');

// Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@delete');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/admin/users', 'Admin\UsersController', ['except' => ['show','create','store']]);