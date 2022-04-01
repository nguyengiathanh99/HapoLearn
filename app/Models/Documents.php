<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'lesson_id',
        'file_path',
        'softdelete',
    ];

    public function lessons() {
        return $this->belongsTo(Lessons::class);
    }
}
