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
        return $this->belongsToMany(User::class, 'course_users', 'course_id', 'user_id');
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'course_teachers', 'course_id', 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'course_tags', 'course_id', 'tag_id');
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
        if (is_null($data['amount'])) {
            $query->orderBy('id', 'desc');
        } else {
            $query->orderBy('id', $data['amount']);
        }
        if (isset($data['key'])) {
            $key = $data['key'];
            $query->where('name', 'LIKE', '%'. $key .'%')->orWhere('description', 'LIKE', '%'. $key .'%');
        }
        if (isset($data['search_teacher'])) {
            $search_teacher = $data['search_teacher'];
            $query->whereHas('teachers', function ($subQuery) use ($search_teacher) {
                $subQuery->where('user_id', $search_teacher);
            });
        }
        return $query;
    }
}
