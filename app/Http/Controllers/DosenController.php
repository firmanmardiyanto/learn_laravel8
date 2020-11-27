<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = "Firman Mardiyanto";
        $pelajaran = ["Algoritma $ Pemograman", "Kalkulus", "Pemograman WEB"];
        return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
