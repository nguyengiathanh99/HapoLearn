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
                    <a href="{{ route('courses.show',$course->id) }}" class="stext-109 cl8 hov-cl1 trans-04">
                        Course detail
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>
                    <a href="" class="stext-109 cl8 hov-cl1 trans-04">
                        Lessons detail
                    </a>
                </div>
            </div>
        </div>
        <div class="detail-course-body">
            <div class="container container-detail-course">
                <div class="image-description">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="image-course">
                                <img src="{{ $course->image  }}" alt="{{ $course->name  }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description-lesson">
                                <div class="information-other-course">
                                    <div class="information">
                                        <div class="information-learner information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-1">
                                                    <i class="fas fa-tv"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Courses</p>
                                                </div>
                                                <div class="col-md-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-md-6">{{ $course->name  }}</div>
                                            </div>
                                        </div>
                                        <div class="information-lessons information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-1">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Learners</p>
                                                </div>
                                                <div class="col-md-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-md-6">{{ $course->learner_course }}</div>
                                            </div>
                                        </div>
                                        <div class="information-times information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-1">
                                                    <i class="fas fa-clock"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Times</p>
                                                </div>
                                                <div class="col-md-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-md-6">{{ $course->time_course }} hours</div>
                                            </div>
                                        </div>
                                        <div class="information-tags information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-1">
                                                    <i class="fas fa-key"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Tags</p>
                                                </div>
                                                <div class="col-md-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-md-6">
                                                    @foreach($course->tags as $item)
                                                        <a href="{{ route('courses.index',['search_tag' => $item->id]) }}"
                                                           class="link-tag">
                                                            {{  $item->name }}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information-price information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-1">
                                                    <i class="fas fa-money-bill-alt"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Price</p>
                                                </div>
                                                <div class="col-md-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-md-6">{{ $course->processed_price }}</div>
                                            </div>
                                        </div>
                                        <div class="information-price information-item information-item-lesson">
                                            <div class="infomation-lesson-end">
                                                <a href="" class="btn-end-course">Kết thúc khóa học</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-course-main">
                    <div class="row detail-lesson-main">
                        <div class="col-md-8 detail-lesson-content">
                            <div class="card">
                                <div class="card-body ">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#profile-overview">Descriptions
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#profile-edit">
                                                Program
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-2">
                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                            <div class="detail-lessons-desc-main">
                                                <div class="detail-lessons-title">Descriptions lesson</div>
                                                <div class="detail-lessons-desc">
                                                    {{ $lessons->description }}
                                                </div>
                                            </div>
                                            <div class="detail-lessons-requirement-main">
                                                <div class="detail-lessons-title">Requirements</div>
                                                <div class="detail-lessons-desc">
                                                    {{ $lessons->description }}
                                                </div>
                                            </div>
                                            <div class="detail-lessons-tag-main">
                                                <div class="detail-lessons-tag">Tag:</div>
                                                <div class="detail-lesson-tag-content">
                                                    @foreach($course->tags as $item)
                                                        <a href="{{ route('courses.index',['search_tag' => $item->id]) }}"
                                                           class="link-tag">
                                                            {{  $item->name }}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                            <div class="main-teacher">
                                                <div class="title-program">
                                                    <p>Documents</p>
                                                </div>
                                                @foreach($lessons->documents()->get() as $lesson)
                                                    <div class="program-main">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="program-content">
                                                                    <div class="row">
                                                                        <div class="col-md-1">
                                                                            <div class="program-thumb-nail">
                                                                                <img src="{{ $lesson->file_path }}" alt="{{ $lesson->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="program-title">{{ $lesson->title }}</div>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="program-name">{{ $lesson->name }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="">Preview</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 other-course-lesson">
                            @include('courses._other_course')
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
