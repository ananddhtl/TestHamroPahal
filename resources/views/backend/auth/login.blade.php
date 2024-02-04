@include('frontend.include.header')

@if(session('message'))
<div class="sweetmessage">

    <p>{{ session('message') }}</p>
</div>
@endif
<body>
    <div class="form-wrapper">
        <div class="app-form">
            <div class="app-form-sidebar">
                <div class="sidebar-sign-logo">
                    <img src="images/sign-logo.svg" alt="">
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
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-7">
                            <div class="registration">
                                <form action="{{url('/store-adminlogin')}}" method="POST">
                                    @csrf
                                    <h2 class="registration-title">Admin Login</h2>
                                    <div class="form-group mt-5">
                                        <label class="form-label">Your Email*</label>
                                        <input class="form-control h_50" type="email" name="email"
                                            placeholder="Enter your email" value="{{ old('email_address') }}">
                                        @error('email_address')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-4">
                                        <div class="field-password">
                                            <label class="form-label">Password*</label>
                                            <a class="forgot-pass-link" href="/forget-password">Forgot Password?</a>
                                        </div>
                                        <div class="loc-group position-relative">
                                            <input class="form-control h_50" type="password" name="password"
                                                placeholder="Enter your password" value="{{ old('password') }}">
                                            @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                        </div>
                                    </div>
                                    <button class="main-btn btn-hover w-100 mt-4" type="submit">Sign In <i
                                            class="fas fa-sign-in-alt ms-2"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
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