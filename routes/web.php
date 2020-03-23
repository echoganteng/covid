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
//======================================Bagian Portal=======================================//

// Route::get('/', function () {
//     return view('welcome');
// });

//======================================Bagian Beranda=======================================//

Route::get('/', 'IndexDepanController@index');

// Berita-----------------------------------------------------------------------------------

Route::get('/berita', 'PageController@indexberita'); //tanpilan list berita

Route::get('/berita/{x}', 'PageController@detilberita'); //tampilan detil berita

// Pengumuman--------------------------------------------------------------------------------

Route::get('/informasi', 'PageController@indexinformasi'); //tampilan list informasi

Route::get('/informasi/{x}', 'PageController@detilinformasi'); //tampilan detil informasi

// Opini-----------------------------------------------------------------------------------

Route::get('/opini', 'PageController@indexopini'); //tanpilan list opini

Route::get('/opini/{x}', 'PageController@detilopini'); //tampilan detil opini

// Resensi-----------------------------------------------------------------------------------

Route::get('/resensi', 'PageController@indexresensi'); //tanpilan list resensi

Route::get('/resensi/{x}', 'PageController@detilresensi'); //tampilan detil resensi

// Galeri-----------------------------------------------------------------------------------

Route::get('/photo', 'PageController@indexgaleri')->name('photo'); //tanpilan list galeri

// Tampilan detil halaman menu utama -------------------------------------------------------

Route::get('/halaman/{x}', 'PageController@halaman');

// Pengaduan

//Route::get('/pengaduan', 'PageController@indexpengaduan')->name('pengaduan'); ////form pengaduan

//Route::post('/kirim_pengaduan', 'PageController@kirim_pengaduan')->name('store.pengaduan'); //kirim pengaduan

// Download Berkas

Route::get('/download', 'PageController@indexdownload')->name('download'); //form pengaduan

Route::get('/download/json','PageController@json')->name('get.download');

//===================================Akhir Bagian Depan====================================//







//===================================Bagian Administrasi===================================//

//Auth::routes();

Route::get('/webmin`', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

Route::post('/webmin', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);

Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Routing untuk authentifikasi
// Route::group(['namespace' => 'Auth'],function(){
// 	Route::get('/webmin','LoginController@showLoginForm')->name('login');
//     Route::post('/webmin','LoginController@login')->name('login.post');
//     Route::get('/logout',function(){
//         Auth::logout();
//         return redirect('/');
//     })->name('logout');  
// });

// Auth::routes();

Route::group(['middleware' => ['web','auth']], function(){

	Route::get('/panel', 'HomeController@index');

	Route::resource('/panel/pengguna', 'UserController');

	Route::resource('/panel/berita', 'PostController');

	// Route::resource('/panel/info', 'InfoController');

	// Route::resource('/panel/dokumen', 'FileController');		

});



Route::group(['middleware' => ['web','auth','level:1']], function(){

	// Route::get('/panel', 'HomeController@index');

	// Route::resource('/panel/pengguna', 'UserController');

	// Route::resource('/panel/berita', 'PostController');

	Route::resource('/panel/pengumuman', 'InfoController');

	Route::resource('/panel/dokumen', 'FileController');

	Route::resource('/panel/galeri', 'GaleriController');

	Route::resource('/panel/menu', 'MainmenuController');

	Route::resource('/panel/opini', 'OpiniController');

	Route::resource('/panel/resensi', 'ResensiController');

	Route::resource('/panel/video', 'YoutubeController');



	Route::get('/panel/sosmed/{x}','SosmedController@edit');

	Route::put('/panel/sosmed/{x}','SosmedController@update');

	Route::get('/panel/pengaturan','AlamatController@index');

	Route::put('/panel/pengaturan1/{x}','AlamatController@update1');

	Route::put('/panel/pengaturan2/{x}','AlamatController@update2');

	Route::get('/panel/lokasi','MapController@index');

	Route::put('/panel/lokasi/{x}','MapController@update');

	Route::get('/panel/slider', 'SliderController@index');

	Route::post('/panel/slider', 'SliderController@store');

	Route::delete('/panel/slider/{x}', 'SliderController@destroy');

});

//===============================Akhir Bagian Administrasi=================================//



//===================================Bagian Author===================================//

Route::group(['middleware' => ['web','auth','level:2']], function(){

	// Route::resource('/panel/pengguna', 'UserController');

	// Route::resource('/panel/berita', 'PostController');

	// Route::resource('/panel/info', 'InfoController');

});

//===================================Akhir Bagian Author===================================//