<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use PDF;

class PekerjaController extends Controller
{
    public function index()
    {
    	$pegawai = Pekerja::all();
    	return view('pekerja',['pegawai'=>$pegawai]);
    }

    public function printPDF()
    {
    	$pegawai = Pekerja::all();
    	$pdf = PDF::loadview('pekerja_pdf',['pegawai'=>$pegawai]);
        //return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }
}
