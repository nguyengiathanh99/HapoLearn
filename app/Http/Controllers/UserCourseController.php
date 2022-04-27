<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use App\Models\UserCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'user_id' => Auth::id(),
            'course_id' => $request['course-id'],
            'status' => UserCourses::JOIN_COURSE,
        ];


        if (isset($data)) {
            UserCourses::create($data);
            return redirect()->back()->with('message_success', 'Đã thêm vào thành công');
        }
    }

    public function edit($id)
    {
        $statusCourse = UserCourses::where('course_id', $id)->where('user_id', Auth::id())->first();
        $statusCourse->status = UserCourses::END_COURSE;
        $statusCourse->save();
        if ($statusCourse) {
            return redirect()->back()->with('message_end_course', 'Hoàn thành');
        }
    }
}

