<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlurdanSyarat extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function post()
    {
        return this->hasMany(post::class);
    }
}
