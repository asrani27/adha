<?php

use Illuminate\Support\Facades\Route;

Route::middleware('visit')->group(function () {
    Route::get('/', 'FrontEndController@beranda');
    Route::get('/profil', 'FrontEndController@profil');
    Route::get('/kategori/{id}/berita', 'FrontEndController@kategori');
    Route::get('/info-harga', 'FrontEndController@info_harga');
    Route::get('/info-harga/search', 'FrontEndController@info_harga_search');
    Route::get('/info-stok', 'FrontEndController@info_stok');
    Route::get('/info-stok/search', 'FrontEndController@info_stok_search');
    Route::get('/grafik', 'FrontEndController@grafik');
    Route::get('/artikel', 'FrontEndController@artikel');
    Route::get('/artikel/detail/{id}', 'FrontEndController@detailartikel');
    Route::post('/artikel/detail/{id}/komentar', 'FrontEndController@simpanKomen');
    Route::get('/grafik/harga', 'FrontEndController@grafik_harga');
    Route::get('/grafik/stok', 'FrontEndController@grafik_stok');
    Route::get('/grafik/harga/search', 'FrontEndController@grafik_harga_search');
    Route::get('/grafik/stok/search', 'FrontEndController@grafik_stok_search');
    Route::get('/login', 'FrontEndController@login')->name('login');
    Route::post('/login', 'LoginController@login');
});

Route::group(['middleware' => ['auth', 'role:superadmin|admin']], function () {
    Route::get('/home', 'HomeController@index');

    Route::get('/informasi/kategori', 'KategoriController@index');
    Route::get('/informasi/kategori/add', 'KategoriController@create');
    Route::post('/informasi/kategori/add', 'KategoriController@store');
    Route::get('/informasi/kategori/edit/{id}', 'KategoriController@edit');
    Route::post('/informasi/kategori/edit/{id}', 'KategoriController@update');
    Route::get('/informasi/kategori/delete/{id}', 'KategoriController@delete');

    Route::get('/informasi/berita', 'BeritaController@index');
    Route::get('/informasi/berita/add', 'BeritaController@create');
    Route::post('/informasi/berita/add', 'BeritaController@store');
    Route::get('/informasi/berita/edit/{id}', 'BeritaController@edit');
    Route::post('/informasi/berita/edit/{id}', 'BeritaController@update');
    Route::get('/informasi/berita/delete/{id}', 'BeritaController@delete');

    Route::get('/data/pengguna', 'UserController@index');
    Route::get('/data/pengguna/add', 'UserController@create');
    Route::post('/data/pengguna/add', 'UserController@store');
    Route::get('/data/pengguna/edit/{id}', 'UserController@edit');
    Route::post('/data/pengguna/edit/{id}', 'UserController@update');
    Route::get('/data/pengguna/delete/{id}', 'UserController@delete');

    Route::get('/data/administrator', 'AdministratorController@index');
    Route::get('/data/administrator/add', 'AdministratorController@create');
    Route::post('/data/administrator/add', 'AdministratorController@store');
    Route::get('/data/administrator/edit/{id}', 'AdministratorController@edit');
    Route::post('/data/administrator/edit/{id}', 'AdministratorController@update');
    Route::get('/data/administrator/delete/{id}', 'AdministratorController@delete');

    Route::get('/data/profil', 'ProfilController@index');
    Route::get('/data/profil/add', 'ProfilController@create');
    Route::post('/data/profil/add', 'ProfilController@store');
    Route::get('/data/profil/edit/{id}', 'ProfilController@edit');
    Route::post('/data/profil/edit/{id}', 'ProfilController@update');
    Route::get('/data/profil/delete/{id}', 'ProfilController@delete');

    Route::get('/data/gantipassword', 'GantiPassController@index');
    Route::post('/data/gantipassword', 'GantiPassController@change');

    Route::get('/informasi/slider', 'SliderController@index');
    Route::get('/informasi/slider/add', 'SliderController@create');
    Route::post('/informasi/slider/add', 'SliderController@store');
    Route::get('/informasi/slider/edit/{id}', 'SliderController@edit');
    Route::post('/informasi/slider/edit/{id}', 'SliderController@update');
    Route::get('/informasi/slider/delete/{id}', 'SliderController@delete');


    Route::get('/laporan/administrator', 'ReportController@administrator');
    Route::get('/laporan/administrator/cetak', 'ReportController@cetakadmin');
});

Route::get('/logout', 'LogoutController@logout');
