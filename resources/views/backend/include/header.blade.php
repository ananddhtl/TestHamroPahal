<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hamro Pahal - Admin Dashboard</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/unicons-2.0.1/css/unicons.css')}}" rel='stylesheet'>
    <link href="{{asset('hamropahal/html/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/css/vertical-responsive-menu.min.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/css/analytics.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/css/night-mode.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/unicons-2.0.1/css/unicons.css')}}" rel='stylesheet'>
    <link href="{{asset('hamropahal/html/css/datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/css/jquery-steps.css')}}" rel="stylesheet">




    <!-- Vendor Stylesheets -->
    <link href="{{asset('hamropahal/html/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css')}}"
        rel="stylesheet">
    <link href="{{asset('hamropahal/html/vendor/ckeditor5/sample/css/sample.css')}}" rel="stylesheet">


</head>

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
                                    <a class="nav-link" href="/">
                                        <i class="fa-solid fa-right-left me-2"></i>My Home
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
                                        <a href="/logoutuser" class="link-item">Sign Out</a>
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