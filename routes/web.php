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
    return view('user.home.index');
});
Route::get('/about', function () {
    return view('user.about.index');
});
Route::get('/home', function () {
    return view('user.home.index');
});
Route::get('/kuisioner', function () {
    return view('user.kuisioner.index');
});

Auth::routes();

// Route::group(['middleware' =>['auth','checkRole:2']],function(){
//     // ================== ROUTE USER ==========================
//     //route home
//     Route::get('/home', 'HomeController@index');
//     //route about
//     Route::get('/about', 'AboutUserController@index');
//     //route kuisioner
//     Route::get('/kuisioner', 'KuisionerUserController@index');
// });

Route::group(['middleware' =>['auth','checkRole:1']],function(){
    // ================ ROUTE ADMIN =========================
    // route dashboard
    Route::get('/dashboard', 'DashboardController@index');
    // route user

    // route result admin
    Route::get('/result','ResultController@index');
    // Route::get('/login','AuthController@index');

    //route kuisioner admin
    Route::get('/admin/kuisioner','KuisionerAdminController@index');

    Route::post('/kuisioner/store','KuisionerAdminController@store');

    //route history admin
    Route::get('/history','HistoryAdminController@index');

    //route user admin
    Route::get('/user','UserAdminController@index');

    //route about admin
    // Route::get('/about','AboutAdminController@index');
    Route::get('/admin/about','AboutAdminController@index')->name('about');
    // Route::get('/admin/about/hapus_deskripsi/{id}','AboutAdminController@hapus_deskripsi')->name('hapus_deskripsi');
    //crud admin about
    Route::get('/admin/about/hapus/{id}','AboutAdminController@hapus');
    Route::get('/admin/about/edit/{id_about}','AboutAdminController@edit');
    Route::get('/admin/about/tambah','AboutAdminController@tambah');
    Route::post('/admin/about/tambah/store','AboutAdminController@store');
    Route::post('/admin/about/update','AboutAdminController@update');

    //crud admin user 
    Route::get('/admin/user/hapus/{id}','UserAdminController@hapus');
    Route::get('/admin/user/edit/{id_mahasiswa}','UserAdminController@edit');
    Route::get('/admin/user/tambah','UserAdminController@tambah');
    Route::post('/admin/user/tambah/store','UserAdminController@store');
    Route::post('/admin/user/update','UserAdminController@update');
    //crud admin kuisioner

    // crud result admin

    // crud history
});
