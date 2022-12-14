<?php

namespace App\Models;

use App\Models\User;
use App\Models\instansi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelaporan extends Model
{
    protected $guarded = ['id'];

    public function instansi()
    {
        return $this->belongsTo(instansi::class);
    }

    public function kategori_laporan(): BelongsTo
    {
        return $this->belongsTo(kategori_laporan::class, 'kategori_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
