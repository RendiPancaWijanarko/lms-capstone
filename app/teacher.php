<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $table = "teacher";
    protected $fillable = [
        'nama',
<<<<<<< HEAD
        'email',    
        'phone',   
        'category',
        'deskripsi',
=======
        // 'deskripsi',
        'email',
        'no_telepon',
        'kategori',
>>>>>>> 5835c5a5c12aaec61fa242186a15d7afb8bc6308
    ];
}
 