<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\PercobaanHasGejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();

        return view('pages.diagnosa', compact('gejalas'));
    }

    public function store(Request $request)
    {
        $gejala_keys = array_keys($request->gejala);
        $get_gejala = PercobaanHasGejala::query()->whereIn('kode_gejala', $gejala_keys)->get()->groupBy('kode_percobaan');
        // $verifiction = DB::select("SELECT kode_percobaan, count(kode_gejala) as has_gejala FROM percobaan_has_gejalas GROUP BY kode_percobaan");
        // $kode_percobaan = null;
        $key_percobaan = null;
        $tmp = 0;

        foreach ($get_gejala as $key => $gejala) {
            if ($tmp < count($gejala)) {
                $tmp = count($gejala);
                $key_percobaan = $key;
            }
        }

        if (!is_null($key_percobaan)) {
            Diagnosa::create([
                'user_id' => auth()->check() ? auth()->id() : '0',
                'kode_percobaan' => $key_percobaan,
            ]);
        }

        return back();
    }
}
