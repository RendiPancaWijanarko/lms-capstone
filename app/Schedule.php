<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedule";
    protected $fillable = [
        'id_kelas',
        'date_schedule',
        'description',
        'meet_link',
    ];
    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
