<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techers_2 extends Model
{
    protected $table = "teacher";
    protected $fillable = [
        'nama',
        'email',    
        'phone',   
        'category',
        'deskripsi',
    ];
}
