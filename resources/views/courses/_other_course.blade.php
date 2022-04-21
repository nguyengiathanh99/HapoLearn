<div class="course-other">
    <div class="course-other-top">Other Courses</div>
    <div class="course-other-content">
        @foreach ($otherCourses as $key => $otherCourse)
            @if ($otherCourse !== $course)
                <div class="course-other-item">
                    {{ ++ $key }}. {{ $otherCourse->name  }}
                </div>
            @endif
        @endforeach
        <div class="course-other-btn">
            <button>View all ours courses</button>
        </div>
    </div>
</div>