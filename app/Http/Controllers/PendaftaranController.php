<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Peserta;
use App\Models\Jarak;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{

public function index(Request $request)
{
    $sortOrder = $request->query('sort', 'asc');
    
    $pendaftaran = Pendaftaran::with(['peserta', 'jarak'])
                               ->join('jarak', 'pendaftaran.jarak_id', '=', 'jarak.id')
                               ->orderBy('jarak.jarak', $sortOrder)
                               ->select('pendaftaran.*')
                               ->get();

    return view('pendaftaran.index', compact('pendaftaran', 'sortOrder'));
}





    public function create()
    {
        $peserta = Peserta::all();
        $jarak = Jarak::all();

        return view('pendaftaran.create', compact('peserta', 'jarak'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'peserta_id' => 'required|exists:peserta,id',
            'jarak_id' => 'required|exists:jarak,id',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil.');
    }



    public function edit($id)
    {
        $pendaftaran = Pendaftaran::with(['peserta', 'jarak'])->findOrFail($id);

        $peserta = Peserta::all();
        $jarak = Jarak::all();

        return view('pendaftaran.edit', compact('pendaftaran', 'peserta', 'jarak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'peserta_id' => 'required|exists:peserta,id',
            'jarak_id' => 'required|exists:jarak,id',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);

        $pendaftaran->update([
            'peserta_id' => $request->input('peserta_id'),
            'jarak_id' => $request->input('jarak_id'),
        ]);

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus!');
    }
}
