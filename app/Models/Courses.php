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

    public function teachers()
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
        return $this->hasMany(Lessons::class, 'course_id');
    }

    public function getLearnerCourseAttribute()
    {
        return $this->users()->count();
    }

    public function getLessonCourseAttribute()
    {
        return $this->lessons()->count();
    }

    public function getTimeCourseAttribute()
    {
        return $this->lessons()->sum('time');
    }

    public function scopeSearch($query, $data)
    {
        if (isset($data['keyword']) && !is_null($data['keyword'])) {
            $query->where('name', 'LIKE', '%' . $data['keyword'] . '%')
                ->orWhere('description', 'LIKE', '%' . $data['keyword'] . '%');
        }

        if (isset($data['created_time']) && !is_null($data['created_time'])) {
            $query->orderBy('id', $data['created_time']);
        }

        if (isset($data['search_teacher']) && !is_null($data['search_teacher'])) {
            $query->whereHas('teachers', function ($subQuery) use ($data) {
                $subQuery->where('user_id', $data['search_teacher']);
            });
        }

        if (isset($data['search_tag']) && !is_null($data['search_tag'])) {
            $query->whereHas('tags', function ($subQuery) use ($data) {
                $subQuery->where('tag_id', $data['search_tag']);
            });
        }

        if (isset($data['search_learner']) && !is_null($data['search_learner'])) {
            $query->withCount('users')->orderBy('users_count', $data['search_learner']);
        }

        if (isset($data['search_time']) && !is_null($data['search_time'])) {
            $query->withSum('lessons', 'time')->orderBy('lessons_sum_time', $data['search_time']);
        }

        if (isset($data['search_lesson']) && !is_null($data['search_lesson'])) {
            $query->withCount('lessons')->orderBy('lessons_count', $data['search_lesson']);
        }
        return $query;
    }
}
