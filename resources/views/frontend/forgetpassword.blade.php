@include('frontend.include.header')

<body>
    <div class="form-wrapper">
        <div class="app-form">
            <div class="app-form-sidebar">
                <div class="sidebar-sign-logo">
                    <img src="images/sign-logo.svg" alt="">
                </div>
                <div class="sign_sidebar_text">
                    <h1>The Easiest Way to Create Events and Sell More Tickets Online</h1>
                </div>
            </div>
            <div class="app-form-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-10">
                            <div class="app-top-items">
                                <a href="index.html">
                                    <div class="sign-logo" id="logo">
                                        <img src="images/logo.svg" alt="">
                                        <img class="logo-inverse" src="images/dark-logo.svg" alt="">
                                    </div>
                                </a>
                                <div class="app-top-right-link">
                                    <a class="sidebar-register-link" href="sign_in.html"><i
                                            class="fa-regular fa-circle-left me-2"></i>Back to sign in</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-7">
                            <div class="registration">
                                <form action="{{ url('/user-submitemail') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <h2 class="registration-title">Forgot Password</h2>
                                    <div class="form-group mt-5">
                                        <label class="form-label">Your Email*</label>
                                        <input class="form-control h_50" type="email" name="email_address" placeholder="Enter your email"
                                            value="">
                                        @if ($errors->any())
                                        <div class="text-danger">{{ $errors->first() }}</div>
                                        @endif
                                    </div>
                                    <button class="main-btn btn-hover w-100 mt-4" type="submit">Reset Password</button>
                                </form>
                                <div class="new-sign-link">
                                    <a class="signup-link" href="sign_in.html"><i
                                            class="fa-regular fa-circle-left me-2"></i>Back to sign in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-footer">
                    © 2022, Barren. All rights reserved. Powered by Gambolthemes
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('hamropahal/html/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('hamropahal/html/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('hamropahal/html/vendor/OwlCarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('hamropahal/html/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('hamropahal/html/js/custom.js')}}"></script>
    <script src="{{asset('hamropahal/html/js/night-mode.js')}}"></script>

</body>

</html>