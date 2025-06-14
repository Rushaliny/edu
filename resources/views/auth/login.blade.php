<x-auth-layout>
    @section('auth-content')


    <div class="row">

        <div class="col-md-6 login-bg">
            <div class="owl-carousel login-slide owl-theme">
                <div class="welcome-login">
                    <div class="login-banner">
                        <img src="{{ asset('web_assets/img/login-img.png') }}" class="img-fluid" alt="Logo">
                    </div>
                    <div class="mentor-course text-center">
                        <h2>Welcome to <br>SL-EduScore</h2>

                    </div>
                </div>
                <div class="welcome-login">
                    <div class="login-banner">
                        <img src="{{ asset('web_assets/img/login-img.png') }}" class="img-fluid" alt="Logo">
                    </div>
                    <div class="mentor-course text-center">
                        <h2>Welcome to <br>SL-EduScore</h2>
                    </div>
                </div>
                <div class="welcome-login">
                    <div class="login-banner">
                        <img src="{{ asset('web_assets/img/login-img.png') }}" class="img-fluid" alt="Logo">
                    </div>
                    <div class="mentor-course text-center">
                        <h2>Welcome to <br>SL-EduScore</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 login-wrap-bg">

            <div class="login-wrapper">
                <div class="loginbox">
                    <div class="w-100">
                        <div class="img-logo">
                            <img src="{{ asset('web_assets/img/logo2.png') }}" class="img-fluid" alt="Logo">
                            <div class="back-home">
                                <a href="{{ route('index') }}">Back to Home</a>
                            </div>
                        </div>
                        <h1>Sign into Your Account</h1>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="input-block">
                                <label class="form-control-label">Email</label>
                                <input type="email" name="email" required class="form-control" placeholder="Enter your email address">
                            </div>
                            <div class="input-block">
                                <label class="form-control-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" required class="form-control pass-input"
                                        placeholder="Enter your password">
                                    <span class="feather-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="forgot">
                                <span><a class="forgot-link" href="forgot-password.html">Forgot Password
                                        ?</a></span>
                            </div>
                            <div class="remember-me">
                                <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                    <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-start" type="submit">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="google-bg text-center">
                    <span><a href="#">Or sign in with</a></span>
                    <div class="sign-google">
                        <ul>
                           <li><a href="#"><img src="{{ asset('web_assets/img/net-icon-01.png') }}" class="img-fluid" alt="Logo"> Sign
                                    In using Google</a></li>
                            {{-- <li><a href="#"><img src="assets/img/net-icon-02.png" class="img-fluid" alt="Logo">Sign
                                    In using Facebook</a></li> --}}
                        </ul>
                    </div>
                    <p class="mb-0">New User ? <a href="{{ route('register') }}">Create an Account</a></p>
                </div>
            </div>

        </div>
    </div>
    @endsection
</x-auth-layout>
