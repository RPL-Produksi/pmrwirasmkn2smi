<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'tanggal',
        'waktu',
        'tempat',
        'kategori'
    ];
}
