<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'softdelete',
    ];

    public function users() {
        return $this->belongsToMany(User::class,'user_courses');
    }

    public function teachers() {
        return $this->belongsToMany(User::class,'teacher_courses');
    }

    public function reviews() {
        return $this->belongsToMany(User::class,'review');
    }

    public function tags() {
        return $this->belongsToMany(Tags::class,'course_tags');
    }
}
