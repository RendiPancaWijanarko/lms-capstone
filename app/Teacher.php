<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'category_id'
    ];

    /**
     * Get the category associated with the teacher.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
