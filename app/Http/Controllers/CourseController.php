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
//        $tag_id = 2;
//        $tagIds = [1,3,5,6];
//        $courses = Courses::whereHas('tags', function ($subQuery) use ($tagIds) {
//            $subQuery->whereIn('tag_id', $tagIds);
//        })->get();
        $courses = Courses::search($request)->paginate(12);
        $data = $request;
        $tags = Tags::all();
        $teachers = User::all()->where('role', '=', 1);
        return view('course', compact('courses', 'data', 'teachers', 'tags'));
    }
}
