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
        if (!is_null($data['key']) && isset($data['key'])) {
            $key = $data['key'];
            $query->where('name', 'LIKE', '%' . $key . '%')
                ->orWhere('description', 'LIKE', '%' . $key . '%');
        }

        if (!is_null($data['filter']) && isset($data['filter'])) {
            ($query->orderBy('id', $data['filter']));
        }

        if (!is_null($data['search_teacher']) && isset($data['search_teacher'])) {
            $searchTeacher = $data['search_teacher'];
            $query->whereHas('teachers', function ($subQuery) use ($searchTeacher) {
                $subQuery->where('user_id', $searchTeacher);
            });
        }

        if (!is_null($data['search_tag']) && isset($data['search_tag'])) {
            $searchTag = $data['search_tag'];
            $query->whereHas('tags', function ($subQuery) use ($searchTag) {
                $subQuery->where('tag_id', $searchTag);
            });
        }

        if (!is_null($data['search-learner']) && isset($data['search-learner'])) {
            $query->withCount('users')->orderBy('users_count', $data['search-learner']);
        }

        if (!is_null($data['search-time']) && isset($data['search-time'])) {
            $query->withSum('lessons', 'time')->orderBy('lessons_sum_time', $data['search-time']);
        }

        if (!is_null($data['search-lesson']) && isset($data['search-lesson'])) {
            $query->withCount('lessons')->orderBy('lessons_count', $data['search-lesson']);
        }
        return $query;
    }
}
