<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->tanggal_lahir)->isoFormat('D MMMM Y');
    }
    
    public function FaskesPegawai()
    {
        return $this->belongsTo(faskes::class,'faskespegawai');
    }

    public function StatusKawin()
    {
        return $this->belongsTo(DataReferensi::class,'perkawinan');
    }
    public function Agama()
    {
        return $this->belongsTo(DataReferensi::class,'agama');
    }
    public function Pendidikan()
    {
        return $this->belongsTo(DataReferensi::class,'pendidikan');
    }
    public function Pekerjaan()
    {
        return $this->belongsTo(DataReferensi::class,'pekerjaan');
    }
    public function GolDar()
    {
        return $this->belongsTo(DataReferensi::class,'goldar');
    }
}
