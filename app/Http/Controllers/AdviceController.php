<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAdviceRequest;
use App\Http\Requests\UpdateAdviceRequest;
use App\Models\Rujukan;
use Illuminate\Support\Facades\Crypt;

class AdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $id = Crypt::decryptString($request->input('filter'));
        return view('PageDashboard.Pasien.DetailPasien.AdviceDokter',[
            'advices' => Advice::where('rujukan_id', '=', $id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($id);
        // dd($request->input('filter'));
        $id = Crypt::decryptString($request->input('filter'));
        // dd($request['advicedokter']);
        $request['rujukan_id'] = $id;
        $request['pegawai_id'] = auth()->user()->pegawai->id;
        $validateData = $request->validate([
            'rujukan_id' => 'required',
            'advicedokter' => 'required',
            'pegawai_id' => 'required',
        ]);
        Advice::create($validateData);
        return redirect()->route('DetailRujukan', ['filter' => Crypt::encryptString($id)])->with('success', 'Data advice dokter sudah berhasil diinput!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advice $advice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advice $advice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdviceRequest $request, Advice $advice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advice $advice)
    {
        //
    }
}
