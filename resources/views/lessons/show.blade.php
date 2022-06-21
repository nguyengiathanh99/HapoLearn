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
                                <img src="http://localhost:8080/Unitop_Admin/public/{{ $course->image  }}" alt="{{ $course->name  }}">
                            </div>
                            <div id="doc-iframe">
                                @foreach ($lessons->documents()->get() as $item)
                                <video width="90%" height="90%" controls="true" poster="" id="video">
                                    <source src="http://localhost:8080/Unitop_Admin/public/{{ $item->file_path }}" type="video/mp4">
                                </video>
                                @endforeach
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
                                                <div class="col-md-5">
                                                    <p>Courses:</p>
                                                </div>
                                                <div class="col-md-6 information-item-detail">{{ $course->name  }}</div>
                                            </div>
                                        </div>
                                        <div class="information-lessons information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-1">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="col-md-5">
                                                    <p>Learners:</p>
                                                </div>
                                                <div class="col-md-6 information-item-detail">{{ $course->learner_course }}</div>
                                            </div>
                                        </div>
                                        <div class="information-times information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-1">
                                                    <i class="fas fa-clock"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Times:</p>
                                                </div>
                                                <div class="col-md-7 information-item-detail">{{ $course->time_course }}
                                                    hours
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information-tags information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-1">
                                                    <i class="fas fa-key"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Tags:</p>
                                                </div>
                                                <div class="col-md-7">
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
                                                    <p>Price:</p>
                                                </div>
                                                <div class="col-md-7 information-item-detail">{{ $course->processed_price }}</div>
                                            </div>
                                        </div>
                                        <div class="information-price information-item information-item-lesson">
                                            <form action="{{ route('user_courses.update', $course->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="infomation-lesson-end">
                                                    <button type="button"
                                                       class="btn-end-course" data-toggle="modal" data-target="#exampleModal">@if(session()->has('message_end_course')) {{ session()->get('message_end_course') }} @else
                                                            Kết thúc khóa học @endif   </button>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content bg-white">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body modal-body-end-course">
                                                                    Bạn muốn kết thúc khóa học ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Yes</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress-learn">
                    <label for="file">Learning progress:</label>
                    <progress id="file"
                              value="{{ $lessons->learning_progress ? $lessons->learning_progress['progress'] : 0}}"
                              max="100"></progress>
                    <span>{{ $lessons->learning_progress ? $lessons->learning_progress['progress'] : 0}}%</span>
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
                                                @foreach($lessons->documents()->get() as $document)
                                                    <div class="program-main">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="program-content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="program-thumb-nail">
                                                                                <img src="http://localhost:8080/Unitop_Admin/public/{{ $document->image }}"
                                                                                     alt="{{ $document->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="program-title">{{ $document->title }}</div>
                                                                        </div>
                                                                        {{-- <div class="col-md-8">
                                                                            <div class="program-name">{{ $document->name }}</div>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <form action="{{ route('user_lessons.update', $lessons->id) }}"
                                                                              method="post">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <input type="hidden" name="document_id"
                                                                                   value="{{ $document->id }}">
                                                                            {{-- <button type="submit"
                                                                                    class="btn btn-success btn-program-success program-success"
                                                                                    @if($document->user_document) disabled @endif>
                                                                                @if($document->user_document) Completed @else Complete @endif
                                                                            </button> --}}
                                                                            <div id="status" class="incomplete">
                                                                                {{-- <span>Play status: </span> --}}
                                                                                <span class="status complete"><button type="submit"
                                                                                    class="btn btn-success btn-program-success program-success status complete"
                                                                                    @if($document->user_document) disabled @endif>
                                                                                @if($document->user_document) Completed @else Complete @endif
                                                                                </button></span>
                                                                                <span class="status incomplete">INCOMPLETE</span>
                                                                                <br />
                                                                                </div>
                                                                                <div style="display: none">
                                                                                <span id="played">0</span> seconds out of
                                                                                <span id="duration"></span> seconds.
                                                                                </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{-- <a href="{{ $document->file_path }}" target="blank">View</a> --}}
                                                                        <div id="doc-view" style="cursor: pointer">View</div>
                                                                    </div>
                                                                </div>
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
{{--                        <div class="col-md-4 other-course-lesson">--}}
{{--                            @include('courses._other_course')--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    <script>
        var video = document.getElementById("video");
        var timeStarted = -1;
        var timePlayed = 0;
        var duration = 0;
        // If video metadata is laoded get duration
        if(video.readyState > 0)
        getDuration.call(video);
        //If metadata not loaded, use event to get it
        else
        {
        video.addEventListener('loadedmetadata', getDuration);
        }
        // remember time user started the video
        function videoStartedPlaying() {
        timeStarted = new Date().getTime()/1000;
        }
        function videoStoppedPlaying(event) {
        // Start time less then zero means stop event was fired vidout start event
        if(timeStarted>0) {
            var playedFor = new Date().getTime()/1000 - timeStarted;
            timeStarted = -1;
            // add the new number of seconds played
            timePlayed+=playedFor;
        }
        document.getElementById("played").innerHTML = Math.round(timePlayed)+"";
        // Count as complete only if end of video was reached
        if(timePlayed>=duration && event.type=="ended") {
            document.getElementById("status").className="complete";
        }
        }

        function getDuration() {
        duration = video.duration;
        document.getElementById("duration").appendChild(new Text(Math.round(duration)+""));
        console.log("Duration: ", duration);
        }

        video.addEventListener("play", videoStartedPlaying);
        video.addEventListener("playing", videoStartedPlaying);

        video.addEventListener("ended", videoStoppedPlaying);
        video.addEventListener("pause", videoStoppedPlaying);

    </script>
@endsection
