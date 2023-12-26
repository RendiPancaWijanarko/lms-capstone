<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table ='kelas';
    protected $fillable = [
        'name',
        'description',
    ];
}
