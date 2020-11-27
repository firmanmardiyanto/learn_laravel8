<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlingController extends Controller
{
    public function index($nama)
    {
        if ($nama == "403") {
            return abort(403, 'Anda tidak punya akses karena anda memang '. $nama);
        } elseif ($nama == "firman") {
            return "Halo, " . $nama;
        } else {
            return abort(404);
        }
    }
}
