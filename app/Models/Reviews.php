<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'file_path',
        'comment',
        'vote',
        'softdelete',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function courses() {
        return $this->belongsTo(Courses::class);
    }
}
