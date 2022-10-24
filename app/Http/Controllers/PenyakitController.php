<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    //

    public function index()
    {
        $penyakits = Penyakit::all();
        return view('pages.penyakit', compact('penyakits'));
    }

    public function show(Penyakit $penyakits)
    {
        return view('pages.penyakit-detail', compact('penyakits'));
    }
}
