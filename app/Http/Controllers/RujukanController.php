<?php

namespace App\Http\Controllers;

use App\Models\Rujukan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRujukanRequest;
use App\Http\Requests\UpdateRujukanRequest;
use App\Models\Pasien;

class RujukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        // dd($id);
        return view('PageDashboard.Pasien.DaftarPasien',[
            'pasien' => Pasien::findOrFail($id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRujukanRequest $request, $id)
    {
        //
        dd($id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('PageDashboard.Pasien.DaftarPasien',[
            'pasien' => Pasien::findOrFail($id)
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
