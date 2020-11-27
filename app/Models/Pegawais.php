<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawais extends Model
{
    protected $table = "pegawais";
    protected $fillable = ['nama','alamat'];
}
