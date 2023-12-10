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
}
