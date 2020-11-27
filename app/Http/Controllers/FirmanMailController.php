<?php

namespace App\Http\Controllers;

use App\Mail\FirmanMardiyantoEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FirmanMailController extends Controller
{
   public function index()
   {
       Mail::to("testing@firman.com")->send(new FirmanMardiyantoEmail());

       return "Email telah dikirimkan";
   }
}
