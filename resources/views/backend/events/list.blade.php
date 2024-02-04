@include('backend.include.header')
@if(session('message'))
<div class="sweetmessage">
    <p>{{ session('message') }}</p>
</div>
@endif
<body class="d-flex flex-column h-100">
    
 
    <!-- Header Start-->
    <header class="header">
        <div class="header-inner">
            <nav
                class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0 ps-lg-0 pe-2">
                <div class="container-fluid ps-0">
                    <button type="button" id="toggleMenu" class="toggle_menu">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <button id="collapse_menu" class="collapse_menu me-4">
                        <i class="fa-solid fa-bars collapse_menu--icon "></i>
                        <span class="collapse_menu--label"></span>
                    </button>
                    <button class="navbar-toggler order-3 ms-2 pe-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </button>
                    <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
                        <div class="res-main-logo">
                            <img src="images/logo-icon.svg" alt="">
                        </div>
                        <div class="main-logo" id="logo">
                            <img src="images/logo.svg" alt="">
                            <img class="logo-inverse" src="images/dark-logo.svg" alt="">
                        </div>
                    </a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                                <img src="images/logo-icon.svg" alt="">
                            </div>
                            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                           
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                                <li class="nav-item">
                                    <a class="nav-link" href="organiser_profile_view.html">
                                        <i class="fa-solid fa-right-left me-2"></i>My Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="explore_events.html">
                                        <i class="fa-solid fa-compass me-2"></i>Explore Events
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-footer">
                            <div class="offcanvas-social">
                                <h5>Follow Us</h5>
                                <ul class="social-links">
                                    <li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right-header order-2">
                        <ul class="align-self-stretch">
                            
                            <li class="dropdown account-dropdown order-3">
                                <a href="#" class="account-link" role="button" id="accountClick"
                                    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/profile-imgs/img-13.jpg" alt="">
                                    <i class="fas fa-caret-down arrow-icon"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end"
                                    aria-labelledby="accountClick">
                                    <li>
                                        <div class="dropdown-account-header">
                                            <div class="account-holder-avatar">
                                                <img src="images/profile-imgs/img-13.jpg" alt="">
                                            </div>
                                            <h5>John Doe</h5>
                                            <p>johndoe@example.com</p>
                                        </div>
                                    </li>
                                    <li class="profile-link">
                                        <a href="organiser_profile_view.html" class="link-item">My Profile</a>
                                        <a href="sign_in.html" class="link-item">Sign Out</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="night_mode_switch__btn">
                                    <div id="night-mode" class="fas fa-moon fa-sun"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="overlay"></div>
        </div>
    </header>
    <!-- Header End-->
    <!-- Left Sidebar Start -->
    @include('backend.include.sidebar')
    <!-- Left Sidebar End -->
    <!-- Body Start -->
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-calendar-days me-3"></i>Events</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mt-5">
                            <div class="dashboard-wrap-content p-4">
                                <h5 class="mb-4">Events (1)</h5>
                                <div class="d-md-flex flex-wrap align-items-center">
                                    <div class="dashboard-date-wrap">
                                        <div class="form-group">
                                            <form action="{{url('/admin-eventdescription')}}" method="GET">
                                                @csrf
                                                <div class="relative-input position-relative">
                                                    <input class="form-control h_40" type="text" name="title"
                                                        placeholder="Search by event name, status" value="">
                                                    <i class="uil uil-search"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs ms-auto mt_r4">
                                        <div class="nav custom2-tabs btn-group" role="tablist">
                                            
                                            <a href="/admin-addeventdescription"><button class="tab-link active" data-bs-toggle="modal"
                                                data-bs-target="#couponModal">Create Event</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-list">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
                                    @foreach($list as $item)
                                    <div class="main-card mt-4">

                                        <div class="contact-list">
                                            <div
                                                class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                <div class="d-md-flex align-items-center event-top-info">
                                                    <div class="card-event-img">
                                                        <img src="{{$item->thumbnail}}" alt="">
                                                    </div>
                                                    <div class="card-event-dt">
                                                        <h5>{{$item->title}}</h5>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="fa-solid fa-ellipsis-vertical"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ url('edit-eventsdata/' . $item->id ) }}" class="dropdown-item"><i
                                                                class="fa-solid fa-gear me-3"></i>Edit</a> 
                                                        
                                                        <form action="{{ url('destroy-eventsdata/' . $item->id ) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"><a
                                                                    class="dropdown-item delete-event"><i
                                                                        class="fa-solid fa-trash-can me-3"></i>Delete</a></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                <div class="icon-box ">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <p>Status</p>
                                                    <h6 class="coupon-status">Publish</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <p>Starts on</p>
                                                    <h6 class="coupon-status">{{$item->date}}&nbsp;{{$item->time}}</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </span>
                                                    <p>Total Funding</p>
                                                    <h6 class="coupon-status">{{$item->totaltargetfund}}</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-tag"></i>
                                                    </span>
                                                    <p>Location</p>
                                                    <h6 class="coupon-status">{{$item->location}}</h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                                <div class="tab-pane fade" id="online-tab" role="tabpanel">
                                    <div class="main-card d-none mt-4">
                                        <div
                                            class="d-flex align-items-center justify-content-center flex-column min-height-430">
                                            <div class="event-list-icon">
                                                <img src="images/calendar.png" alt="">
                                            </div>
                                            <p class="font-16 mt-4 text-light3">No Event found</p>
                                        </div>
                                    </div>
                                    <div class="main-card mt-4">
                                        <div class="contact-list">
                                            <div
                                                class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                <div class="d-md-flex align-items-center event-top-info">
                                                    <div class="card-event-img">
                                                        <img src="images/event-imgs/img-2.jpg" alt="">
                                                    </div>
                                                    <div class="card-event-dt">
                                                        <h5>Earrings Workshop with Bronwyn David</h5>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="fa-solid fa-ellipsis-vertical"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i
                                                                class="fa-solid fa-gear me-3"></i>Manage</a>
                                                        <a href="#" class="dropdown-item"><i
                                                                class="fa-solid fa-eye me-3"></i>Preview Event</a>
                                                        <a href="#" class="dropdown-item"><i
                                                                class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                        <form action="{{ url('/destroy-eventsdata . $item->id ') }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"><a
                                                                    class="dropdown-item delete-event"><i
                                                                        class="fa-solid fa-trash-can me-3"></i>Delete</a></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                <div class="icon-box ">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <p>Status</p>
                                                    <h6 class="coupon-status">Publish</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <p>Starts on</p>
                                                    <h6 class="coupon-status">30 Jun, 2022 10:00 AM</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </span>
                                                    <p>Ticket</p>
                                                    <h6 class="coupon-status">250</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-tag"></i>
                                                    </span>
                                                    <p>Tickets sold</p>
                                                    <h6 class="coupon-status">20</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="venue-tab" role="tabpanel">
                                    <div class="main-card mt-4">
                                        <div class="contact-list">
                                            <div
                                                class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                <div class="d-md-flex align-items-center event-top-info">
                                                    <div class="card-event-img">
                                                        <img src="images/event-imgs/img-7.jpg" alt="">
                                                    </div>
                                                    <div class="card-event-dt">
                                                        <h5>Tutorial on Canvas Painting for Beginners</h5>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="fa-solid fa-ellipsis-vertical"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i
                                                                class="fa-solid fa-gear me-3"></i>Manage</a>
                                                        <a href="#" class="dropdown-item"><i
                                                                class="fa-solid fa-eye me-3"></i>Preview Event</a>
                                                        <a href="#" class="dropdown-item"><i
                                                                class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                        <a href="#" class="dropdown-item delete-event"><i
                                                                class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                <div class="icon-box ">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <p>Status</p>
                                                    <h6 class="coupon-status">Publish</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <p>Starts on</p>
                                                    <h6 class="coupon-status">30 Jun, 2022 10:00 AM</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </span>
                                                    <p>Ticket</p>
                                                    <h6 class="coupon-status">250</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-tag"></i>
                                                    </span>
                                                    <p>Tickets sold</p>
                                                    <h6 class="coupon-status">20</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(err => {
            console.error(err.stack);
        });
    </script>
    <!-- Body End -->
    @include('backend.include.footer')