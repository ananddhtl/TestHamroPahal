<?php
//  dd(session()->get('sessionUserId'));
if (session()->get('sessionUserId') != "") {
    $user = \DB::table('users')
        ->select('*')
        ->where('password', session()->get('sessionUserId'))
        ->get();
    $id = $user[0]->user_id;
}
?>
<?php

use App\Models\Events;
$events = Events::get();

?>
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
                    <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="/">
                        <div class="res-main-logo">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </div>
                        <div class="main-logo" id="logo">
                            <img src="{{asset('images/logo.png')}}" alt="">
                            <img class="logo-inverse" src="{{asset('images/logo.png')}}" alt="">
                        </div>
                    </a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                           
                            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="offcanvas-top-area">
                                <div class="create-bg">
                                    @if(session()->get('sessionUserId') != "")
                                    @else
                                    <a href="/login" class="offcanvas-create-btn">
                                        
                                        <span>Login</span>
                                    </a><br>
                                    <a href="/register" class="offcanvas-create-btn">
                                        
                                        <span>Register</span>
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Explore Events
                                    </a>

                                    <ul class="dropdown-menu dropdown-submenu">
                                        @foreach($events as $item)
                                        <li><a class="dropdown-item" href="{{url('event-description/'.$item->id)}}">{{$item->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="/ourblog">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Help
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a class="dropdown-item" href="/faqs">FAQ</a></li>
                                        <li><a class="dropdown-item" href="help_center.html">Help Center</a></li>
                                        <li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contactus">Contact Us</a>
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
                            @if(session()->get('sessionUserId') != "")
                            <li class="dropdown account-dropdown">
                                <a href="#" class="account-link" role="button" id="accountClick"
                                    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('hamropahal/html/images/profile-imgs/img-13.jpg')}}" alt="">
                                    <i class="fas fa-caret-down arrow-icon"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end"
                                    aria-labelledby="accountClick">
                                    <li>
                                        <div class="dropdown-account-header">
                                            <div class="account-holder-avatar">
                                                <img src="{{asset('hamropahal/html/images/profile-imgs/img-13.jpg')}}"
                                                    alt="">
                                            </div>
                                            <h5>{{$user[0]->fullname}}</h5>
                                            <p>{{$user[0]->email_address}}</p>
                                        </div>
                                    </li>
                                    <li class="profile-link">
                                        <a href="/user-profile" class="link-item">My Profile</a>
                                        <a href="/logout-user" class="link-item">Sign Out</a>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li>
                                <a href="/login" class="create-btn btn-hover">
                                    <span>Login</span>
                                </a>
                                <a href="/register" class="create-btn btn-hover">
                                    <span>Register</span>
                                </a>
                            </li>
                            @endif
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