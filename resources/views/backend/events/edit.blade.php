@include('backend.include.header')

<body class="d-flex flex-column h-100">
    <!-- Header Start-->
    <header class="header">
        <div class="header-inner">
            <nav
                class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
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
                            <div class="offcanvas-top-area">
                                <div class="create-bg">
                                    <a href="create.html" class="offcanvas-create-btn">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>Create Event</span>
                                    </a>
                                </div>
                            </div>
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Explore Events
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a class="dropdown-item" href="explore_events.html">Explore Events</a></li>
                                        <li><a class="dropdown-item" href="venue_event_detail_view.html">Venue Event
                                                Detail View</a></li>
                                        <li><a class="dropdown-item" href="online_event_detail_view.html">Online Event
                                                Detail View</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pricing.html">Pricing</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a class="dropdown-item" href="our_blog.html">Our Blog</a></li>
                                        <li><a class="dropdown-item" href="blog_detail_view.html">Blog Detail View</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Help
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                        <li><a class="dropdown-item" href="help_center.html">Help Center</a></li>
                                        <li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item submenu-item" href="#">Other Pages</a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item pe-5" href="sign_in.html">Sign In</a></li>
                                                <li><a class="dropdown-item pe-5" href="sign_up.html">Sign Up</a></li>
                                                <li><a class="dropdown-item pe-5" href="forgot_password.html">Forgot
                                                        Password</a></li>
                                                <li><a class="dropdown-item pe-5" href="about_us.html">About Us</a></li>
                                                <li><a class="dropdown-item pe-5" href="checkout.html">Checkout</a></li>
                                                <li><a class="dropdown-item pe-5" href="checkout_premium.html">Checkout
                                                        Premium</a></li>
                                                <li><a class="dropdown-item pe-5" href="invoice.html">Invoice</a></li>
                                                <li><a class="dropdown-item pe-5" href="coming_soon.html">Coming
                                                        Soon</a></li>
                                                <li><a class="dropdown-item pe-5" href="error_404.html">Error 404</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item submenu-item" href="#">Create Event</a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item pe-5" href="create.html">Create</a></li>
                                                <li><a class="dropdown-item pe-5" href="create_venue_event.html">Create
                                                        Venue Event</a></li>
                                                <li><a class="dropdown-item pe-5" href="create_online_event.html">Create
                                                        Online Event</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item submenu-item" href="#">Events View</a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item pe-5"
                                                        href="online_event_detail_view.html">Online Event Detail
                                                        View</a></li>
                                                <li><a class="dropdown-item pe-5"
                                                        href="venue_event_detail_view.html">Venue Event Detail View</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="booking_confirmed.html">Booking Confirmed</a>
                                        </li>
                                        <li><a class="dropdown-item" href="attendee_profile_view.html">Attendee Profile
                                                View</a></li>
                                        <li><a class="dropdown-item" href="organiser_profile_view.html">Organiser
                                                Profile View</a></li>
                                        <li><a class="dropdown-item" href="my_organisation_dashboard.html">Organization
                                                Dashboard</a></li>
                                        <li><a class="dropdown-item" href="sell_tickets_online.html">Sell Tickets
                                                Online</a></li>
                                        <li><a class="dropdown-item" href="refer_a_friend.html">Refer a Friend</a></li>
                                        <li><a class="dropdown-item" href="term_and_conditions.html">Terms &
                                                Conditions</a></li>
                                        <li><a class="dropdown-item" href="privacy_policy.html">Privacy Policy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-footer">
                            <div class="offcanvas-social">
                                <h5>Follow Us</h5>
                                <ul class="social-links">
                                    <li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
                                    <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                    <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                    <li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                    <li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right-header order-2">
                        <ul class="align-self-stretch">
                            <li>
                                <a href="create.html" class="create-btn btn-hover">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>Create Event</span>
                                </a>
                            </li>
                            <li class="dropdown account-dropdown">
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
                                        <a href="my_organisation_dashboard.html" class="link-item">My Organisation</a>
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
    <!-- Body Start-->
    <div class="wrapper">
        <div class="breadcrumb-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10">
                        <div class="barren-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="create.html">Edit</a></li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-dt-block p-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="main-title text-center">
                            <h3>Edit Event</h3>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-md-12">
                        <div class="wizard-steps-block">
                            <div id="add-event-tab" class="step-app">
                                <ul class="step-steps">
                                    <li class="active">
                                        <a href="#tab_step1">

                                        </a>
                                    </li>

                                </ul>
                                <div class="step-content">
                                    <div class="step-tab-panel step-tab-info active" id="tab_step1">
                                        <div class="tab-from-content">
                                            <div class="main-card">
                                                <div class="bp-title">
                                                    <h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Edit Event
                                                        Description
                                                    </h4>
                                                </div>
                                                <div class="p-4 bp-form main-form">
                                                    <div class="row">
                                                        <form id="eventForm" action="{{ url('/update-eventsdata/' . $editEvents->id) }}"

                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Event Name.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="text"
                                                                        name="title" value="{{$editEvents->title}}" placeholder="Enter event name here"
                                                                        value="">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Location.*
                                                                    </label>

                                                                    <input class="form-control h_50" name="location"
                                                                        type="text"  placeholder="Enter location"
                                                                        value="{{$editEvents->location}}">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Organized By.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="text"
                                                                        placeholder="Enter organizer"
                                                                        name="organized_by" value="{{$editEvents->organized_by}}">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Ticket Fee.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="text"
                                                                        placeholder="Enter ticket fee"  name="ticketfee"
                                                                        value="{{$editEvents->ticketfee}}">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Total Target Fund.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="text"
                                                                        placeholder="Enter Target Fund"
                                                                        name="totaltargetfund" value="{{$editEvents->totaltargetfund}}">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Thumbnail.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="file"
                                                                        placeholder="Enter organizer" name="thumbnail"
                                                                        value="">
                                                                        <img src="{{$editEvents->thumbnail}}" height="100px" width="140px">
                                                                </div>



                                                                <div class="form-group border_bottom  pb_30">

                                                                    <div class="row g-2">
                                                                        <div class="col-md-6">
                                                                            <label class="form-label mt-3 fs-6">Event
                                                                                Date.*</label>
                                                                            <div class="loc-group position-relative">
                                                                                <input
                                                                                    class="form-control h_50 datepicker-here"
                                                                                    data-language="en" type="text"
                                                                                    placeholder="MM/DD/YYYY" value="{{$editEvents->date}}"
                                                                                    name="date">
                                                                                <span class="absolute-icon"><i
                                                                                        class="fa-solid fa-calendar-days"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row g-2">
                                                                                <div class="col-md-6">
                                                                                    <div class="clock-icon">
                                                                                        <label
                                                                                            class="form-label mt-3 fs-6">Time</label>
                                                                                        <select name="time" value="{{$editEvents->time}}"
                                                                                            class="selectpicker"
                                                                                            data-size="5"
                                                                                            data-live-search="true">
                                                                                            <option value="00:00">12:00
                                                                                                AM</option>
                                                                                            <option value="00:15">12:15
                                                                                                AM</option>
                                                                                            <option value="00:30">12:30
                                                                                                AM</option>
                                                                                            <option value="00:45">12:45
                                                                                                AM</option>
                                                                                            <option value="01:00">01:00
                                                                                                AM</option>
                                                                                            <option value="01:15">01:15
                                                                                                AM</option>
                                                                                            <option value="01:30">01:30
                                                                                                AM</option>
                                                                                            <option value="01:45">01:45
                                                                                                AM</option>
                                                                                            <option value="02:00">02:00
                                                                                                AM</option>
                                                                                            <option value="02:15">02:15
                                                                                                AM</option>
                                                                                            <option value="02:30">02:30
                                                                                                AM</option>
                                                                                            <option value="02:45">02:45
                                                                                                AM</option>
                                                                                            <option value="03:00">03:00
                                                                                                AM</option>
                                                                                            <option value="03:15">03:15
                                                                                                AM</option>
                                                                                            <option value="03:30">03:30
                                                                                                AM</option>
                                                                                            <option value="03:45">03:45
                                                                                                AM</option>
                                                                                            <option value="04:00">04:00
                                                                                                AM</option>
                                                                                            <option value="04:15">04:15
                                                                                                AM</option>
                                                                                            <option value="04:30">04:30
                                                                                                AM</option>
                                                                                            <option value="04:45">04:45
                                                                                                AM</option>
                                                                                            <option value="05:00">05:00
                                                                                                AM</option>
                                                                                            <option value="05:15">05:15
                                                                                                AM</option>
                                                                                            <option value="05:30">05:30
                                                                                                AM</option>
                                                                                            <option value="05:45">05:45
                                                                                                AM</option>
                                                                                            <option value="06:00">06:00
                                                                                                AM</option>
                                                                                            <option value="06:15">06:15
                                                                                                AM</option>
                                                                                            <option value="06:30">06:30
                                                                                                AM</option>
                                                                                            <option value="06:45">06:45
                                                                                                AM</option>
                                                                                            <option value="07:00">07:00
                                                                                                AM</option>
                                                                                            <option value="07:15">07:15
                                                                                                AM</option>
                                                                                            <option value="07:30">07:30
                                                                                                AM</option>
                                                                                            <option value="07:45">07:45
                                                                                                AM</option>
                                                                                            <option value="08:00">08:00
                                                                                                AM</option>
                                                                                            <option value="08:15">08:15
                                                                                                AM</option>
                                                                                            <option value="08:30">08:30
                                                                                                AM</option>
                                                                                            <option value="08:45">08:45
                                                                                                AM</option>
                                                                                            <option value="09:00">09:00
                                                                                                AM</option>
                                                                                            <option value="09:15">09:15
                                                                                                AM</option>
                                                                                            <option value="09:30">09:30
                                                                                                AM</option>
                                                                                            <option value="09:45">09:45
                                                                                                AM</option>
                                                                                            <option value="10:00"
                                                                                                selected="selected">
                                                                                                10:00 AM</option>
                                                                                            <option value="10:15">10:15
                                                                                                AM</option>
                                                                                            <option value="10:30">10:30
                                                                                                AM</option>
                                                                                            <option value="10:45">10:45
                                                                                                AM</option>
                                                                                            <option value="11:00">11:00
                                                                                                AM</option>
                                                                                            <option value="11:15">11:15
                                                                                                AM</option>
                                                                                            <option value="11:30">11:30
                                                                                                AM</option>
                                                                                            <option value="11:45">11:45
                                                                                                AM</option>
                                                                                            <option value="12:00">12:00
                                                                                                PM</option>
                                                                                            <option value="12:15">12:15
                                                                                                PM</option>
                                                                                            <option value="12:30">12:30
                                                                                                PM</option>
                                                                                            <option value="12:45">12:45
                                                                                                PM</option>
                                                                                            <option value="13:00">01:00
                                                                                                PM</option>
                                                                                            <option value="13:15">01:15
                                                                                                PM</option>
                                                                                            <option value="13:30">01:30
                                                                                                PM</option>
                                                                                            <option value="13:45">01:45
                                                                                                PM</option>
                                                                                            <option value="14:00">02:00
                                                                                                PM</option>
                                                                                            <option value="14:15">02:15
                                                                                                PM</option>
                                                                                            <option value="14:30">02:30
                                                                                                PM</option>
                                                                                            <option value="14:45">02:45
                                                                                                PM</option>
                                                                                            <option value="15:00">03:00
                                                                                                PM</option>
                                                                                            <option value="15:15">03:15
                                                                                                PM</option>
                                                                                            <option value="15:30">03:30
                                                                                                PM</option>
                                                                                            <option value="15:45">03:45
                                                                                                PM</option>
                                                                                            <option value="16:00">04:00
                                                                                                PM</option>
                                                                                            <option value="16:15">04:15
                                                                                                PM</option>
                                                                                            <option value="16:30">04:30
                                                                                                PM</option>
                                                                                            <option value="16:45">04:45
                                                                                                PM</option>
                                                                                            <option value="17:00">05:00
                                                                                                PM</option>
                                                                                            <option value="17:15">05:15
                                                                                                PM</option>
                                                                                            <option value="17:30">05:30
                                                                                                PM</option>
                                                                                            <option value="17:45">05:45
                                                                                                PM</option>
                                                                                            <option value="18:00">06:00
                                                                                                PM</option>
                                                                                            <option value="18:15">06:15
                                                                                                PM</option>
                                                                                            <option value="18:30">06:30
                                                                                                PM</option>
                                                                                            <option value="18:45">06:45
                                                                                                PM</option>
                                                                                            <option value="19:00">07:00
                                                                                                PM</option>
                                                                                            <option value="19:15">07:15
                                                                                                PM</option>
                                                                                            <option value="19:30">07:30
                                                                                                PM</option>
                                                                                            <option value="19:45">07:45
                                                                                                PM</option>
                                                                                            <option value="20:00">08:00
                                                                                                PM</option>
                                                                                            <option value="20:15">08:15
                                                                                                PM</option>
                                                                                            <option value="20:30">08:30
                                                                                                PM</option>
                                                                                            <option value="20:45">08:45
                                                                                                PM</option>
                                                                                            <option value="21:00">09:00
                                                                                                PM</option>
                                                                                            <option value="21:15">09:15
                                                                                                PM</option>
                                                                                            <option value="21:30">09:30
                                                                                                PM</option>
                                                                                            <option value="21:45">09:45
                                                                                                PM</option>
                                                                                            <option value="22:00">10:00
                                                                                                PM</option>
                                                                                            <option value="22:15">10:15
                                                                                                PM</option>
                                                                                            <option value="22:30">10:30
                                                                                                PM</option>
                                                                                            <option value="22:45">10:45
                                                                                                PM</option>
                                                                                            <option value="23:00">11:00
                                                                                                PM</option>
                                                                                            <option value="23:15">11:15
                                                                                                PM</option>
                                                                                            <option value="23:30">11:30
                                                                                                PM</option>
                                                                                            <option value="23:45">11:45
                                                                                                PM</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Please describe your
                                                                        event.</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">Write a few words
                                                                        below to describe your event and provide any
                                                                        extra
                                                                        information such as schedules, itinerary or any
                                                                        special instructions required to attend your
                                                                        event.
                                                                    </p>
                                                                    <div class="text-editor mt-4">
                                                                        <textarea name="description"
                                                                            id="pd_editor">{{$editEvents->description}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <button id="submitForm"
                                                                        class="btn btn-default btn-hover steps_btn">Update</button>
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Body End-->
    <!-- Footer Start-->

    <!-- Footer End-->

    @include('backend.include.footer')

    <script>
    $('#add-event-tab').steps({
        onFinish: function() {
            alert('Wizard Completed');
        }
    });
    </script>
    <script>
    ClassicEditor
        .create(document.querySelector('#pd_editor'), {
            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(err => {
            console.error(err.stack);
        });
    </script>



    <script>
    $(document).ready(function() {
        $("#submitForm").click(function() {

            var editor = CKEDITOR.instances
                .pd_editor;
            var editorContent = editor.getData();


            $("#eventDescription").val(editorContent);


            $.ajax({
                type: "POST",
                url: "{{ url('/store-eventsdata') }}",
                data: $("#eventForm")
                    .serialize(),
                success: function(response) {

                }
            });
        });
    });
    </script>


</body>

</html>