<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use SoftDeletes;
    protected $table = "gurus";
    protected $dates = ['deleted_at'];
}
