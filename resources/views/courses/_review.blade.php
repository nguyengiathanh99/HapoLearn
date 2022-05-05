<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
    <div class="review-content">
        <div class="review-total">
            {{ $reviews->count() }} Reviews
        </div>
        <div class="review-star">
            <div class="review-star-main">
                <div class="row">
                    <div class="col-md-4">
                        <div class="review-star-left-image">
                            <div class="review-star-vote">{{ $reviews->count() }}</div>
                            <div class="review">
                                <i class="fas fa-star star-review"></i>
                                <i class="fas fa-star star-review"></i>
                                <i class="fas fa-star star-review"></i>
                                <i class="fas fa-star star-review"></i>
                                <i class="fas fa-star star-review"></i>
                            </div>
                            <div class="review-star-rating">{{ $course->countReviewVote(5) }} Ratings</div>
                        </div>
                    </div>
                    <div class="col-md-8 review-star-right">
                        <div class="review-star-right-main">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="review-star-right-num">
                                        <label for="file">5 stars</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    @if($reviews->count() != 0)
                                        <progress id="file"
                                                  value="{{ $course->countReviewVote(5) / $reviews->count() * 100 }}"
                                                  max="100">{{ $course->countReviewVote(5) / $reviews->count() * 100 }}%
                                        </progress>
                                    @else
                                        <progress id="file" value="0" max="100">0%</progress>
                                    @endif
                                </div>
                                <div class="col-md-1">
                                    <span class="review-star-num">{{ $course->countReviewVote(5) }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="review-star-right-num">
                                        <label for="file">4 stars</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    @if($reviews->count() != 0)
                                        <progress id="file"
                                                  value="{{ $course->countReviewVote(4) / $reviews->count() * 100 }}"
                                                  max="100">{{ $course->countReviewVote(4) / $reviews->count() * 100 }}%
                                        </progress>
                                    @else
                                        <progress id="file" value="0" max="100">0%</progress>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <span class="review-star-num">{{ $course->countReviewVote(4) }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="review-star-right-num">
                                        <label for="file">3 stars</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    @if($reviews->count() != 0)
                                        <progress id="file"
                                                  value="{{ $course->countReviewVote(3) / $reviews->count() * 100 }}"
                                                  max="100">{{ $course->countReviewVote(3) / $reviews->count() * 100 }}%
                                        </progress>
                                    @else
                                        <progress id="file" value="0" max="100">0%</progress>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <span class="review-star-num">{{ $course->countReviewVote(3) }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="review-star-right-num">
                                        <label for="file">2 stars</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    @if($reviews->count() != 0)
                                        <progress id="file"
                                                  value="{{ $course->countReviewVote(2) / $reviews->count() * 100 }}"
                                                  max="100">{{ $course->countReviewVote(2) / $reviews->count() * 100 }}%
                                        </progress>
                                    @else
                                        <progress id="file" value="0" max="100">0%</progress>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <span class="review-star-num">{{ $course->countReviewVote(2) }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="review-star-right-num">
                                        <label for="file">1 stars</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    @if($reviews->count() != 0)
                                        <progress id="file"
                                                  value="{{ $course->countReviewVote(1) / $reviews->count() * 100 }}"
                                                  max="100">{{ $course->countReviewVote(1) / $reviews->count() * 100 }}%
                                        </progress>
                                    @else
                                        <progress id="file" value="0" max="100">0%</progress>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <span class="review-star-num">{{$course->countReviewVote(1)}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-show">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-left btn-show-view"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">Show all reviews
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                @foreach($reviews as $review)
                                    <div class="review-show-main">
                                        <div class="review-show-profile">
                                            <div class="review-show-avatar">
                                                <img src="{{ $review->user->image }}" alt="">
                                            </div>
                                            <p class="review-show-name">{{ $review->user->name }}</p>
                                            <div class="review-show-star">
                                                @for($i = 1; $i <= $review->vote; $i++)
                                                    <i class="fas fa-star icon-star-review"></i>
                                                @endfor
                                                @for($i = 5; $i > $review->vote; $i--)
                                                    <i class="fas fa-star"></i>
                                                @endfor
                                            </div>
                                            <span class="show-date">
                                                                {{ date('d-m-Y', strtotime($review->created_at)) }}
                                                            </span>
                                        </div>
                                        <p class="review-show-content">
                                            {{ $review->comment }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                            {!! $reviews->links('paginate.my-paginate') !!}
                        </div>
                    </div>
                    <div class="review-leave">
                        <p class="btn-show-view">Leave a Review</p>
                        <form action="{{ route('course_reviews.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"
                                       class="review-show-message">Message</label>
                                <textarea class="form-control"
                                          id="exampleFormControlTextarea1" rows="3" name="review_content"></textarea>
                            </div>
                            <div class="review-show-vote">
                                <input type="hidden" value="{{ $course->id }}" name="course_id">
                                <input type="hidden" id="rating" name="rating"
                                       value="0">
                                <div class="rating">
                                    <span>Vote</span>
                                    <i class="ratings_stars fa fa-star"
                                       data-rating="1"></i>
                                    <i class="ratings_stars fa fa-star"
                                       data-rating="2"></i>
                                    <i class="ratings_stars fa fa-star"
                                       data-rating="3"></i>
                                    <i class="ratings_stars fa fa-star"
                                       data-rating="4"></i>
                                    <i class="ratings_stars fa fa-star"
                                       data-rating="5"></i>
                                    <p>(stars)</p>
                                </div>
                            </div>
                            <div class="review-show-sb">
                                <button class="review-show-btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
