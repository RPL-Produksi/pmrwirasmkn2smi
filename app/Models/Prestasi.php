<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $fillable = [
        'event',
        'description',
    ];

    public function attachments()
    {
        return $this->hasMany(PrestasiAttachment::class);
    }
}
