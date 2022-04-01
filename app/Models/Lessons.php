<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
        'price',
        'description',
        'softdelete',
    ];

    public function users() {
        return $this->belongsToMany(User::class,'user_lessons');
    }

    public function documents() {
        return $this->hasMany(Documents::class);
    }
}
