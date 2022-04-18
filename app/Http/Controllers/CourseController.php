<?php

namespace App\Http\Controllers;

use App\Models\Courses;
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
        return view('course.index', compact('courses', 'request', 'teachers', 'tags'));
    }

    public function detailCourse()
    {
        return view('course.detail_course');
    }
}
