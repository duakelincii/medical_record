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
    return view('welcome');
}
);

Auth::routes([]);

Route::group(['prefix' => 'users'], function(){
    Route::auth();
    });

Route::group(['middleware' => 'auth'], function(){

    //Main
    Route::get('/', 'MainController@index')->name('dashboard');

    //Pasien
    Route::get('/pasien', 'PasienController@index')->name('pasien');
    Route::get('/pasien/tambah/', 'PasienController@tambah_pasien')->name('pasien.tambah');
    Route::post('/pasien/tambah/simpan', 'PasienController@simpan_pasien')->name('pasien.simpan');
    Route::post('/pasien/edit/update/', 'PasienController@update_pasien')->name('pasien.update');
    Route::delete('/pasien/hapus/{id}','PasienController@hapus_pasien')->name('pasien.destroy');
    Route::get('/pasien/edit/{id}','PasienController@edit_pasien')->name('pasien.edit');
    //End Pasien

    //Obat
    Route::get('/obat', 'ObatController@index')->name('obat');
    Route::delete('/obat/hapus/{id}','ObatController@hapus_obat')->name('obat.destroy')->middleware('staff');
    Route::get('/obat/edit/{id}', 'ObatController@edit_obat')->name('obat.edit')->middleware('staff');
    Route::get('/obat/tambah/', 'ObatController@tambah_obat')->name('obat.tambah')->middleware('staff');
    Route::post('/obat/tambah/simpan', 'ObatController@simpan_obat')->name('obat.simpan')->middleware('staff');
    Route::post('/obat/edit/update/', 'ObatController@update_obat')->name('obat.update')->middleware('staff');
    //End Obat

    //Lab
    Route::get('/lab', 'LabController@index')->name('lab');
    Route::delete('/lab/hapus/{id}','LabController@hapus_lab')->name('lab.destroy')->middleware('staff');
    Route::get('/lab/edit/{id}', 'LabController@edit_lab')->name('lab.edit')->middleware('staff');
    Route::get('/lab/tambah', 'LabController@tambah_lab')->name('lab.tambah')->middleware('staff');
    Route::post('/lab/tambah/simpan', 'LabController@simpan_lab')->name('lab.simpan')->middleware('staff');
    Route::post('/lab/edit/update/', 'LabController@update_lab')->name('lab.update')->middleware('staff');
    //End Lab

    //rm
    Route::get('/rm', 'RMController@index')->name('rm');
    Route::delete('/rm/hapus/{id}','RMController@hapus_rm')->name('rm.destroy');
    Route::get('/rm/edit/{id}', 'RMController@edit_rm')->name('rm.edit');
    Route::get('/rm/tambah', 'RMController@tambah_rm')->name('rm.tambah');
    Route::get('/rm/tambah/{idpasien}', 'RMController@tambah_rmid')->name('rm.tambah.id');
    Route::post('/rm/simpan/', 'RMController@simpan_rm')->name('rm.simpan');
    Route::post('/rm/update/', 'RMController@update_rm')->name('rm.update');
    Route::get('/rm/list/{idpasien}', 'RMController@list_rm')->name('rm.list');
    Route::get('/rm/lihat/{id}', 'RMController@lihat_rm')->name('rm.lihat');
    //End rm

    //Tagihan
    Route::get('/tagihan/{id}', 'RMController@tagihan')->name('tagihan');
    Route::get('/tagihan/export/{id}', 'RMController@tagihan_export')->name('tagihan.export');

    //Profile
    Route::get('users/profile', 'ProfileController@index')->name('profile.edit');
    Route::patch('users/profile/simpan', 'ProfileController@simpan')->name('profile.simpan');
    //endProfile

});



Route::group(['middleware' => 'auth','admin'],function(){

    //Setting
    Route::get('/pengaturan', 'PengaturanController@index')->name('pengaturan');
    Route::patch('/pengaturan/simpan', 'PengaturanController@simpan')->name('pengaturan.simpan');


    Route::get('users/profile/{id}', 'ProfileController@edit')->name('profile.edit.admin');

    //Users
    Route::get('/users', 'UserController@index')->name('user');
    Route::delete('/users/delete/{id}', 'UserController@hapus')->name('user.destroy');
    //endUsers
});


