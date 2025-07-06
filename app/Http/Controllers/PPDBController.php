<?php

namespace App\Http\Controllers;

use App\Models\PPDB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PPDBController extends Controller
{
    public function index()
    {
        return view('ppdb');
    }

    public function store(Request $request)
    {
        $validated  = $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:ppdb,nisn',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('ppdb', 'public');
        }

        $created = PPDB::create($validated);

        return redirect()->route('ppdb.index')
            ->with('success', 'Pendaftaran berhasil dikirim!')
            ->with('ppdb_id', $created->id);
    }
    public function download($id)
    {
        $ppdb = PPDB::findOrFail($id);

        $pdf = Pdf::loadView('ppdb.pdf', compact('ppdb'))->setPaper('A4', 'portrait');
        return $pdf->download('lembar-pendaftaran-' . $ppdb->nama . '.pdf');
    }

    public function printFromAdmin($id)
    {
        $ppdb = PPDB::findOrFail($id);
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('ppdb.pdf', compact('ppdb'))->setPaper('A4');
        return $pdf->stream('lembar-pendaftaran-' . $ppdb->nama . '.pdf');
    }
}
