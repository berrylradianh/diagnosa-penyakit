<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use Illuminate\Http\Request;

class HasilUserController extends Controller
{
    //

    public function index()
    {
        $title = 'Hasil | Diagnosa Penyakit';
        $diagnosas = Diagnosa::query()
            ->with('user', 'percobaan')
            ->latest()
            ->get();

        return view('pages.user.hasil', compact('title', 'diagnosas'));
    }
}
