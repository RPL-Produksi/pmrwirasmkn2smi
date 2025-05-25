<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    protected $fillable = [
        'nama_ketua',
        'periode',
        'visi',
        'misi',
        'image',
    ];

    protected $casts = [
        'misi' => 'array',
    ];
}
