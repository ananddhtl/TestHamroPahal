
@if(session('message'))
<div class="sweetmessage">
    <p>{{ session('message') }}</p>
</div>
@endif

@extends('welcome')
@section('content')
<div class="wrapper">
   
    <div class="explore-events p-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="main-title">
                        <h3>Explore Events</h3>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="event-filter-items">
                        <div class="featured-controls">
                            
                            <div class="row" data-ref="event-filter-content">
                                @foreach($events as $item)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness"
                                    data-ref="mixitup-target">
                                    <div class="main-card mt-4">
                                        <div class="event-thumbnail">
                                            <a href="{{url('event-description/'.$item->id)}}" class="thumbnail-img">
                                                <img src="{{$item->thumbnail}}"
                                                    alt="">
                                            </a>
                                            <span class="bookmark-icon" title="Bookmark"></span>
                                        </div>
                                        <div class="event-content">
                                            <a href="{{url('event-description/'.$item->id)}}"class="event-title">{{$item->title}}</a>
                                            <div class="duration-price-remaining">
                                                <span class="duration-price">AUD $100.00*</span>
                                                <span class="remaining"></span>
                                            </div>
                                        </div>
                                        <div class="event-footer">
                                            <div class="event-timing">
                                                <div class="publish-date">
                                                    <span><i class="fa-solid fa-calendar-day me-2"></i>15 Apr</span>
                                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                    <span>Fri, 3.45 PM</span>
                                                </div>
                                                <span class="publish-time"><i
                                                        class="fa-solid fa-clock me-2"></i>1h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="browse-btn">
                                <a href="explore_events.html" class="main-btn btn-hover ">Browse All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection