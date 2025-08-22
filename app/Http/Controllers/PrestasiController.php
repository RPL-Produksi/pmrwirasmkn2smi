<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $data['prestasis'] = Prestasi::with('attachments')->get();

        return view('landing.prestasi.index')->with($data);
    }

    public function show($slug)
    {
        $data['prestasi'] = Prestasi::where('slug', $slug)->with('attachments')->first();
        return view('landing.prestasi.show')->with($data);
    }
}
