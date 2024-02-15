@if (session('message'))
    <div class="sweetmessage">
        <p>{{ session('message') }}</p>
    </div>
@endif
<style>
    .custom-height {
        height: 50px;
    }
</style>
@extends('welcome')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="wrapper">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('hamropahal/html/images/banner.jpg') }}" class="d-block w-100" src="..."
                        alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slider 1</h5>
                        <p>Description for Slider 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hamropahal/html/images/slider1.jpg') }}" class="d-block w-100" src="..."
                        alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slider 2</h5>
                        <p>Description for Slider 2</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hamropahal/html/images/slider2.jpg') }}" class="d-block w-100" src="..."
                        alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slider 2</h5>
                        <p>Description for Slider 2</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="main-title checkout-title">
                            <h3>About US <br> How we help</h3>
                        </div>
                        <div class="about--description">
                            <p>Our primary purpose at UNHDP is to safeguard the rights and well-being of people who have
                                been forced to flee. Together with partners and communities, we work to ensure that
                                everybody has the right to seek asylum and find safe refuge in another country. We also
                                strive to secure lasting solutions. For over half a century, UNHDP has helped millions of
                                people to restart their lives. They include refugees, returnees, stateless people, the
                                internally displaced and asylum-seekers. Our protection, shelter, health and education has
                                been crucial, healing broken pasts and building brighter futures.</p>

                        </div>

                        <div class="main-title checkout-title">
                            <h3><br> How we help</h3>
                        </div>
                        <div class="about--description">
                            <p>Our primary purpose at UNHDP is to safeguard the rights and well-being of people who have
                                been forced to flee. Together with partners and communities, we work to ensure that
                                everybody has the right to seek asylum and find safe refuge in another country. We also
                                strive to secure lasting solutions. For over half a century, UNHDP has helped millions of
                                people to restart their lives. They include refugees, returnees, stateless people, the
                                internally displaced and asylum-seekers. Our protection, shelter, health and education has
                                been crucial, healing broken pasts and building brighter futures.</p>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="main-title checkout-title text-center">
                            <h3>We are all about enriching communities​</h3>
                        </div>
                        <div class="communities-steps">
                            <div class="row">
                                <div class="col-lg-6 col-md-6" style="position: relative;">
                                    <a href="#"
                                        style="height: 250px; display: flex; justify-content: center; align-items: center;"
                                        class="main-card communities-item" data-bs-toggle="modal"
                                        data-bs-target="#communitieModal">
                                        <div class="communities-img" style="text-align: center;">
                                            <i class="fa-solid fa-user" style=" font-size:80px; margin-bottom: 10px;"></i>
                                            <p style="margin: 0; font-wight:bold;">Become a Volunteer</p>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-lg-6 col-md-6" style="position: relative;">
                                    <a href="#"
                                        style="height: 250px; display: flex; justify-content: center; align-items: center;"
                                        class="main-card communities-item" data-bs-toggle="modal"
                                        data-bs-target="#communitieModal">
                                        <div class="communities-img" style="text-align: center;">
                                            <i class="fa-solid fa-magnifying-glass-dollar"
                                                style=" font-size:80px; margin-bottom: 10px;"></i>
                                            <p style="margin: 0; font-wight:bold;">Quick Fundrais</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6" style="position: relative;">
                                    <a href="#"
                                        style="height: 250px; display: flex; justify-content: center; align-items: center;"
                                        class="main-card communities-item" data-bs-toggle="modal"
                                        data-bs-target="#communitieModal">
                                        <div class="communities-img" style="text-align: center;">
                                            <i class="fa-solid fa-circle-dollar-to-slot"
                                                style=" font-size:80px; margin-bottom: 10px;"></i>
                                            <p style="margin: 0; font-wight:bold;">Give Donation</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6" style="position: relative;">
                                    <a href="#"
                                        style="height: 250px; display: flex; justify-content: center; align-items: center;"
                                        class="main-card communities-item" data-bs-toggle="modal"
                                        data-bs-target="#communitieModal">
                                        <div class="communities-img" style="text-align: center;">
                                            <i class="fa-solid fa-handshake"
                                                style=" font-size:80px; margin-bottom: 10px;"></i>
                                            <p style="margin: 0; font-wight:bold;">Help Someone</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="host-engaging-event-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-title">
                            <h3>Host Engaging Online and Venue Events with Barren</h3>
                            <p>Organise venue events and host online events with unlimited possibilities using our built-in
                                virtual event platform. Build a unique event experience for you and your attendees.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="engaging-block">
                            <div class="owl-carousel engaging-slider owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-3234px, 0px, 0px); transition: all 0.8s ease 0s; width: 5929px;">
                                        <div class="owl-item cloned" style="width: 519px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="main-card">
                                                    <div
                                                        style="position: relative; padding-bottom: 56.25%; /* 16:9 aspect ratio */">
                                                        <iframe
                                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                                            src="https://www.youtube.com/embed/MK24OO1zgYc?si=08v177YaIwGwyVoI"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 519px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="main-card">
                                                    <div
                                                        style="position: relative; padding-bottom: 56.25%; /* 16:9 aspect ratio */">
                                                        <iframe
                                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                                            src="https://www.youtube.com/embed/MK24OO1zgYc?si=08v177YaIwGwyVoI"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 519px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="main-card">
                                                    <div
                                                        style="position: relative; padding-bottom: 56.25%; /* 16:9 aspect ratio */">
                                                        <iframe
                                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                                            src="https://www.youtube.com/embed/MK24OO1zgYc?si=08v177YaIwGwyVoI"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 519px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="main-card">
                                                    <div
                                                        style="position: relative; padding-bottom: 56.25%; /* 16:9 aspect ratio */">
                                                        <iframe
                                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                                            src="https://www.youtube.com/embed/MK24OO1zgYc?si=08v177YaIwGwyVoI"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev">←
                                </i></button><button
                                        type="button" role="presentation" class="owl-next"><i
                                            class="fa-solid fa-right-long"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    @foreach ($events as $item)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness"
                                            data-ref="mixitup-target">
                                            <div class="main-card mt-4">
                                                <div class="event-thumbnail">
                                                    <a href="{{ url('event-description/' . $item->id) }}"
                                                        class="thumbnail-img">
                                                        <img src="{{ $item->thumbnail }}" alt="">
                                                    </a>
                                                    <span class="bookmark-icon" title="Bookmark"></span>
                                                </div>
                                                <div class="event-content">
                                                    <a
                                                        href="{{ url('event-description/' . $item->id) }}"class="event-title">{{ $item->title }}</a>
                                                    <div class="duration-price-remaining">
                                                        <span class="duration-price">AUD $100.00*</span>
                                                        <span class="remaining"></span>
                                                    </div>
                                                </div>
                                                <div class="event-footer">
                                                    <div class="event-timing">
                                                        <div class="publish-date">
                                                            <span><i class="fa-solid fa-calendar-day me-2"></i>15
                                                                Apr</span>
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
        <div class="our-organisations-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title text-center">
                            <h3>Here's our Sponser's</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="organisations-area">
                            <div class="owl-carousel organisations-slider owl-theme owl-loaded owl-drag">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-1617px, 0px, 0px); transition: all 0.8s ease 0s; width: 4043px;">
                                        <div class="owl-item cloned" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-4.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-5.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-6.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-7.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-1.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-2.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-3.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-4.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 249.5px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="sponsor">
                                                    <a href="#"><img src="{{asset('hamropahal/html/images/icons/sponsor-5.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled"><button type="button" role="presentation"
                                        class="owl-prev"><span aria-label="Previous">←</span></button><button
                                        type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">→</span></button></div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
@endsection
