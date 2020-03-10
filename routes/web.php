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

Route::get('/', 'HomeController@GetHomeView');

Route::get('/profil', function () {
    return view('page.profil');
});

Route::get('/bidang-kerja/{id}', 'HomeController@GetBidangKerja');

//Berita
Route::get('/berita', 'NewsController@viewAllNews');

Route::get('/berita/{id}', 'NewsController@viewNewsByID');

//Galeri
Route::get('/galeri', 'GalleryController@viewAllImage');

//Merchandise
Route::get('/merchandise', 'MerchController@viewAll');

Route::get('/sambat-kuy', function () {
    return view('page.form');
});

// Admin Page
Route::get('/login', function () {
    return view('admin.login');
});

Route::post('/login/send', 'AuthController@handleLogin');

Route::get('/test', 'AuthController@getHashedPassword');

Route::group(['middleware' => 'check'], function () {
    Route::get('/log-out', 'AuthController@logOut');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    //News
    Route::get('/admin/berita', 'NewsController@viewAdmin');

    Route::post('/admin/berita/tambah', 'NewsController@addNews');

    Route::get('/admin/berita/update/{id}', 'NewsController@viewUpdate');

    Route::post('/admin/berita/update/send/{id}', 'NewsController@editNews');

    Route::get('/admin/berita/delete/{id}', 'NewsController@deleteNews');

    //Galeri
    Route::get('/admin/galeri', 'GalleryController@viewAdmin');

    Route::get('/admin/galeri/delete/{id}', 'GalleryController@deleteGallery');

    Route::post('/admin/galeri/tambah', 'GalleryController@addPicture');

    //Merchandise
    Route::get('/admin/merchandise', 'MerchController@viewAdmin');

    Route::post('/admin/merchandise/tambah', 'MerchController@AddMerch');

    Route::get('/admin/merchandise/delete/{id}', 'MerchController@DeleteMerch');

    Route::get('/admin/merchandise/update/{id}', 'MerchController@viewUpdate');

    Route::post('/admin/merchandise/update/send/{id}', 'MerchController@EditMerch');

    //Event
    Route::get('/admin/event', 'EventController@viewAdmin');

    Route::post('/admin/event/tambah', 'EventController@AddEvent');

    Route::get('/admin/event/delete/{id}', 'EventController@DeleteEvent');

    Route::get('/admin/event/update/{id}', 'EventController@viewUpdate');

    Route::post('/admin/event/update/send/{id}', 'EventController@EditEvent');

    Route::get('/admin/event/done/{id}', 'EventController@DoneEvent');

    //Proker
    Route::get('/admin/proker', 'ProkerController@viewAdmin');

    Route::post('/admin/proker/tambah', 'ProkerController@AddProker');

    Route::get('/admin/proker/update/{id}', 'ProkerController@viewUpdate');

    Route::post('/admin/proker/update/send/{id}', 'ProkerController@EditProker');

    Route::get('/admin/proker/delete/{id}', 'ProkerController@DeleteProker');
});
