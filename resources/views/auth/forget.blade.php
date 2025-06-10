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
                    <div class="img-logo">
                        <img src="{{ asset('web_assets/img/logo2.png') }}" class="img-fluid" alt="Logo">
                        <div class="back-home">
                            <a href="{{ route('index') }}">Back to Home</a>
                        </div>
                    </div>
                    <h1>Forgot Password ?</h1>

                    <form action="login.html">
                        <div class="input-block">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email to reset your password">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-start" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @endsection

</x-auth-layout>
