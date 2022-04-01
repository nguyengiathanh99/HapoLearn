<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lessons extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'course_id',
        'name',
        'price',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_lessons', 'lesson_id', 'user_id');
    }

    public function documents()
    {
        return $this->hasMany(Documents::class);
    }
}
