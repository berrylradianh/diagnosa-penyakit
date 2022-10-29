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

    public function destroy($id)
    {
        $gejalas = Gejala::where('id', $id)->firstorfail()->delete();
        return redirect()->route('gejala-admin.index');
    }

    public function edit($id)
    {
        $gejalas = Gejala::find($id);
        $title = 'Gejala | Diagnosa Penyakit';
        return view('pages.admin.edit-gejala', compact('gejalas', 'title'));
    }

    public function update(Request $request, $id)
    {
        $gejalas = Gejala::find($id);
        $gejalas->keterangan = $request->input('keterangan');
        $gejalas->update();
        return redirect()->route('gejala-admin.index');
    }
}
