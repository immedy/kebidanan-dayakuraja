<?php

use App\Http\Controllers\PasienController;
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
});
Route::get('/DashboardRS', function () {
    return view('PageDashboardRs.PasienRs.PasienRs');
});
Route::get('/Pegawai', function () {
    return view('PageDashboardRs.MasterData.Pegawai.HomePegawai');
});
Route::get('/Faskes', function () {
    return view('PageDashboardRs.MasterData.Faskes1.Faskes');
});
Route::get('/DaftarKunjunganPasien', function () {
    return view('PageDashboard.Pasien.DaftarPasien');
});
Route::get('/EditDaftarKunjunganPasien', function () {
    return view('PageDashboard.Pasien.EditDaftarPasien');
});



Route::controller(PasienController::class)->group(function(){
    route::get('/CariPasien','pasien');
    route::get('/TambahPasien','AddPasien');
});

Route::controller(ReferensiController::class)->group(function(){
    route::get('/DataReferensi','Referensi');
});
