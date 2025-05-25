<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $fillable = ['tahun'];

    public $timestamps = false;

    public function purnawiras()
    {
        return $this->hasMany(Purnawira::class, 'periode_id');
    }
}
