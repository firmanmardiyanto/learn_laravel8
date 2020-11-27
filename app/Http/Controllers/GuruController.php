<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::paginate(10);
        return view('guru.guru', ['guru' => $guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect()->back();
    }

    public function trash()
    {
        $guru = Guru::onlyTrashed()->paginate(10);
        return view('guru.guru_trash', ['guru' => $guru]);
    }

    public function kembalikan($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->restore();
        return redirect()->back();
    }

    public function kembalikanSemua()
    {
        $guru = Guru::onlyTrashed();
        $guru->restore();

        return redirect()->back();
    }

    public function hapusPermanen($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->forceDelete();

        return redirect()->back();
    }

    public function hapusPermanenSemua()
    {
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();
        return redirect()->back();
    }
}
