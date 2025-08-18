<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BidangAttachment extends Model
{
    protected $fillable = ['bidang_id', 'storage_path'];

    public $timestamps = false;
}
