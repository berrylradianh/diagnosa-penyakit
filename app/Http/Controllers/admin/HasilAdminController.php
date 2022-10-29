<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use Illuminate\Http\Request;

class HasilAdminController extends Controller
{
    public function index()
    {
        $title = 'Hasil | Diagnosa Penyakit';
        $diagnosas = Diagnosa::query()
            ->with([
                'user',
                'percobaan' => [
                    'penyakit'
                ]
            ])
            ->latest()
            ->get();

        return view('pages.admin.hasil', compact('title', 'diagnosas'));
    }
}
