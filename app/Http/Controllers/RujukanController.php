<?php

namespace App\Http\Controllers;

use App\Models\Rujukan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRujukanRequest;
use App\Http\Requests\UpdateRujukanRequest;
use App\Models\DataReferensi;
use App\Models\Pasien;

class RujukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PageDashboard.Pasien.Halamanutama',[
            'pasien' =>Rujukan::all()
        ]);
    }
    
    public function index2()
    {
        return view('PageDashboardRs.PasienRs.PasienRs',[
            'pasien' =>Rujukan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        // dd($id);
        return view('PageDashboard.Pasien.DaftarPasien',[
            'pasien' => Pasien::findOrFail($id),
            'jaminan' => DataReferensi::where('referensi_id', 2)->get(),
            'indikasi' => DataReferensi::where('referensi_id', 4)->get(),
            'KeadaanUmum' => DataReferensi::where('referensi_id',5)->get(),
            'ketuban' => DataReferensi::where('referensi_id', 6)->get(),
            'warna' => DataReferensi::where('referensi_id', 7)->get(),
            'kepala' => DataReferensi::where('referensi_id', 8)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRujukanRequest $request, $id)
    {
        //
        $request['pasien_id'] = $id;
        $validateData = $request->validate([
            'pasien_id' => 'required',
            'tanggaljam' => 'required',
            'jaminan' => 'nullable',
            'nokartu' => 'nullable',
            'hpht' => 'nullable',
            'gravida' => 'nullable',
            'partus' => 'nullable',
            'abortus' => 'nullable',
            'keluhan' => 'nullable',
            'pervaginambbmax' => 'nullable',
            'indikasisc' => 'nullable',
            'tahunsc' => 'nullable',
            'keadaanumum' => 'nullable',
            'td' => 'nullable',
            'nadi' => 'nullable',
            'suhu' => 'nullable',
            'his' => 'nullable',
            'durasi' => 'nullable',
            'djj' => 'nullable',
            'tfu' => 'nullable',
            'lingkarpinggang' => 'nullable',
            'tbj' => 'nullable',
            'pembukaan' => 'nullable',
            'ketuban' => 'nullable',
            'warnaketuban' => 'nullable',
            'bagianterdepan' => 'nullable',
            'kepala' => 'nullable',
            'diagnosa' => 'nullable',
            'alasanmerujuk' => 'nullable',
        ]);
        $validateData['oleh'] = auth()->user()->pegawai->id;
        $validateData['faskes_id'] = auth()->user()->pegawai->faskes_id;
        $validateData['status'] = 0;
        Rujukan::create($validateData);
        return redirect()->route('halamanutama')->with('success', 'Data rujukan sudah terinput!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       return view('PageDashboardRs.PasienRs.DetailPasien',[
        'Pasien' => Rujukan::findOrFail($id)
       ]);
    }

    public function DetailRujukan($id)
    {
        return view('PageDashboard.Pasien.DetailPasien.EditPasienRujukan',[
            'Pasien' => Rujukan::findOrFail($id),
            'jaminan' => DataReferensi::where('referensi_id', 2)->get(),
            'indikasi' => DataReferensi::where('referensi_id', 4)->get(),
            'KeadaanUmum' => DataReferensi::where('referensi_id',5)->get(),
            'ketuban' => DataReferensi::where('referensi_id', 6)->get(),
            'warna' => DataReferensi::where('referensi_id', 7)->get(),
            'kepala' => DataReferensi::where('referensi_id', 8)->get()  
        ]);
    }
    
    public function AdviceDokter()
    {
        return view('PageDashboard.Pasien.DetailPasien.AdviceDokter',[
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rujukan $rujukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRujukanRequest $request, Rujukan $rujukan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rujukan $rujukan)
    {
        //
    }
}
