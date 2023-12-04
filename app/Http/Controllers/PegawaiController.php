<?php

namespace App\Http\Controllers;

use App\Models\faskes;
use App\Models\pegawai;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    public function Pegawai()
    {
        return view('PageDashboardRs.MasterData.Pegawai.HomePegawai',[
            'pegawai' => pegawai::all(),
            'faskes' => faskes::all()
        ]);
    }
    public function AddPegawai(Request $request)
    {
        $ValidasiAddPegawai = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'faskes_id' => 'required'
        ]);
        $ValidasiAddPegawai['status'] = 1;
        pegawai::create($ValidasiAddPegawai);
        if($ValidasiAddPegawai){
            Alert::Success('Berhasil');
        }
        return back();
    }
}
