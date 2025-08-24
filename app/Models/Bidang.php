<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    protected $fillable = [
        'name',
        'cover',
        'description',
        'slug'
    ];

    public function anggota()
    {
        return $this->hasMany(BidangAnggota::class);
    }

    public function attachments()
    {
        return $this->hasMany(BidangAttachment::class);
    }
}
