<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lessons;
use App\Models\Reviews;
use App\Models\UserLessons;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $courses = Courses::all()->random(3);
        $reviews = Reviews::all()->random(3);
        $courseCount = Courses::count();
        $lessonCount = Lessons::count();
        $learner = UserLessons::count();
        return view('index', compact('courses', 'reviews', 'courseCount', 'lessonCount', 'learner'));
    }
}
