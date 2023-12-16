<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedule";
    protected $fillable = [
        'class_name',
        'date_schedule',
        'description',
        'meet_link',
    ];
}
