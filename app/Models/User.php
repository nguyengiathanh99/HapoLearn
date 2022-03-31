<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
        'role',
        'date_of_birth',
        'about',
        'description',
        'status',
        'softdelete',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses() {
        return $this->belongsToMany(Courses::class,'user_courses');
    }

    public function teachers() {
        return $this->belongsToMany(Courses::class,'teacher_courses');
    }

    public function reviews() {
        return $this->belongsToMany(Courses::class,'review');
    }

    public function lesson() {
        return $this->belongsToMany(Lessons::class,'user_lessons');
    }
}
