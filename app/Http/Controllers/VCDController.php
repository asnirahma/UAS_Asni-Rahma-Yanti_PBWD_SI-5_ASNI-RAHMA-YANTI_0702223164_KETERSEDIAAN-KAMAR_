<?php

namespace App\Http\Controllers;

use App\Models\VCD;
use Illuminate\Http\Request;

class VCDController extends Controller
{
    public function index()
    {
        return view('vcds.index', compact('vcds'));
    }

    public function create()
    {
        return view('vcds.create');
    }

    public function store(Request $request)
    {
        $vcd = new VCD();
        $vcd->judul = $request->input('judul');
        $vcd->aktor = $request->input('aktor');
        $vcd->sutradara = $request->input('sutradara');
        $vcd->publisher = $request->input('publisher');
        $vcd->kategori = $request->input('kategori');
        $vcd->stok = $request->input('stok');
        $vcd->save();
        return redirect()->route('vcd.index');
    }

    public function show($id)
    {
        $vcd = VCD::find($id);
        return view('vcd.show', compact('vcd'));
    }

    public function edit($id)
    {
        $vcd = VCD::find($id);
        return view('vcd.edit', compact('vcd'));
    }

    public function update(Request $request, $id)
    {
        $vcd = VCD::find($id);
        $vcd->judul = $request->input('judul');
        $vcd->aktor = $request->input('aktor');
        $vcd->sutradara = $request->input('sutradara');
        $vcd->publisher = $request->input('publisher');
        $vcd->kategori = $request->input('kategori');
        $vcd->stok = $request->input('stok');
        $vcd->save();
        return redirect()->route('vcd.index');
    }

    public function destroy($id)
    {
        $vcd = VCD::find($id);
        $vcd->delete();
        return redirect()->route('vcd.index');
    }
}
