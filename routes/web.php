<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\RujukanController;
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


Route::controller(PasienController::class)->group(function(){
    // route::get('/ListPasien','index')->name('listpasien')->middleware(['auth','AdminPuskesmas']);
    route::get('/TambahPasien','create')->name('tambahpasien')->middleware(['auth','AdminPuskesmas']);
    route::post('/pasienstore','store')->name('simpanpasien')->middleware(['auth','AdminPuskesmas']);
    route::get('/EditPasien','edit')->middleware(['auth','AdminPuskesmas'])->name('EditPasien');
    route::put('/UpdatePasien','update')->middleware(['auth','AdminPuskesmas'])->name('UpdatePasien');
    route::get('/getCity','getCity')->name('getCity');
    route::get('/getCounty','getCounty')->name('getCounty');
    route::get('/getVillage','getVillage')->name('getVillage');
    Route::get('/search-patients', 'searchPatients')->name('search.patients')->middleware('auth', 'AdminPuskesmas');
});

Route::controller(RujukanController::class)->group(function(){
    route::get('/','index')->middleware(['auth','AdminPuskesmas'])->name('halamanutama');
    route::get('/DashboardRS','index2')->name('DashboardRS')->middleware('auth','AdminRs');
    route::get('/tambahRujukan', 'create')->name('createrujukan')->middleware(['auth','AdminPuskesmas']);
    route::post('/simpanRujukan', 'store')->name('storerujukan')->middleware(['auth','AdminPuskesmas']);
    route::get('/DashboardRS/Rujukan/','show')->middleware(['auth','AdminRs'])->name('DetailRujukan');
    route::get('/RujukanEdit','edit')->name('EditDetailRujukan')->middleware(['auth','AdminPuskesmas']);
    route::put('/RujukanEditSave','update')->name('RujukanUpdate')->middleware(['auth','AdminPuskesmas']);
    route::get('/UpdateStatusPasien','UpdateStatusPasien')->name('UpdateStatusPasien')->middleware(['auth','AdminRs']);
    route::get('/indexFaskesCount','indexFaskesCount')->name('indexFaskesCount')->middleware(['auth','AdminRs']);
    route::post('/HalamanLaporan','getFaskesCounts')->name('faskes.getCounts')->middleware(['auth','AdminRs']);
    route::post('/faskes/reset','resetFilter')->name('faskes.resetFilter')->middleware(['auth','AdminRs']);
});

Route::controller(AdviceController::class)->group(function(){
    route::get('/AdviceDokter', 'index')->name('AdviceDokter')->middleware(['auth', 'AdminPuskesmas']);
    route::post('/TambahAdvice', 'store')->name('TambahAdvice')->middleware(['auth', 'AdminRs']);
});

Route::controller(ReferensiController::class)->group(function(){
    route::get('/DataReferensi','Referensi')->middleware(['auth','AdminRs']);
    route::get('/Faskes','Faskes')->middleware(['auth','AdminRs']);
    route::post('Addreferensi','AddReferensi')->name('AddReferensi')->middleware(['auth','AdminRs']);
    route::post('/AddDatareferensi','AddDatareferensi')->name('AddDatareferensi')->middleware(['auth','AdminRs']);
    route::post('/AddFaskes','AddFaskes')->name('AddFaskes')->middleware(['auth','AdminRs']);
});

Route::controller(PegawaiController::class)->group(function(){
    route::get('/login','Login')->name('login');
    route::post('/Autentikasi','Autentikasi')->name('Autentikasi');
    route::post('/logout','logout')->middleware('auth')->middleware('auth');
    route::get('/Pegawai','pegawai')->middleware(['auth','AdminRs']);
    route::post('AddPegawai','AddPegawai')->name('AddPegawai')->middleware(['auth','AdminRs']);
    route::get('/username/{id}','Username')->name('Username')->middleware(['auth','AdminRs']);
    route::put('/AddUsername','AddUsername')->name('AddUsername')->middleware(['auth','AdminRs']);
});
