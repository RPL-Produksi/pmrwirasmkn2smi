<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purnawira extends Model
{
    protected $fillable = ['name', 'jabatan', 'quotes', 'image', 'periode_id'];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
}
