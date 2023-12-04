<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ReferensiController;
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

Route::get('/', function () {
    return view('PageDashboard.Pasien.Halamanutama');
})->middleware('auth');
Route::get('/DashboardRS', function () {
    return view('PageDashboardRs.PasienRs.PasienRs');
})->middleware('auth');


Route::get('/DaftarKunjunganPasien', function () {
    return view('PageDashboard.Pasien.DaftarPasien');
})->middleware('auth');
Route::get('/EditDaftarKunjunganPasien', function () {
    return view('PageDashboard.Pasien.EditDaftarPasien');
})->middleware('auth');



Route::controller(PasienController::class)->group(function(){
    route::get('/CariPasien','index')->middleware('auth');
    route::get('/TambahPasien','create')->middleware('auth');
    route::get('/getCity','getCity')->name('getCity')->middleware('auth');
    route::get('/getCounty','getCounty')->name('getCounty')->middleware('auth');
    route::get('/getVillage','getVillage')->name('getVillage')->middleware('auth');
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
