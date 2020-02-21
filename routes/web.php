<?php

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/carapengunaan', function () {
    return view('cara');
});

Route::get('/main', function () {
    return view('layouts.main');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/asal', function () {
    return view('asal.index');
});
// Route::get('/createasal', function () {
//     return view('asal.create');
// });
Route::get('/jenis', function () {
    return view('jenis.index');
});
// Route::get('/createjenis', function () {
//     return view('jenis.create');
// });
// Route::get('/createkategori', function () {
//     return view('kategori.create');
// });


// fungsi controllers kategori
Route::get('/kategori','KategoriController@index');

// input data kategori
Route::get('/kategori/tambah','KategoriController@tambah');
Route::post('/kategori/store','KategoriController@store');

//update data kategori
Route::get('/kategori/edit/{id}','KategoriController@edit');
Route::post('/kategori/update','KategoriController@update');

//hapus data dari kategori
Route::get('/kategori/hapus/{id}','KategoriController@hapus');
