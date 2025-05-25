<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data['inti'] = Struktur::where('divisi', 'Inti')->get();

        $units = Struktur::where('divisi', 'Unit')->get()->groupBy('unit');

        $data['sortedUnits'] = collect($units)->sortKeysUsing(function ($a, $b) {
            preg_match('/Unit (\d+)/', $a, $matchA);
            preg_match('/Unit (\d+)/', $b, $matchB);

            $numA = isset($matchA[1]) ? (int) $matchA[1] : 999;
            $numB = isset($matchB[1]) ? (int) $matchB[1] : 999;

            return $numA <=> $numB;
        });

        return view('landing.profil.index')->with($data);
    }
}
