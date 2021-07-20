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
// Route::get('/about', function () {
//     return view('user.about.index');
// });
Route::get('/about','AboutUserController@index');

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

// Route::group(['middleware' =>['auth','checkRole:1']],function(){
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

    //route answer admin
    Route::get('/answer','AnswerAdminController@index');

    //route user admin
    Route::get('/user','UserAdminController@index');

     //route category admin
     Route::get('/kategori','KategoriAdminController@index');

    //route about admin
    // Route::get('/about','AboutAdminController@index');
    Route::get('/admin/about','AboutAdminController@index')->name('about');
    // Route::get('/admin/about/hapus_deskripsi/{id}','AboutAdminController@hapus_deskripsi')->name('hapus_deskripsi');
    //crud admin about
    Route::get('/admin/login', function(){
        return view('admin.login_admin');
    });
    Route::get('/admin/about/hapus/{id}','AboutAdminController@hapus');
    Route::get('/admin/about/edit/{id_tentang}','AboutAdminController@edit');
    Route::get('/admin/about/tambah','AboutAdminController@tambah');
    Route::post('/admin/about/tambah/store','AboutAdminController@store');
    Route::post('/admin/about/update','AboutAdminController@update');

    //route admin login 
    Route::post('/admin/post/login', 'LoginAdminController@login');
    Route::post('/admin/post/logout', 'LoginAdminController@logout');

    //crud admin user 
    Route::get('/admin/user/hapus/{id}','UserAdminController@hapus');
    Route::get('/admin/user/edit/{id_pengguna}','UserAdminController@edit');
    Route::get('/admin/user/tambah','UserAdminController@tambah');
    Route::post('/admin/user/tambah/store','UserAdminController@store');
    Route::post('/admin/user/update','UserAdminController@update');

    //crud admin kuisioner
    Route::get('/admin/kuisioner/hapus/{id}','KuisionerAdminController@hapus');
    Route::get('/admin/kuisioner/edit/{id_pertanyaan}','KuisionerAdminController@edit');
    Route::get('/admin/kuisioner/tambah','KuisionerAdminController@tambah');
    Route::post('/admin/kuisioner/tambah/store','KuisionerAdminController@store');
    Route::post('/admin/kuisioner/update','KuisionerAdminController@update');


    //crud kategori
    Route::get('/admin/kategori/hapus/{id}','KategoriAdminController@hapus');
    Route::get('/admin/kategori/edit/{id_kategori}','KategoriAdminController@edit');
    Route::get('/admin/kategori/tambah','KategoriAdminController@tambah');
    Route::post('/admin/kategori/tambah/store','KategoriAdminController@store');
    Route::post('/admin/kategori/update','KategoriAdminController@update');

    // crud answer 
    Route::get('/admin/answer/hapus/{id}','AnswerAdminController@hapus');
    Route::get('/admin/answer/edit/{id_pertanyaan}','AnswerAdminController@edit');
    Route::get('/admin/answer/tambah','AnswerAdminController@tambah');
    Route::post('/admin/answer/tambah/store','AnswerAdminController@store');
    Route::post('/admin/answer/update','AnswerAdminController@update');
// });
