<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    function index()
    {
        $data = prodi::orderBy('no', 'desc')->paginate();
        return view('prodi')->with('data', $data);
    }

    function create()
    {
        return view('create_prodi');
    }

    function store(Request $request)
    {

        $data = [
            'no' => $request->no,
            'id_prodi' => $request->id_prodi,
            'nama_prodi' => $request->nama_prodi,
            'himpunan_mahasiswa' => $request->himpunan_mahasiswa,
        ];
        prodi::create($data);
        return REDIRECT()->to('prodi')->with('success', 'Berhasil menambahkan data');
    }
}
