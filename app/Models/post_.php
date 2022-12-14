<?php

namespace App\Models;

use App\Models\instansi;
use App\Models\AlurdanSyarat;
use App\Models\kategori_laporan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function instansi()
    {
        return $this->belongsTo(instansi::class);
    }

    public function kategori_laporan(): BelongsTo
    {
        return $this->belongsTo(kategori_laporan::class, 'kategori_id');
    }

    public function AlurdanSyarat(): BelongsTo
    {
        return $this->belongsTo(AlurdanSyarat::class, 'alurSyarat_id');
    }
}
