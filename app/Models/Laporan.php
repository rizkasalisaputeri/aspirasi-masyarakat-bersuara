<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    public function kategori_laporan(){
        return $this->hasMany(kategori_laporans::class);
    }
}
