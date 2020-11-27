<?php

namespace App\Http\Controllers;

use App\Models\Pegawais;
use Illuminate\Http\Request;

class PegawaisController extends Controller
{
    public function index()
    {
        $pegawais = Pegawais::paginate(10);

        return view('pegawais.pegawais', ['pegawais' => $pegawais]);
    }

    public function tambah()
    {
        return view('pegawais.pegawais_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawais::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawais');
    }

    public function edit($id)
    {
        $pegawais = Pegawais::find($id);
        return view('pegawais.pegawais_edit', ['pegawais' => $pegawais]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $pegawais = Pegawais::find($id);
        $pegawais->nama = $request->nama;
        $pegawais->alamat = $request->alamat;
        $pegawais->save();
        return redirect('/pegawais');
    }

    public function delete($id)
    {
        $pegawais = Pegawais::find($id);
        $pegawais->delete();
        return redirect()->back();
    }
}
