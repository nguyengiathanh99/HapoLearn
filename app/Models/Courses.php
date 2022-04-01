<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_courses', 'course_id', 'user_id');
    }

    public function teacherCourses()
    {
        return $this->belongsToMany(User::class, 'teacher_courses', 'course_id', 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'course_tags', 'course_id', 'tag_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lessons::class);
    }
}
