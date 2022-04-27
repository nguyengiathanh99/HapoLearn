<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLessons extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'lesson_id',
        'progress',
    ];

    public static function sumProgress($data)
    {
        $numProgress = ((($data['sumDocumentCompleted'] + 1) / $data['sumDocument']) * config('course.one_hundreds'));
        return number_format((float) $numProgress, 2, '.', '');
    }
}
