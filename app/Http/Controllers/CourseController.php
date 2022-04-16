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
        $courses = Courses::search($request->all())->paginate(config('course.itemPage'));
        $tags = Tags::all();
        $teachers = User::all()->where('role', '=', config('course.roleUser'));
        return view('course.index', compact('courses', 'request', 'teachers', 'tags'));
    }
}
