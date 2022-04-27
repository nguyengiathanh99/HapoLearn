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
            'status' => config('course.status_start'),
        ];

        if (isset($data)) {
            UserCourses::create($data);
            return redirect()->back()->with('message_success', 'Đã thêm vào thành công');
        }
    }

    public function update(Request $request, $id)
    {
        $statusCourse = UserCourses::checkstatuscourse($id);
        $statusCourse->status = config('course.status_end');
        $statusCourse->save();
        if ($statusCourse) {
            return redirect()->back()->with('message_end_course', 'Hoàn thành');
        }
    }
}
