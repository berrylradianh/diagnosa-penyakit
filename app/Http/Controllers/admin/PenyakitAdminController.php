<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function destroy($id)
    {
        $penyakits = Penyakit::where('id', $id)->firstorfail()->delete();
        return redirect()->route('penyakit-admin.index');
    }

    public function edit($id)
    {
        $penyakits = Penyakit::find($id);
        $title = 'Penyakit | Diagnosa Penyakit';
        return view('pages.admin.edit-penyakit', compact('penyakits', 'title'));
    }

    public function update(Request $request, $id)
    {
        $penyakits = Penyakit::find($id);
        $penyakits->nama = $request->input('nama');
        $penyakits->keterangan = $request->input('keterangan');
        $penyakits->solusi = $request->input('solusi');
        $penyakits->update();
        return redirect()->route('penyakit-admin.index');
    }

    public function create()
    {
        $title = 'Penyakit | Diagnosa Penyakit';
        return view('pages.admin.create-penyakit', compact('title'));
    }

    public function store(Penyakit $request)
    {
        Penyakit::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'solusi' => $request->solusi
        ]);
    }
}
