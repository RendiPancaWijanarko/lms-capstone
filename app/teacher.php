<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $table = "teacher";
    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}
 