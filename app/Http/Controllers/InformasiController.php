<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $data['pengumuman'] = Pengumuman::latest()->get();

        return view('landing.informasi.index')->with($data);
    }
}
