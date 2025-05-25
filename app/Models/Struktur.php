<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $fillable = [
        'name',
        'unit',
        'divisi',
        'holder_name',
    ];

    public function getUnitDisplayAttribute()
    {
        return $this->unit && trim($this->unit) !== '' ? $this->unit : 'Tidak ada';
    }
}
