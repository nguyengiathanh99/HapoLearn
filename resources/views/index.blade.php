@extends('layouts.app')
@section('content')
    <div class="hapo-banner">
        <div class="container">
            <div class="banner-content">
                <p class="banner-title">Learn Anytime, Anywhere</p>
                <p class="banner-special">at HapoLearn <span class="banner-img"><img
                            src="{{ asset('images/birdlogo.png') }}"
                            alt="Hapo Bird Logo"></span>!</p>
                <p class="banner-span">Interactive lesson, "on-the-go"<br> practice, peer support</p>
                <button type="button" class="banner-btn">Start Learning Now!</button>
            </div>
        </div>
    </div>
    <div class="course-bg"></div>
    <div class="wp-hapo-list-courses">
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-image course-hcj">
                                <img src="{{ asset($course->image) }}" alt="Hapo bg html">
                            </div>
                            <div class="card-body">
                                <div class="card-title">{{ $course->name }}</div>
                                <div class="card-content">
                                    {{ $course->description }}
                                </div>
                                <button class="card-btn">Take This Course</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="wp-hapo-other-course">
        <p class="title-other-course">Other courses</p>
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-image course-css">
                                <img src="{{ asset($course->image) }}" alt="Hapo bg css">
                            </div>
                            <div class="card-body">
                                <div class="card-title">{{ $course->name }}</div>
                                <div class="card-content">
                                    {{ $course->description }}
                                </div>
                                <button class="card-btn">Take This Course</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="#" class="view-courses">View All Our Courses <i class="fas fa-arrow-right"></i>
        </a>
    </div>
    <div class="why-hapo-learn">
        <div class="why-hapo-mb">
            <img src="{{ asset('images/mb-1.png') }}" alt="Why-hapo-mb" class="why-hapo-img-mb">
        </div>
        <p class="why-hapo-title-main">
            Why HapoLearn?
        </p>
        <div class="why-hapo-content">
            <p class="why-hapo-title">
                Why HapoLearn?
            </p>
            <div class="why-hapo-nav">
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>Interactive
                    lessons, "on-the-go" practice, peer
                    support
                </p>
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>Interactive
                    lessons, "on-the-go" practice, peer
                    support
                </p>
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>Interactive
                    lessons, "on-the-go" practice, peer
                    support
                </p>
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>Interactive
                    lessons, "on-the-go" practice, peer
                    support
                </p>
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>Interactive
                    lessons, "on-the-go" practice, peer
                    support
                </p>
            </div>
            <div class="why-hapo-img">
                <img src="{{ asset('images/transparent-1911160_1280.png') }}" alt="Why-hapo-transpent"
                     class="why-hapo-img-laptop">
            </div>
        </div>
    </div>
    <div class="hapo-feedback">
        <div class="container">
            <div class="hapo-feedback-header">
                <a class="feed-back-header-title">Feedback</a>
                <p class="feed-back-header-content">What other students turned professionals have to say about
                    us
                    <br> after learning with us and reaching their goals
                </p>
            </div>
            <div class="hapo-feed-back-body">
                <div class="row slick">
                    @foreach($reviews as $review)
                        <div class="col-12">
                            <div class="feed-back-up">
                                <div class="feed-back-sort-down"></div>
                                <p class="feed-back-border"></p>
                                <p class="feed-back-up-content">{{ $review->comment }}</p>
                            </div>
                            <div class="feed-back-down">
                                <div class="feed-back-img">
                                    <img src="{{ $review->user->image }}" alt="Hapo Avatar">
                                </div>
                                <div class="feed-back-down-content">
                                    <p class="feed-back-name">{{ $review->user->name }}</p>
                                    <p class="feed-back-span">{{ $review->user->job }}</p>
                                    <p class="feed-back-star">
                                        @for($i = 1; $i <= $review->vote; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @for($i = 5; $i > $review->vote; $i--)
                                            <i class="fas fa-star star-special"></i>
                                        @endfor
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="hapo-banner-second">
        <div class="hapo-banner-second-content">
            <div class="banner-second-content">
                Become a member of our <br> growing community!
            </div>
            <button class="banner-second-btn">Start Learning Now!</button>
        </div>
    </div>
    <div class="hapo-statistic">
        <div class="hapo-statistic-title">
            <div class="statistic-title">Statistic</div>
        </div>
        <div class="statistic-body">
            <div class="statistic-card">
                <div class="statistic-content">Courses</div>
                <div class="statistic-num">{{ $courseCount }}</div>
            </div>
            <div class="statistic-card">
                <div class="statistic-content">Lessons</div>
                <div class="statistic-num">{{ $lessonCount }}</div>
            </div>
            <div class="statistic-card">
                <div class="statistic-content">Learners</div>
                <div class="statistic-num">{{ $learner }}</div>
            </div>
        </div>
    </div>
@endsection
