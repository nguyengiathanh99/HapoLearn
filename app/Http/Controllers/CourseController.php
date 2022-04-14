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
        $courses = Courses::search($request)->paginate(14);
        $data = $request;
        $tags = Tags::all();
        $teachers = User::all()->where('role', '=', 1);
        return view('course', compact('courses', 'data', 'teachers', 'tags'));
    }
}
