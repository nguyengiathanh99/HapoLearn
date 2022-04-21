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
        return $this->hasMany(Documents::class, 'lesson_id');
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function scopeSearchLessons($query, $data, $id)
    {
        $query->where('course_id', $id)->orderby('created_at', config('course.filter.asc'));
        if (isset($data['keyword'])) {
            $query->where('name', 'LIKE', '%' . $data['keyword'] . '%');
        }
        return $query;
    }
}
