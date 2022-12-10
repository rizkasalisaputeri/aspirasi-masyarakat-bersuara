<?php

namespace App\Models;

use App\Models\Pelaporan;
use App\Models\laporanSaya;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori_laporan extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function pelaporan()
    {
        return this->hasMany(Pelaporan::class);
    }
    public function laporanSaya()
    {
        return this->hasMany(laporanSaya::class);
    }
}

