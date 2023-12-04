<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function faskes()
    {
        return $this->belongsTo(faskes::class);
    }
    public function user()
    {
        return $this->hasOne(User::class,'pegawai_id','id');
    }
}
