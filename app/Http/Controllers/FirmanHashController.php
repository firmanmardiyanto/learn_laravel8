<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FirmanHashController extends Controller
{
    public function hash()
    {
        $hash_password = Hash::make('it5upp0rt');
        echo $hash_password;
    }
}
