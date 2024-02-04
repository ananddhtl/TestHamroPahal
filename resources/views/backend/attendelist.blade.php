@include('backend.include.header')
@if(session('message'))
<div class="sweetmessage">
    <p>{{ session('message') }}</p>
</div>
@endif

<body class="d-flex flex-column h-100">
    <div class="modal fade" id="inviteTeamModal" tabindex="-1" aria-labelledby="inviteTeamModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inviteTeamModalLabel">List Refrence Users</h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="model-content main-form">


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="co-main-btn min-width btn-hover h_40"
                        data-bs-dismiss="modal">Cancel</button>

                </div>
            </div>

        </div>
    </div>

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
                            <h3><i class="fa-solid fa-chart-pie me-3"></i>Event Attend List Report</h3>
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
                                                            <th scope="col">Full Name</th>
                                                            <th scope="col">Contact Number</th>
                                                            <th scope="col">Email Address</th>
                                                            <th scope="col">Address </th>
                                                            <th scope="col">City</th>
                                                            <th scope="col">Zip Code</th>
                                                            <th scope="col">Refrence Users</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($list as $key => $item)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $item->fullname }}</td>
                                                            <td>{{ $item->contact_number }}</td>
                                                            <td>{{ $item->email_address }}</td>
                                                            <td>{{ $item->address }}</td>
                                                            <td>{{ $item->city }}</td>
                                                            <td>{{ $item->zipcode }}</td>
                                                            <td>
                                                                <button class="main-btn btn-hover h_40 w-100"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#inviteTeamModal"
                                                                    data-tcode="{{ $item->tCode }}"
                                                                    onclick="getrefrenceusers()">
                                                                    <i class="fa-solid fa-eye"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="7">No attendees for this event</td>
                                                        </tr>
                                                        @endforelse

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
    <script>
    function getrefrenceusers() {
        var tCode = $('.main-btn').data('tcode');

        $.ajax({
            type: 'GET',
            url: '/getrefrenceusers/' + tCode,
            success: function(data) {
                $('.model-content').html('');

                if (data.referenceUsers.length > 0) {
                    var tableHtml =
                        '<table class="table"><thead><tr><th>Name</th><th>Email</th></tr></thead><tbody>';

                    data.referenceUsers.forEach(function(referenceUser) {
                        tableHtml += '<tr><td>' + referenceUser.fullname + '</td><td>' +
                            referenceUser.email + '</td></tr>';
                    });

                    tableHtml += '</tbody></table>';
                    $('.model-content').html(tableHtml);
                } else {
                    $('.model-content').html('<p>No reference users found</p>');
                }
            },
            error: function(error) {
                console.log('Error fetching reference users:', error);
            }
        });
    }
    </script>
    @include('backend.include.footer')