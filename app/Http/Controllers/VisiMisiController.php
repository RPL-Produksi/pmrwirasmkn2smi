<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data['vm'] = VisiMisi::latest()->first();

        return view('landing.visi-misi.index')->with($data);
    }
}
