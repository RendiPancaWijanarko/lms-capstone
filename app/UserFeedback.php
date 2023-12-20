<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFeedback extends Model
{
    use HasFactory;
    protected $table = "user_feedbacks";
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'subject',
        'message',
    ];
}
