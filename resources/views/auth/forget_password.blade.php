<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ custom_asset('front_assets/img/DigiRush_Solution.png') }}" type="image/png" />
    <link href="{{ custom_asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ custom_asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ custom_asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ custom_asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ custom_asset('assets/js/pace.min.js') }}"></script>
    <link href="{{ custom_asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ custom_asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ custom_asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ custom_asset('assets/css/icons.css') }}" rel="stylesheet">
    <title>DigiRush Solution - Admin Dashboard</title>
</head>

<body class="">
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-4">
                                    <div class="mb-3 text-center">
                                        <img src="{{custom_asset('front_assets/img/F-Logo.png')}}" width="120"
                                            alt="digirusholution">
                                        <!--<img src="assets/images/logo-icon.png" width="60" alt="" />-->
                                    </div>
                                    <div class="text-center mb-4">
                                        <h5 class="">DigiRush Solution</h5>
                                        <p class="mb-0">Please log in to your account</p>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="POST"
                                        action="{{ session('otp_verified') ? route('reset.password') : (session('forgot_password_email') ? route('verify.forgot.otp') : route('send.forgot.otp')) }}">
                                        @csrf
                                        @if (session('forgot_password_verified'))
                                            <div class="form-group mb-3">
                                                <label>New Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    required>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                                        @elseif (session('forgot_password_email'))
                                            <div class="form-group mb-3">
                                                <label>Enter OTP sent to you mail</label>
                                                <input type="text" name="otp" class="form-control" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Verify OTP</button>
                                        @else
                                            <div class="form-group mb-3">
                                                <label>Enter your Email</label>
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Send OTP</button>
                                            <div class="d-flex justify-content-evenly mt-3">
                                                <a href="{{ route('login') }}">Login</a>
                                                <a href="{{ route('admin.registerForm') }}">Register</a>
                                            </div>
                                        @endif
                                        @if (session('forgot_password_email') && !session('otp_verified'))
                                            <a href="{{ route('forgot.reset') }}"
                                                class="btn btn-link mt-2 d-block text-center">Back to enter a different
                                                email</a>
                                        @endif
                                        @if(session('success'))
                                            <div class="alert alert-success mt-2">{{ session('success') }}</div>
                                        @endif
                                        @if($errors->any())
                                            <div class="alert alert-danger mt-2">
                                                @foreach($errors->all() as $e)
                                                    <div>{{ $e }}</div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            <div class="login-separater text-center mb-5">
                                <hr />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ custom_asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ custom_asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ custom_asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ custom_asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{ custom_asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{ custom_asset('assets/js/app.js')}}"></script>
</body>

</html>