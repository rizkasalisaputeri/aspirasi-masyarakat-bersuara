<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori_laporan()
    {
        return $this->belongsTo(kategori_laporan::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
