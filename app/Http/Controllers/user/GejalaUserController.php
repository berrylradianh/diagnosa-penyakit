<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaUserController extends Controller
{
    //
    public function index()
    {
        $title = 'Gejala | Diagnosa Penyakit';
        $gejalas = Gejala::all();

        return view('pages.user.gejala', compact('title', 'gejalas'));
    }
}
