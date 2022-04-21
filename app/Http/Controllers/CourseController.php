<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lessons;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Courses::search($request->all())->paginate(config('course.item_page'));
        $tags = Tags::all();
        $teachers = User::teacher()->get();
        return view('courses.index', compact('courses', 'request', 'teachers', 'tags'));
    }

    public function show(Request $request, $id)
    {
        $course = Courses::find($id);
        $lessons = Lessons::searchlessons($request->all(), $id)->paginate(config('course.item_page'));
        $otherCourses = Courses::where('id', '!=', $id)->limit(config('course.limitCourse'))->get();
        return view('courses.show', compact('course', 'otherCourses', 'request', 'lessons'));
    }
}