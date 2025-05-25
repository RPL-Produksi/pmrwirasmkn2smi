<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PurnawiraController extends Controller
{
    public function index()
    {
        $data['periodes'] = Periode::orderBy('tahun', 'desc')
            ->withCount('purnawiras')
            ->get();

        return view('landing.purnawira.index')->with($data);
    }

    public function show($tahun)
    {
        $data['periode'] = Periode::where('tahun', $tahun)->first();
        $data['purnawiras'] = $data['periode']->purnawiras;

        return view('landing.purnawira.show')->with($data);
    }
}
