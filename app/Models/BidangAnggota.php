<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BidangAnggota extends Model
{
    protected $fillable = ['name', 'role', 'quotes', 'image', 'bidang_id'];
}
