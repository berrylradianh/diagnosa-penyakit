<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitUserController extends Controller
{
    //
    public function index()
    {
        $title = 'Penyakit | Diagnosa Penyakit';
        $penyakits = Penyakit::all();

        return view('pages.user.penyakit', compact('title', 'penyakits'));
    }

    public function show(Penyakit $penyakits)
    {
        $title = 'Penyakit | Diagnosa Penyakit';
        return view('pages.user.view-penyakit', compact('penyakits', 'title'));
    }
}
