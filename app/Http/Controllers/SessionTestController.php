<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionTestController extends Controller
{
    // menampilkan isi session
    public function showSession(Request $request)
    {
        if ($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } else {
            echo 'Tidak ada data dalam session.';
        }
    }

    // membuat session
    public function createSession(Request $request)
    {
        $request->session()->put('nama', 'Firman Mardiyanto');
        echo "Data telah ditambahkan ke session.";
    }

    // menghapus session
    public function destroySession(Request $request)
    {
        $request->session()->forget('nama');
        echo "Data telah dihapus dari session.";
    }
}
