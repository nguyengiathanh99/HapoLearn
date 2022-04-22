<div class="col-md-6 col-12 ">
    <div class="list-course-card ">
        <div class="hapo-list-course-head">
            <div class="list-course-logo">
                <img src="{{ asset($course->image) }}" alt="list-course-html">
            </div>
            <div class="list-course-content">
                <div class="list-course-content-title">{{ $course->name }}</div>
                <p class="list-course-content-txt">{{ $course->description }}</p>
            </div>
        </div>
        <div class="list-course-btn">
            <a href="{{ route('courses.show', $course->id) }}" class="list-course-btn-more">More</a>
        </div>
        <div class="hapo-list-course-statistic">
            <div class="hapo-list-course-statistic-left">
                <div class="list-course-specical-title">Learners</div>
                <div class="list-course-specical-num">{{ $course->learner_course }}</div>
            </div>
            <div class="hapo-list-course-statistic-mid">
                <div class="list-course-specical-title">Lessons</div>
                <div class="list-course-specical-num">{{ $course->lesson_course }}</div>
            </div>
            <div class="hapo-list-course-statistic-right">
                <div class="list-course-specical-title">Times</div>
                <div class="list-course-specical-num">{{ $course->time_course }} (h)</div>
            </div>
        </div>
    </div>
</div>
