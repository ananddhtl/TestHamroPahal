@extends('welcome')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.progress-container {
    width: 300px;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.progress-bar {
    width: 0;
    height: 20px;
    background-color: #6ac045 !important;
    border-radius: 5px;
    transition: width 0.3s ease-in-out;
}

.progress-label {
    padding: 10px;
    text-align: center;
    font-size: 20px;
}
</style>
@section('content')
<div class="wrapper">
    <div class="breadcrumb-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <div class="barren-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="explore_events.html">Explore Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Online Event Detail View</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="event-dt-block p-80">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="event-top-dts">
                        <div class="event-top-date">
                            <span class="event-month">Jun</span>
                            <span class="event-date">01</span>
                        </div>
                        <div class="event-top-dt">
                            <h3 class="event-main-title">{{$eventDescription->title}}</h3>
                            <div class="event-top-info-status">
                                <span class="event-type-name"></span>
                                <span class="event-type-name details-hr">Starts on <span class="ev-event-date">Wed,
                                        Jun
                                        01, 2022 5:30 AM</span></span>
                                <span class="event-type-name details-hr">1h</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="main-event-dt">
                        <div class="event-img">
                            <img src="{{$eventDescription->thumbnail}}" alt="">
                        </div>
                        <div class="share-save-btns dropdown">
                            <button class="sv-btn me-2"><i class="fa-regular fa-bookmark me-2"></i>Save</button>
                            <button class="sv-btn" data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fa-solid fa-share-nodes me-2"></i>Share</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa-brands fa-facebook me-3"></i>Facebook</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa-brands fa-twitter me-3"></i>Twitter</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa-brands fa-linkedin-in me-3"></i>LinkedIn</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa-regular fa-envelope me-3"></i>Email</a></li>
                            </ul>
                        </div>
                        <div class="main-event-content">
                            <h4>About This Event</h4>
                            <p> {!! $eventDescription->description !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="main-card event-right-dt">
                        <div class="bp-title">
                            <h4>Event Details</h4>
                        </div>

                        <div class="event-dt-right-group mt-5">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-money-bill"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Total Fund Raised for this Event</h4>
                                <div class="progress-container">
                                    <div class="progress-bar" id="myProgressBar"></div>
                                    <div class="progress-label" id="progressLabel"></div>
                                </div>
                            </div>
                        </div>
                        <div class="event-dt-right-group mt-5">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-circle-user"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Organised by</h4>
                                <h5>{{$eventDescription->organized_by}}</h5>

                            </div>
                        </div>
                        <div class="event-dt-right-group">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-calendar-day"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Date and Time</h4>
                                <h5>Sat, Apr 30, 2022 11:30 AM</h5>
                                <div class="add-to-calendar">
                                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-calendar-days me-3"></i>Add to Calendar
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-brands fa-windows me-3"></i>Outlook</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-brands fa-apple me-3"></i>Apple</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-brands fa-google me-3"></i>Google</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-brands fa-yahoo me-3"></i>Yahoo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="event-dt-right-group">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Location</h4>
                                <h5 class="mb-0">{{$eventDescription->location}}</h5>

                            </div>
                        </div>
                        <div class="select-tickets-block">
                            <h6>Select Tickets</h6>
                            <div class="select-ticket-action">
                                <div class="ticket-price">USD $ {{$eventDescription->ticketfee}}</div>

                            </div>


                            <div class="booking-btn">
                                <a href="{{url('eventregister-checkout/'.$eventDescription->id)}}"
                                    class="main-btn btn-hover w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="more-events">
                        <div class="main-title position-relative">
                            <h3>More Events</h3>
                            <a href="explore_events.html" class="view-all-link">Browse All<i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                        <div class="owl-carousel moreEvents-slider owl-theme">
                            @foreach($relatedevents as $item)
                            <div class="item">
                                <div class="main-card mt-4">
                                    <div class="event-thumbnail">
                                        <a href="{{url('event-description/'.$item->id)}}" class="thumbnail-img">
                                            <img src="{{$item->thumbnail}}" alt="">
                                        </a>
                                        <span class="bookmark-icon" title="Bookmark"></span>
                                    </div>
                                    <div class="event-content">
                                        <a href="{{url('event-description/'.$item->id)}}"
                                            class="event-title">{{$item->title}}</a>
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
                                            <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
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
</div>

<script>
function decreaseCount(event, element) {
    event.preventDefault();
    var quantityInput = document.getElementById('ticketQuantity');
    var currentQuantity = parseInt(quantityInput.value, 10);

    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
        updateTotalPrice();
    }
}


function increaseCount(event, element) {
    event.preventDefault();
    var quantityInput = document.getElementById('ticketQuantity');
    var currentQuantity = parseInt(quantityInput.value, 10);
    quantityInput.value = currentQuantity + 1;
    updateTotalPrice();
}


function updateTotalPrice() {
    var ticketFee = parseFloat(document.querySelector('.ticket-price').innerText.replace('USD $ ', ''));
    var quantity = parseInt(document.getElementById('ticketQuantity').value, 10);
    var totalPrice = ticketFee * quantity;
    alert(totalPrice);
    document.getElementById('totalPrice').innerText = '$' + totalPrice.toFixed(2);
}


document.querySelector('.down').addEventListener('click', function(event) {
    decreaseCount(event, this);
});

document.querySelector('.up').addEventListener('click', function(event) {
    increaseCount(event, this);
});
</script>
<script>
let progress = 0;
const initialProgress = 600;
const totalProgress = 1200;
const progressBar = document.getElementById('myProgressBar');
const progressLabel = document.getElementById('progressLabel');

function updateProgress() {
    if (progress <= initialProgress) {
        progressBar.style.width = `${(progress / totalProgress) * 100}%`;
        progressLabel.textContent = `${progress} / ${totalProgress}`;
        progress += 10;
        setTimeout(updateProgress, 50);
    }
}


updateProgress();
</script>

@endsection