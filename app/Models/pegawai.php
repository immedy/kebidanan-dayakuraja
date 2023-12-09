<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function oleh(): BelongsTo
    {
        return $this->belongsTo(Rujukan::class,'id','oleh');
    }
}
