<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;
use App\Models\DataReferensi;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('PageDashboard.Pasien.CariPasien', [
            "patiens" => Pasien::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('PageDashboard.Pasien.TambahPasien', [
            "provincies" => Wilayah::selectWilayah(1),
            "StatusKawin" => DataReferensi::where('referensi_id',9)->get(),
            "Agama" => DataReferensi::where('referensi_id',13)->get(),
            "Pendidikan" => DataReferensi::where('referensi_id',10)->get(),
            "Pekerjaan" => DataReferensi::where('referensi_id',11)->get(),
            "Goldar" => DataReferensi::where('referensi_id',12)->get(),
            "identitas" => DataReferensi::where('referensi_id', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $request['provinsi'] = $request['provinsi1'];
        $request['kabupaten'] = $request['kota1'];
        $request['kecamatan'] = $request['kecamatan1'];
        $request['kelurahan'] = $request['desa1'];
        $validatedData = $request->validate([
            'noidentitas' => 'nullable',
            'jenis_identitas' => 'nullable',
            'norm' => 'nullable',
            'namalengkap' => 'required',
            'namapanggilan' => 'nullable',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'nullable',
            'perkawinan' => 'nullable',
            'pendidikan' => 'nullable',
            'pekerjaan' => 'nullable',
            'goldar' => 'nullable',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rt' => 'nullable',
            'rw' => 'nullable',
            'kodepos' => 'nullable',
        ]);
        $validatedData['pegawai_id'] = Auth::user()->pegawai->id;
        $validatedData['faskespegawai'] = Auth::user()->pegawai->faskes_id;
        $validatedData['status'] = 1;
        Pasien::create($validatedData);
        return redirect()->route('caripasien')->with('success', 'Pasien Telah terinput');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien, $id)
    {
        return view('PageDashboard.Pasien.DetailPasien.EditPasien',[
            'pasien' => Pasien::findOrFail($id),
            "provincies" => Wilayah::selectWilayah(1),
            "StatusKawin" => DataReferensi::where('referensi_id',9)->get(),
            "Agama" => DataReferensi::where('referensi_id',13)->get(),
            "Pendidikan" => DataReferensi::where('referensi_id',10)->get(),
            "Pekerjaan" => DataReferensi::where('referensi_id',11)->get(),
            "Goldar" => DataReferensi::where('referensi_id',12)->get(),
            "identitas" => DataReferensi::where('referensi_id', 1)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien, $id)
    {
        //
        return view('PageDashboard.Pasien.DetailPasien.EditPasien',[
            'pasien' => Pasien::findOrFail($id),
            "provincies" => Wilayah::selectWilayah(1),
            "StatusKawin" => DataReferensi::where('referensi_id',9)->get(),
            "Agama" => DataReferensi::where('referensi_id',13)->get(),
            "Pendidikan" => DataReferensi::where('referensi_id',10)->get(),
            "Pekerjaan" => DataReferensi::where('referensi_id',11)->get(),
            "Goldar" => DataReferensi::where('referensi_id',12)->get(),
            "identitas" => DataReferensi::where('referensi_id', 1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $pasien = Pasien::findOrFail($id);
        $request['provinsi'] = $request['provinsi1'];
        $request['kabupaten'] = $request['kota1'];
        $request['kecamatan'] = $request['kecamatan1'];
        $request['kelurahan'] = $request['desa1'];
        $validatedData = $request->validate([
            'noidentitas' => 'nullable',
            'jenis_identitas' => 'nullable',
            'norm' => 'nullable',
            'namalengkap' => 'required',
            'namapanggilan' => 'nullable',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'nullable',
            'perkawinan' => 'nullable',
            'pendidikan' => 'nullable',
            'pekerjaan' => 'nullable',
            'goldar' => 'nullable',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rt' => 'nullable',
            'rw' => 'nullable',
            'kodepos' => 'nullable',
        ]);
        $validatedData['pegawai_id'] = Auth::user()->pegawai->id;
        $validatedData['faskespegawai'] = Auth::user()->pegawai->faskes_id;
        $validatedData['status'] = $pasien->status;
        // Pasien::update($validatedData);
        $pasien->update($validatedData);
        return redirect()->route('caripasien')->with('success', 'Pasien Telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
    }

    public function getCity(Request $request)
    {
        $kota = Wilayah::selectCity(2, $request->id);
        if (count($kota) > 0)
        {
            return response()->json($kota);
        }
    }

    public function getCounty(Request $request)
    {
        # code...
        $kecamatan = Wilayah::selectCounty(3, $request->id);
        if (count($kecamatan) > 0) {
            # code...
            return response()->json($kecamatan);
        }
    }

    public function getVillage(Request $request)
    {
        # code...
        $village = Wilayah::selectVillage(4, $request->id);
        if (count($village) > 0) {
            # code...
            return response()->json($village);
        }
    }
}
