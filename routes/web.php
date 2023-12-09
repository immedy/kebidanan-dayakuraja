<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\RujukanController;
use App\Models\Pasien;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/DaftarKunjunganPasien', function () {
    return view('PageDashboard.Pasien.DaftarPasien');
})->middleware('auth');
Route::get('/EditDaftarKunjunganPasien', function () {
    return view('PageDashboard.Pasien.EditDaftarPasien');
})->middleware('auth');



Route::controller(PasienController::class)->group(function(){
    route::get('/CariPasien','index')->name('caripasien')->middleware('auth');
    route::get('/TambahPasien','create')->name('tambahpasien')->middleware('auth');
    route::post('/pasienstore','store')->middleware('auth');
    route::get('/getCity','getCity')->name('getCity');
    route::get('/getCounty','getCounty')->name('getCounty');
    route::get('/getVillage','getVillage')->name('getVillage');
});

Route::controller(RujukanController::class)->group(function(){
    route::get('/','index')->middleware('auth');
    route::get('/DashboardRS','index2')->middleware('auth');
    route::get('/tambahRujukan/{id}', 'create')->name('createrujukan')->middleware('auth');
    route::post('/simpanRujukan/{id}', 'store')->name('storerujukan')->middleware('auth');
    route::get('/DashboardRS/Rujukan/{id}','show')->middleware('auth')->name('DetailRujukan');
});

Route::controller(ReferensiController::class)->group(function(){
    route::get('/DataReferensi','Referensi')->middleware('auth');
    route::get('/Faskes','Faskes')->middleware('auth');
    route::post('Addreferensi','AddReferensi')->name('AddReferensi')->middleware('auth');
    route::post('/AddDatareferensi','AddDatareferensi')->name('AddDatareferensi')->middleware('auth');
    route::post('/AddFaskes','AddFaskes')->name('AddFaskes')->middleware('auth');
});

Route::controller(PegawaiController::class)->group(function(){
    route::get('/login','Login')->name('login');
    route::post('/Autentikasi','Autentikasi')->name('Autentikasi');
    route::post('/logout','logout')->middleware('auth')->middleware('auth');
    route::get('/Pegawai','pegawai')->middleware('auth');
    route::post('AddPegawai','AddPegawai')->name('AddPegawai')->middleware('auth');
    route::get('/username/{id}','Username')->name('Username')->middleware('auth');
    route::put('/AddUsername','AddUsername')->name('AddUsername')->middleware('auth');
});
