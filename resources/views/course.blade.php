@extends('layouts.app')
@section('content')
    <!-- Hapo-listcourses-->
    <div class="hapo-listcourse-body">
        <div class="container">
            <form action="{{ route('search') }}" method="get">
            @csrf
            <!-- Listcourse-header -->
                <div class="hapo-listcourse-header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="list-course-filter">
                                        <div class="list-course-filter-content"><i
                                                    class="fas fa-sliders-h filter-slider"></i>Filter
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="list-course-search">
                                        <input type="text" value="{{ $data['key'] }}" name="key" placeholder="Search..." class="input-search">
                                        <i class="fas fa-search search"></i>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button class="list-course-btn-search">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listcourse-selective -->
                <div class="hapo-listcourse-selective">
                    <div class="row hapo-listcourse-select-main">
                        <div class="col-md-1">
                            <div class="filter-by">Lọc theo</div>
                        </div>
                        <div class="col-md-2">
                            <ul class="donate-now">
                                <li>
                                    <input type="radio" value="desc" id="filter-new" name="amount" checked/>
                                    <label for="filter-new" class="filter-new">Mới nhất</label>
                                </li>
                                <li>
                                    <input type="radio" value="asc" id="filter-old" name="amount"/>
                                    <label for="filter-old" class="filter-old">Cũ nhất</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">

                            <select class="form-select" aria-label="Default select example" name="search_teacher">
                                <option selected>Teacher</option>
                                @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Số người học</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Thời gian học</option>
                                <option value="1">Ngày-1</option>
                                <option value="2">Ngày-2</option>
                                <option value="3">Ngày-3</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Số bài học</option>
                                <option value="1">Tăng dần</option>
                                <option value="2">Giảm dần</option>
                            </select>
                        </div>
                    </div>
                    <div class="row hapo-listcourse-select-main-second">
                        <div class="col-1"></div>
                        <div class="col-md-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Tags</option>
                                @foreach($tags as $tag)
                                <option value="1">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End-Listcourse-header -->
            </form>
        @include('layouts.modal')

        <!-- Listcourse-content -->
            <div class="hapo-list-course-main">
                <div class="row list-card">
                    @foreach($courses as $course)
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
                                    <button class="list-course-btn-more">More</button>
                                </div>
                                <div class="hapo-list-course-statistic">
                                    <div class="hapo-list-course-statistic-left">
                                        <div class="list-course-specical-title">Learners</div>
                                        <div class="list-course-specical-num">{{$course->learner_course}}</div>
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
                    @endforeach
                </div>
            </div>
            <!-- End-Listcourse-content -->
            {{ $courses->links('paginate.my-paginate') }}
        </div>
    </div>
    <!-- End-Hapo-listcourses -->
@endsection