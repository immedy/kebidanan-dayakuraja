<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferensiController extends Controller
{
    public function Referensi()
    {
        return view('PageDashboardRs.MasterData.Referensi.DatarRefernsi');
    }
}
