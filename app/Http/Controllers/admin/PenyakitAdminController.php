<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitAdminController extends Controller
{
    //
    public function index()
    {
        $title = 'Penyakit | Diagnosa Penyakit';
        $penyakits = Penyakit::all();

        return view('pages.admin.penyakit', compact('title', 'penyakits'));
    }

    public function show(Penyakit $penyakits)
    {
        $title = 'Penyakit | Diagnosa Penyakit';
        return view('pages.admin.view-penyakit', compact('penyakits', 'title'));
    }
}
