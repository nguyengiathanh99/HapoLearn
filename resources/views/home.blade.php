@extends('layouts.app')
@section('content')
    <!-- Banner -->
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
    <!-- End Banner -->
    <!-- Modal -->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Form-Login -->
                    <div class="hapo-form d-flex justify-content-center align-items-center">
                        <div class="hapo-form-main hapo-login">
                            <div class="form-header">
                                <div class="row flex-row-reverse">
                                    <div
                                        class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-login header-reg">
                                        REGISTER
                                    </div>
                                    <div
                                        class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-reg header-login">
                                        LOGIN
                                    </div>
                                </div>
                                <div class="form-header-xmark close-icon">
                                    <i class="fas fa-times" data-dismiss="modal"></i>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="container">
                                    <form>
                                        <div class="form-group">
                                            <label for="username">Username:</label>
                                            <input type="email" class="form-control" id="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check mb-2 mr-sm-2">
                                                <input class="form-check-input" type="checkbox" id="remember-me">
                                                <label class="form-check-label" for="remember-me">
                                                    Remember me
                                                </label>
                                            </div>
                                            <a href="#" class="forgot-psw">Forgot password</a>
                                        </div>
                                        <button type="submit" class="btn-submit">LOGIN</button>
                                    </form>
                                </div>
                                <p class="login-diff"><span>Login with</span></p>
                                <div class="container login-social">
                                    <div class="login-google">
                                        <a href="#" class="login-special"><i
                                                class="fab fa-google-plus-g login-icon"></i>Google</a>
                                    </div>
                                    <div class="login-facebook">
                                        <a href="#" class="login-special"><i
                                                class="fab fa-facebook-f login-icon"></i>Facebook</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End-Form-Login -->

                    <!-- Form-Register -->
                    <div class="hapo-form d-flex justify-content-center align-items-center ">
                        <div class="hapo-form-main hapo-reg">
                            <div class="form-header">
                                <div class="row">
                                    <div
                                        class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-login header-login">
                                        LOGIN
                                    </div>
                                    <div
                                        class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-reg header-reg">
                                        REGISTER
                                    </div>
                                </div>
                                <div class="form-header-xmark close-icon">
                                    <i class="fas fa-times" data-dismiss="modal"></i>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="container">
                                    <form>
                                        <div class="form-group">
                                            <label for="username">Username:</label>
                                            <input type="email" class="form-control" id="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm-password">Repeat Password:</label>
                                            <input type="password" class="form-control" id="confirm-password">
                                        </div>
                                        <button type="submit" class="btn-submit">REGISTER</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End-Form-Register -->
                </div>
            </div>
        </div>
    </div>
    <div class="course-bg"></div>
    <!-- List Courses -->
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
    <!-- End List Courses -->
    <!-- Other courses -->
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
    </div>
    <!-- End other courses -->
    <!-- Why Hapolearn -->
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
    <!-- End Why Hapolearn -->
    <!-- feed-back -->
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
                                    @switch($review->vote)
                                        @case(1)
                                    <i class="fas fa-star"></i>
                                    @for($i = 1; $i < 5; $i++)
                                    <i class="fas fa-star star-special"></i>
                                        @endfor
                                        @break
                                        @case(2)
                                        @for($i = 1; $i < 3; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @for($i = 1; $i < 4; $i++)
                                            <i class="fas fa-star star-special"></i>
                                        @endfor
                                        @break
                                        @case(3)
                                        @for($i = 1; $i < 4; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @for($i = 1; $i < 3; $i++)
                                            <i class="fas fa-star star-special"></i>
                                        @endfor
                                        @break
                                        @case(4)
                                        @for($i = 1; $i < 5; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        <i class="fas fa-star star-special"></i>
                                        @break
                                        @case(5)
                                        @for($i = 1; $i < 6; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @break
                                    @endswitch
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End feed-back -->
    <!-- Hapo-Statistic -->
    <div class="hapo-statistic">
        <div class="hapo-statistic-title">
            <div class="statistic-title">Statistic</div>
        </div>
        <div class="statistic-body">
            <div class="statistic-card">
                <div class="statistic-content">Courses</div>
                <div class="statistic-num">{{$courseCount}}</div>
            </div>
            <div class="statistic-card">
                <div class="statistic-content">Lessons</div>
                <div class="statistic-num">{{$lessonCount}}</div>
            </div>
            <div class="statistic-card">
                <div class="statistic-content">Learners</div>
                <div class="statistic-num">{{$learner}}</div>
            </div>
        </div>
    </div>
    <!-- End-Hapo-Statistic -->
@endsection
