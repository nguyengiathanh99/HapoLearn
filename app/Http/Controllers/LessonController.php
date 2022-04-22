<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lessons;

class LessonController extends Controller
{
    public function show($courseId, $lessonId)
    {
        $lessons = Lessons::find($lessonId);
        $course = Courses::find($courseId);
        $otherCourses = Lessons::others($courseId)->get();
        return view('lessons.show', compact('lessons', 'course', 'otherCourses'));
    }
}
