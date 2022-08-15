<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukutamuController;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\loginController;
use App\Http\Middleware\CekLevel;
use App\Models\datakepalakeluarga;

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


//bukutamu
Route::get('/', 'bukutamuController@index')->name('page-bukutamu');

Route::get('/create-bukutamu','bukutamuController@create')->name('create-bukutamu');

Route::post('/post-bukutamu','bukutamuController@store')->name('simpan-bukutamu');

//login

Route::get('/login','loginController@index')->name('page-login');

Route::post('/post-login','loginController@postlogin')->name('post-login');

Route::get('/logout','loginController@logout')->name('page-logout');


//feedback
Route::get('/feedback', 'feedbackController@index');

Route::post('/tambah-feedback', 'feedbackController@create')->name('page-createfeedback');


Route::group(['middleware' => ['auth','CekLevel:Admin,Manajemen,Pelayanan,KetuaRT']], function() {

    Route::get('/dashboard-welcome','welcomepageController@index');
});

Route::group(['middleware' => ['auth','CekLevel:Admin']], function() {

    //dashboard-dataadmin
    Route::get('/dashboard-dataadmin','dataadminController@index');

    Route::post('/dashboard-dataadmin/create','dataadminController@createadmin');

    Route::get('/dashboard-dataadminupdate/{id}','dataadminController@updateadminindex');

    Route::put('/dashboard-dataadminupdate/{id}/update','dataadminController@updateadmin');
    
    Route::get('/dashboard-dataadmindelete/{id}','dataadminController@delete');
});

Route::group(['middleware' => ['auth','CekLevel:Admin,Pelayanan']], function() {

    //dashboard-datapengunjung
    Route::get('/dashboard-datapengunjung','datapengunjungController@display')->name('page-datapengunjung');

    Route::get('/export-datapengunjung','datapengunjungController@bukutamuExport')->name('page-exportdatapengunjung');

    Route::get('/datapengunjung-delete/{id}','datapengunjungController@delete');

    Route::put('/datapengunjung-update/{id}/update','datapengunjungController@update');

    Route::get('/dashboard-editpegawai/{id}/profil','datapengunjungController@showeditpengunjung');
    
});

Route::group(['middleware' => ['auth','CekLevel:Admin,Manajemen']], function() {

    //dashboard-feedback
    Route::get('/dashboard-datafeedback','feedbackController@feedbackindex')->name('page-datafeedback');

    Route::get('/dashboard-datafeedbackdelete/{id}','feedbackController@delete');
    
    

    //dashboard-pegawai
    Route::get('/dashboard-datapegawai','datapegawaiController@index')->name('page-datapegawai');
    
    Route::post('/dashboard-createpegawai','datapegawaiController@create')->name('page-createpegawai');
    
    Route::get('/dashboard-profilpegawai/{id}/profil','datapegawaiController@profil');
    
    Route::put('/dashboard-editpegawai/{id}/edit','profilpegawaiController@update');
    
    Route::get('/dashboard-profildelete/{id}','datapegawaiController@delete');
    
});

Route::group(['middleware' => ['auth','CekLevel:Admin,KetuaRT']], function() {

    //dashboard-datapenduduk RT
    Route::get('/dashboard-datapenduduk','datapendudukController@index');

    Route::post('/dashboard-tambahdatart','datapendudukController@tambahrt')->name('page-creatert');
    
    Route::get('/dashboard-deletert/{id}','datapendudukController@delete');
    
    Route::get('/dashboard-editrt/{id}','datapendudukController@editrtindex');
    
    Route::put('/dashboard-updatert/{id}/update','datapendudukController@editrt');
    
    
    //dashboard-datapenduduk KK
    Route::get('/dashboard-datakepalakeluarga','datakepalakeluargaController@datakartukeluargaindex');
    
    Route::post('/dashboard-datakepalakeluarga/create','datakepalakeluargaController@tambahkepalakeluarga')->name('page-createkk');

    Route::get('/dashboard-editkepalakeluarga/{id}','datakepalakeluargaController@editkepalakeluargaindex');
    
    Route::put('/dashboard-editkepalakeluarga/{id}/edit','datakepalakeluargaController@editkepalakeluarga');

    Route::get('/dashboard-tambahdatapenduduk','datakepalakeluargaController@tambahkartukeluargaindex');

    Route::get('/dashboard-deletekk/{id}','datakepalakeluargaController@delete');
});

// });
