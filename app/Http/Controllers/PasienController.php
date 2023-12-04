<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('PageDashboard.Pasien.CariPasien');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('PageDashboard.Pasien.TambahPasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePasienRequest $request, Pasien $pasien)
    {
        //
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
        $city = Wilayah::selectCity(2, $request->id);
        if (count($city) > 0)
        {
            return response()->json($city);
        }
    }

    public function getCounty(Request $request)
    {
        # code...
        $county = Wilayah::selectCounty(3, $request->id);
        if (count($county) > 0) {
            # code...
            return response()->json($county);
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
