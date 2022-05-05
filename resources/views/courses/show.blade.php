@extends('layouts.app')
@section('content')
    <div class="wp-detail-course">
        <div class="nav-detail">
            <div class="container">
                <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                    <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                        Home
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('courses.index') }}" class="stext-109 cl8 hov-cl1 trans-04">
                        All courses
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>
                    <a href="" class="stext-109 cl8 hov-cl1 trans-04">
                        Course detail
                    </a>
                </div>
            </div>
        </div>
        <div class="detail-content d-flex">
            <div class="detail-left">
                <div class="detail-img">
                    <img class="w-100 h-100" src="{{ $course->image }}" alt="{{ $course->name }}">
                </div>
                <div class="detail-left-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="lesson-tab" data-toggle="tab" href="#lesson" role="tab"
                               aria-controls="lesson" aria-selected="true">Lessons</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab"
                               aria-controls="teacher" aria-selected="false">Teacher</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                               aria-controls="review" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="lesson" role="tabpanel" aria-labelledby="lesson-tab">
                            <div class="lesson-top d-flex align-item-center justify-content-between">
                                <form action="{{ route('courses.show', $course->id) }}" method="get">
                                    <input type="text" placeholder="Search..." name="keyword"
                                           value="{{ $request->keyword }}">
                                    <i class="fa fa-search"></i>
                                    <button type="submit">Search</button>
                                </form>
                                <form action="{{ route('user_courses.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="course-id" value="{{ $course->id }}">
                                    <input type="submit"
                                           class="btn-join-course {{ $course->checkStatusUserCourse()['color'] }}"
                                           value="{{ $course->checkStatusUserCourse()['message'] }}" {{ $course->checkStatusUserCourse()['disabled'] }}>
                                </form>
                            </div>
                            <div class="lesson-content">
                                @foreach($lessons as $key => $lesson)
                                    <div class="lessons">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="lesson-id">
                                                    <p>{{ $key. '.' }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="lesson-name">
                                                    <p>{{ $lesson->name }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="{{ route('courses.lessons.show', [$course->id, $lesson->id]) }}"
                                                   class="btn btn-success btn-course-learn">Learn</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="lesson-pagination d-flex justify-content-end">
                                {!! $lessons->links('paginate.my-paginate') !!}
                            </div>
                            @if(count($lessons->items()) == 0)
                                <p class="text-center font-weight-bold">Không tìm thấy khóa học phù hợp !</p>
                            @endif
                        </div>
                        @include('courses._teacher')
                        @include('courses._review')
                    </div>
                </div>
            </div>
            <div class="detail-right">
                <div class="course-description">
                    <div class="description-title">
                        Descriptions course
                    </div>
                    <div class="description-detail">
                        {{ $course->description }}
                    </div>
                </div>
                <div class="course-info">
                    <div class="info-item info-learner d-flex align-items-center">
                        <i class="fas fa-users"></i>
                        <span class="info-text">Learners</span>
                        <span class="colon">:</span>
                        <span class="data">{{ $course->learner_course }}</span>
                    </div>
                    <div class="info-item info-lesson d-flex align-items-center">
                        <i class="fas fa-list-alt"></i>
                        <span class="info-text text-lesson">Lessons</span>
                        <span class="colon">:</span>
                        <span class="data">{{ $course->lesson_course }} lessons</span>
                    </div>
                    <div class="info-item info-time d-flex align-items-center">
                        <i class="fas fa-clock"></i>
                        <span class="info-text text-time">Times</span>
                        <span class="colon">:</span>
                        <span class="data">{{ $course->time_course }} hours</span>
                    </div>
                    <div class="info-item info-tag d-flex align-items-center">
                        <i class="fas fa-key"></i>
                        <span class="info-text text-tag">Tags</span>
                        <span class="colon">:</span>
                        <span class="data">
                            @foreach ($course->tags as $item)
                                <a href="{{route('courses.index',['search_tag' => $item->id])}}">{{  $item->name }}</a>
                            @endforeach
                        </span>
                    </div>
                    <div class="info-item info-price d-flex align-items-center">
                        <i class="fas fa-money-bill-alt"></i>
                        <span class="info-text text-price">Price</span>
                        <span class="colon">:</span>
                        <span class="data">{{ $course->processed_price }}</span>
                    </div>
                </div>
                @include('courses._other_course')
            </div>
        </div>
@endsection
