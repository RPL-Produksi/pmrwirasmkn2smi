<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiAttachment extends Model
{
    protected $fillable = [
        'prestasi_id',
        'storage_path',
    ];

    public function prestasi()
    {
        return $this->belongsTo(Prestasi::class);
    }

    public $timestamps = false;
}
