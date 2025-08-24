<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
        $data['bidangs'] = Bidang::all();

        return view('landing.bidang.index')->with($data);
    }

    public function show($slug)
    {
        $data['bidang'] = Bidang::where('slug', $slug)->with('anggota')->first();

        return view('landing.bidang.show')->with($data);
    }

    public function dokumentasi($slug)
    {
        $data['bidang'] = Bidang::where('slug', $slug)->with('attachments')->first();

        return view('landing.bidang.dokumentasi')->with($data);
    }
}
