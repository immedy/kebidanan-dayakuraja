<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rujukan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->tanggaljam)->isoFormat('dddd, D MMMM Y HH:mm:ss');
    }
    public function pasien()
    {
        return $this->belongsTo(pasien::class,'pasien_id','id');
    }
     public function faskes()
     {
        return $this->belongsTo(faskes::class,'faskes_id','id');
     }
    public function Oleh(): BelongsTo
    {
        return $this->belongsTo(pegawai::class,'oleh');
    }
}
