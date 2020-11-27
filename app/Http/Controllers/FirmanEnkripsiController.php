<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FirmanEnkripsiController extends Controller
{
    public function enkripsi()
    {
        $encrypted = Crypt::encryptString("Belajar Laravel Dalam Semalam");
        $decrypted = Crypt::decryptString($encrypted);

        echo "Hasil Enkripsi : " . $encrypted;
        echo "<br/>";
        echo "<br/>";
        echo "Hasil Dekripsi : " . $decrypted;
    }

    public function data()
    {

        $parameter = [
            'nama' => 'Diki Alfarabi Hadi',
            'pekerjaan' => 'Programmer',
        ];
        $enkripsi = Crypt::encrypt($parameter);
        echo "<a href='/data/" . $enkripsi . "'>Klik</a>";
    }

    public function dataProses($data)
    {
        $data = Crypt::decrypt($data);

        echo "Nama : " . $data['nama'];
        echo "<br/>";
        echo "Pekerjaan : " . $data['pekerjaan'];
    }
}
