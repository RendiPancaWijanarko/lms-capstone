<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learning extends Model
{
    protected $table = "learning";
    protected $fillable = [
        'id_kelas',
        'learning_material',
        'description',
        'gdrive_link',
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
