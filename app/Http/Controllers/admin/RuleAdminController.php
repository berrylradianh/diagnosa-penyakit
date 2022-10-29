<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use App\Models\Percobaan;
use Illuminate\Http\Request;

class RuleAdminController extends Controller
{
    public function index()
    {
        $title = 'Rule | Diagnosa Penyakit';
        $gejalas = Gejala::all();
        $percobaans = Percobaan::with('percobaan_has_gejalas', 'penyakit')->get();

        return view('pages.admin.rule', compact('title', 'gejalas', 'percobaans'));
    }

    public function destroy($id)
    {
        $percobaans = Percobaan::where('id', $id)->firstorfail()->delete();
        return redirect()->route('rule-admin.index');
    }

    public function edit($id)
    {
        $percobaans = Percobaan::find($id);
        $title = 'Rule | Diagnosa Penyakit';
        return view('pages.admin.edit-rule', compact('percobaans', 'title'));
    }

    public function update(Request $request, $id)
    {
        $percobaans = Percobaan::find($id)->with('percobaan_has_gejalas');
        $percobaans->keterangan = $request->input('keterangan');
        $percobaans->update();
        return redirect()->route('rule-admin.index');
    }
}
