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
                            <li>
                                <a href="create.html" class="create-btn btn-hover">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>Create Event</span>
                                </a>
                            </li>
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
                            <h3><i class="fa-solid fa-chart-pie me-3"></i>Reports</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mt-5">
                            <div class="dashboard-wrap-content p-4">

                                <div class="d-md-flex flex-wrap align-items-center">
                                    <div class="dashboard-date-wrap mt-4">
                                        <div class="form-group">
                                            <div class="relative-input position-relative">
                                                <input class="form-control h_40" type="text"
                                                    placeholder="Search by name" value="">
                                                <i class="uil uil-search"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="main-form mt-4">
                                    <div class="row g-3">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <select class="selectpicker" data-size="5" data-live-search="true">
                                                    <option value="all events" selected>All Events</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-list">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="orders-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">S.N.</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Location</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Organized By</th>
                                                            <th scope="col">Total Target Fund</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($list as $key => $item)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td><a href="{{ url('/admin-eventattendes/' . $item->id) }}">{{ $item->title }}</a></td>

                                                            <td>{{ $item->location }}</td>
                                                            <td>{{ $item->date }} {{ $item->time }}</td>
                                                            <td>{{ $item->organized_by }}</td>
                                                            <td>{{ $item->totaltargetfund }}</td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="customers-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email address</th>
                                                            <th scope="col">Address</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2356</td>
                                                            <td>Larry Paige</td>
                                                            <td>larry@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne,
                                                                Victoria, 3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2355</td>
                                                            <td>John Cena</td>
                                                            <td>johncena@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne,
                                                                Victoria, 3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2354</td>
                                                            <td>Jassica William</td>
                                                            <td>jassica@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne,
                                                                Victoria, 3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2353</td>
                                                            <td>Rock William</td>
                                                            <td>rockwilliam@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne,
                                                                Victoria, 3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2352</td>
                                                            <td>Gleen Smith</td>
                                                            <td>gleensmith@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne,
                                                                Victoria, 3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2351</td>
                                                            <td>John Doe</td>
                                                            <td>johndoe@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne,
                                                                Victoria, 3000, Australia</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tickets-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Reference ID</th>
                                                            <th scope="col">Customer Name</th>
                                                            <th scope="col">Email Address</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2356</td>
                                                            <td>F6ACCM-R76MTK-1434658508</td>
                                                            <td>Larry Paige</td>
                                                            <td>larry@example.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2355</td>
                                                            <td>F6ACCM-R76MTK-1434658508</td>
                                                            <td>Gleen William</td>
                                                            <td>gleenwilliam@example.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2354</td>
                                                            <td>F6ACCM-R76MTK-1434658508</td>
                                                            <td>Rock Smith</td>
                                                            <td>rocksmith@example.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2353</td>
                                                            <td>F6ACCM-R76MTK-1434658508</td>
                                                            <td>John Cena</td>
                                                            <td>johncena@example.com</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="payouts-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Remittance ID</th>
                                                            <th scope="col">Remittance Date</th>
                                                            <th scope="col">Date Paid</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Transaction ID</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>12475</td>
                                                            <td>28/1.04/2022</td>
                                                            <td>26/04/2022</td>
                                                            <td>22/04/2022</td>
                                                            <td>TXR21234123UX</td>
                                                            <td><a href="#" class="a-link">Download</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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