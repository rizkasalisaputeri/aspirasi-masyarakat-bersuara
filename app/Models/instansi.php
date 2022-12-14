<?php

namespace App\Models;

use App\Models\home;
use App\Models\post;
use App\Models\Pelaporan;
use App\Models\laporanSaya;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class instansi extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function laporansaya()
    {
        return $this->hasMany(laporanSaya::class);
    }

    public function Pelaporan()
    {
        return $this->hasMany(Pelaporan::class);
    }

}
