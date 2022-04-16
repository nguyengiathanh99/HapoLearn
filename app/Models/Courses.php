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
        if (isset($data['key']) && !is_null($data['key'])) {
            $query->where('name', 'LIKE', '%' . $data['key'] . '%')
                ->orWhere('description', 'LIKE', '%' . $data['key'] . '%');
        }

        if (isset($data['filter']) && !is_null($data['filter'])) {
            $query->orderBy('id', $data['filter']);
        }

        if (isset($data['search_teacher']) && !is_null($data['search_teacher'])) {
            $searchTeacher = $data['search_teacher'];
            $query->whereHas('teachers', function ($subQuery) use ($searchTeacher) {
                $subQuery->where('user_id', $searchTeacher);
            });
        }

        if (isset($data['search_tag']) && !is_null($data['search_tag'])) {
            $searchTag = $data['search_tag'];
            $query->whereHas('tags', function ($subQuery) use ($searchTag) {
                $subQuery->where('tag_id', $searchTag);
            });
        }

        if (isset($data['search-learner']) && !is_null($data['search-learner'])) {
            $query->withCount('users')->orderBy('users_count', $data['search-learner']);
        }

        if (isset($data['search-time']) && !is_null($data['search-time'])) {
            $query->withSum('lessons', 'time')->orderBy('lessons_sum_time', $data['search-time']);
        }

        if (isset($data['search-lesson']) && !is_null($data['search-lesson'])) {
            $query->withCount('lessons')->orderBy('lessons_count', $data['search-lesson']);
        }
        return $query;
    }
}
