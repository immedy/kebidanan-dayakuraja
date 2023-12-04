<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeSelectWilayah($query, $jenis)
    {
        # code...
        // $query = Wilayah::where('JENIS','=',$jenis);
        // // return $query;
        return $query->where('JENIS','=',$jenis)
        ->orderBy('DESKRIPSI', 'asc')
        ->get();
    }

    public function scopeSelectCity($query, $jenis, $id)
    {
        $id = $id;
        return $query->where('id', 'LIKE', "$id%" )->where('JENIS', '=', $jenis)
                        ->orderBy('DESKRIPSI', 'asc')
                        ->get();
    }

    public function scopeSelectCounty($query, $jenis, $id)
    {
        return $query->where('JENIS', '=', $jenis)
                        ->where('id', 'like', $id.'%')
                        ->orderBy('DESKRIPSI', 'asc')
                        ->get();
    }

    public function scopeSelectVillage($query, $jenis, $id)
    {
        return $query->where('JENIS', '=', $jenis)
                        ->where('id', 'like', $id.'%')
                        ->orderBy('DESKRIPSI', 'asc')
                        ->get();
    }
}
