<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PesertaController extends Controller
{



    public function index()
        {
            $data['peserta'] =  Peserta::get();
            return view('peserta.index', $data);
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('peserta.tambah');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $validated = $request->validate([
                'nama' => 'required',
                'usia' => 'required', 'numeric',
                'jenis_kelamin' => 'required'
            ]);
    
            $data = [
                'nama' => $request->input('nama'),
                'usia' => $request->input('usia'),
                'jenis_kelamin' => $request->input('jenis_kelamin')
            ];

            Peserta::insert($data);
            foreach($data as $key => $item) {
                session()->flash($key, $item);
            }
            return redirect(url('peserta'))->with('pesan', 'Data Peserta Berhasil Ditambahkan');
        }


    public function edit(string $id)
    {
        $data['peserta'] = Peserta::where('id', $id)->firstOr(function () {});

        if (empty($data['peserta'])) {
            return redirect('peserta');
        } else {
            return view('peserta.ubah', $data);
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'usia' => 'required', 'numeric',
            'jenis_kelamin' => 'required'
        ]);

        $input = [
            'nama' => $request->input('nama'),
                'usia' => $request->input('usia'),
                'jenis_kelamin' => $request->input('jenis_kelamin')
        ];

        $data['peserta'] = Peserta::where('id', request()->input('id'))->firstOr(function () {});

        if (empty($data['peserta'])) {
            return redirect('peserta');
        } else {
            $data['peserta']->nama = $request->input('nama');
            $data['peserta']->usia = $request->input('usia');
            $data['peserta']->jenis_kelamin = $request->input('jenis_kelamin');
            $data['peserta']->save();
            return redirect(url('peserta'))->with('pesan', 'Data Peserta Berhasil Diubah');
        }
    }

    public function hapus(string $id)
    {
        $data['peserta'] = Peserta::where('id', $id)->firstOr(function () {});

        if (empty($data['peserta'])) {
            return redirect('peserta');
        } else {
            return view('peserta.hapus', $data);
        }
    }

    public function destroy(Request $request)
    {
        if ($request->input('id')) {
            $data['peserta'] = Peserta::where('id', $request->input('id'))->firstOr(function () {});
            if (!empty($data['peserta'])) {
                $data['peserta']->delete();
                return redirect('peserta')->with('pesan', 'Data Peserta Berhasil Dihapus');
            } else {
                return redirect('peserta')->with('gagal', 'Terjadi Kesalahan Saat Menghapus Data');
            }
        } else {
            return redirect('peserta');
        }
    }

    




}
