<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jarak;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JarakController extends Controller
{



    public function index()
    {
        $data['jarak'] =  Jarak::get();
        return view('jarak.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jarak.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jarak' => 'required|numeric',
            'level' => 'required'
        ]);

        $data = [
                'jarak' => $request->input('jarak'),
                'level' => $request->input('level'),
            ];

        Jarak::insert($data);
        foreach ($data as $key => $item) {
            session()->flash($key, $item);
        }
        return redirect(url('jarak'))->with('pesan', 'Data jarak Berhasil Ditambahkan');
    }


    public function edit(string $id)
    {
        $data['jarak'] = Jarak::where('id', $id)->firstOr(function () {});

        if (empty($data['jarak'])) {
            return redirect('jarak');
        } else {
            return view('jarak.ubah', $data);
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'jarak' => 'required|numeric',
            'level' => 'required'
        ]);

        $input = [
            'jarak' => 'required|numeric',
            'level' => 'required'
        ];

        $data['jarak'] = Jarak::where('id', request()->input('id'))->firstOr(function () {});

        if (empty($data['jarak'])) {
            return redirect('jarak');
        } else {
            $data['jarak']->jarak = $request->input('jarak');
            $data['jarak']->level = $request->input('level');
            $data['jarak']->save();
            return redirect(url('jarak'))->with('pesan', 'Data jarak Berhasil Diubah');
        }
    }

    public function hapus(string $id)
    {
        $data['jarak'] = Jarak::where('id', $id)->firstOr(function () {});

        if (empty($data['jarak'])) {
            return redirect('jarak');
        } else {
            return view('jarak.hapus', $data);
        }
    }

    public function destroy(Request $request)
    {
        if ($request->input('id')) {
            $data['jarak'] = Jarak::where('id', $request->input('id'))->firstOr(function () {});
            if (!empty($data['jarak'])) {
                $data['jarak']->delete();
                return redirect('jarak')->with('pesan', 'Data jarak Berhasil Dihapus');
            } else {
                return redirect('jarak')->with('gagal', 'Terjadi Kesalahan Saat Menghapus Data');
            }
        } else {
            return redirect('jarak');
        }
    }
}
