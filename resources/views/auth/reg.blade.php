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
                    <h1>Sign up</h1>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="input-block">
                            <label class="form-control-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Enter your Full Name" required>
                        </div>
                        <div class="input-block">
                            <label class="form-control-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter your Last Name" required>
                        </div>
                        <div class="input-block">
                            <label class="form-control-label">Grade</label>
                            <input type="tel" class="form-control" name="grade" placeholder="Enter your Grade" required>
                        </div>
                        <div class="input-block">
                            <label class="form-control-label">School Name</label>
                            <input type="text" class="form-control" name="school_name" placeholder="Enter your School Name" required>
                        </div>
                        <div class="input-block">
                            <label class="form-control-label">Provinces</label>
                            <select class="form-select" required name="provical">
                                <option value="">Select Provinces</option>
                                <option value="Central">Central</option>
                                <option value="Uva">Uva</option>
                                <option value="Southern">Southern</option>
                                <option value="Sabaragamuwa">Sabaragamuwa</option>
                                <option value="Northern">Northern</option>
                                <option value="North Western">North Western</option>
                                <option value="North Central">North Central</option>
                                <option value="Eastern">Eastern</option>
                            </select>

                        </div>
                        <div class="input-block">
                            <label class="form-control-label">Parent/Guardian Name</label>
                            <input type="text" class="form-control" name="par_name" placeholder="Enter Parent/Guardian Name"
                                required>
                        </div>
                        <div class="input-block">
                            <label class="form-control-label">Parent/Guardian Number</label>
                            <input type="tel" class="form-control" name="par_number" placeholder="Enter Parent/Guardian Number"
                                required>
                        </div>


                        <div class="input-block">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control email" name="email" placeholder="Enter your email address">
                            <span class="Errortext"></span>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-block">
                            <label class="form-control-label">Password</label>
                            <div class="pass-group" id="passwordInput">
                                <input type="password" class="form-control pass-input"
                                    name="password" placeholder="Enter your password">
                                <span class="toggle-password feather-eye"></span>
                                <span class="pass-checked"><i class="feather-check"></i></span>
                            </div>
                            <div class="password-strength" id="passwordStrength">
                                <span id="poor"></span>
                                <span id="weak"></span>
                                <span id="strong"></span>
                                <span id="heavy"></span>
                            </div>
                            <div id="passwordInfo"></div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-start create-ac" type="submit">Create Account</button>
                        </div>
                    </form>
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
                    <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                </div>
            </div>

        </div>
    </div>
    @endsection

    @push('script')
    <script src="{{ asset('web_assets/js/validation.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {

            const validateEmail = (email) => {
                return email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
            };

            const validate = () => {
                const $result = $('.Errortext');
                const email = $('.email').val();
                $result.text('');

                if(validateEmail(email)){
                    $.ajax({
                        url: "{{ route('email.check') }}",
                        type: "POST",
                        data: {
                            email: email,
                            _token: '{{csrf_token()}}'
                        },
                        success: function (result) {
                            if(result == 'taken'){
                                $result.text(email + ' This email is already taken.');
                                $result.css('color', 'red');
                                $('.create-ac').attr('disabled', 'disabled');
                            }
                            else{
                                $result.text(email + ' is valid.');
                                $result.css('color', 'green');
                                $('.create-ac').attr('disabled', false);
                            }
                        }
                    });

                } else{
                    $result.text(email + ' is invalid.');
                    $result.css('color', 'red');
                    $('.create-ac').attr('disabled', 'disabled');
                }
                return false;
            }

            $('.email').on('input', validate);
        });
    </script>

    @endpush
</x-auth-layout>
