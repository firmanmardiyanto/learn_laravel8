<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotificationsController extends Controller
{
    public function index()
    {
        return view('notif.notifikasi');
    }

    public function success()
    {
        Session::flash('sukses', 'Ini notifikasi sukses');
        return redirect('pesan');
    }

    public function warning()
    {
        Session::flash('peringatan', 'Ini notifikasi PERINGATAN');
        return redirect('pesan');
    }

    public function failed()
    {
        Session::flash('gagal', 'Ini notifikasi GAGAL');
        return redirect('pesan');
    }
}
