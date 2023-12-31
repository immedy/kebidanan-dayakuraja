<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataReferensi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function referensi()
    {
        return $this->belongsTo(referensi::class,'referensi_id','id');
    }
}
