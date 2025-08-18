<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    protected $fillable = [
        'name',
        'cover',
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
