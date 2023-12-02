<?php

namespace App\Http\Controllers;

use App\Models\DataReferensi;
use App\Models\faskes;
use App\Models\referensi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReferensiController extends Controller
{
    public function Referensi()
    {
        return view('PageDashboardRs.MasterData.Referensi.DatarRefernsi',[
            'REFERENSI' => referensi::all(),
            'DATAREFERENSI' => DataReferensi::orderBy('referensi_id','asc')->get()
        ]);
    }
    public function AddReferensi(Request $request)
    {
        $ValidasiReferensi = $request->validate([
            'referensi' => 'required'
        ]);
        referensi::create($ValidasiReferensi);
        if($ValidasiReferensi){
            Alert::Success('Sukses');
        }
        return back();
    }
    public function AddDatareferensi(Request $request)
    {
        $ValidasiDataReferensi = $request->validate([
            'referensi_id' => 'required',
            'deskripsi' => 'required',
        ]);
        $ValidasiDataReferensi['status'] = 1;
        DataReferensi::create($ValidasiDataReferensi);
        if($ValidasiDataReferensi){
            Alert::Success('Sukses');
        }
        return back();
    }
    public function faskes()
    {
        return view('PageDashboardRs.MasterData.Faskes1.Faskes',[
            'faskes' => faskes::all()
        ]);
    }
    public function AddFaskes(Request $request)
    {
        $ValidasiAddFaskes = $request->validate([
            'nofaskes' => 'required',
            'nofaskesbpjs'=> 'required',
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        $ValidasiAddFaskes['status'] = 1;
        faskes::create($ValidasiAddFaskes);
        if($ValidasiAddFaskes){
            Alert::Success('Sukses');
        }
        return back();
    }
}
