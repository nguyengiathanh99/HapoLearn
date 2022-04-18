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
                    <a href="" class="stext-109 cl8 hov-cl1 trans-04">
                        All courses
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>
                    <a class="stext-109 cl8 hov-cl1 trans-04">
                        Course detail
                    </a>
                </div>
            </div>
        </div>
        <div class="detail-course-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="detail-content-left">
                            <div class="detail-left-img">
                                <img src="{{ asset('/images/htmlcss.png') }}" alt="Hapo bg html">
                            </div>
                            <div class="detail-left-content">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Lessons
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="others-course-search">
                                                            <input type="text" value="" name="key"
                                                                   placeholder="Search..."
                                                                   class="input-search">
                                                            <i class="fas fa-search search"></i>
                                                            <button class="others-course-btn-search">Tìm kiếm</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="others-course-btn-join">Tham gia khóa học</button>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="others-course-list">
                                                    <ol>
                                                        <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                                    </ol>
                                                    <button class="others-course-learn">Learn</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Teacher
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="detail-content-right">
                            <div class="detail-right-header">
                                <p class="detail-right-header-title">Descriptions course</p>
                                <hr>
                                <div class="detail-right-header-content">
                                    Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique.
                                </div>
                            </div>
                            <div class="detail-right-body">
                                <div class="detail-right-body-content">
                                    <i class="fas fa-users"></i>
                                    <p class="detail-right-content-deltail">Learners : <a href="">500</a></p>
                                </div>
                                <hr>
                                <div class="detail-right-body-content">
                                    <i class="fas fa-list-alt"></i>
                                    <p class="detail-right-content-deltail">Lessons : <a href="">100 lessons</a></p>
                                </div>
                                <hr>
                                <div class="detail-right-body-content">
                                    <i class="fas fa-clock"></i>
                                    <p class="detail-right-content-deltail">Times : <a href="">80 hours</a></p>
                                </div>
                                <hr>
                                <div class="detail-right-body-content">
                                    <i class="fas fa-key"></i>
                                    <p class="detail-right-content-deltail">Tags :
                                            <a href="">#learn</a>
                                            <a href="">#code</a>
                                        </p>
                                </div>
                                <hr>
                                <div class="detail-right-body-content">
                                    <i class="fas fa-money-bill-alt"></i>
                                    <p class="detail-right-content-deltail">Price : <a href="">Free</a></p>
                                </div>
                                <hr>
                            </div>
                            <div class="detail-right-other">
                                <p class="detail-right-other-title">Other Courses</p>
                                <ol>
                                    <li><a href="">Lorem ipsum dolor sit amet, consectetur the adipiscing elit.</a></li>
                                    <hr>
                                    <li><a href="">Lorem ipsum dolor sit amet, consectetur the adipiscing elit.</a></li>
                                    <hr>
                                    <li><a href="">Lorem ipsum dolor sit amet, consectetur the adipiscing elit.</a></li>
                                    <hr>
                                    <li><a href="">Lorem ipsum dolor sit amet, consectetur the adipiscing elit.</a></li>
                                    <hr>
                                    <li><a href="">Lorem ipsum dolor sit amet, consectetur the adipiscing elit.</a></li>
                                    <hr>
                                </ol>
                                <button class="detail-right-other-btn">View all ours courses</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
