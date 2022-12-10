<?php

namespace App\Models;
use App\Models\instansi;
use App\Models\kategori_laporan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class laporanSaya extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // public function kategori_laporan()
    // {
    // return $this->belongsTo(kategori_laporan::class,'ka');
    // }
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
