<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaAdminController extends Controller
{
    public function index()
    {
        $title = 'Gejala | Diagnosa Penyakit';
        $gejalas = Gejala::all();

        return view('pages.admin.gejala', compact('title', 'gejalas'));
    }
}
