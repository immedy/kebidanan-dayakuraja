<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function pasien()
    {
        return view('PageDashboard.Pasien.CariPasien',[
            'pasien' => Pasien::select('NAMA','TEMPAT_LAHIR')->paginate(2500)
        ]);
    }
    public function AddPasien()
    {
        return view('PageDashboard.Pasien.TambahPegawai');
    }
}
