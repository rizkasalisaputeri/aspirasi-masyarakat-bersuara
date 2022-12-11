<?php

namespace App\Models;

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
    /**
     * Get the kategori_laporan that owns the laporanSaya
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori_laporan(): BelongsTo
    {
        return $this->belongsTo(kategori_laporan::class, 'kategori_id');
    }
}
