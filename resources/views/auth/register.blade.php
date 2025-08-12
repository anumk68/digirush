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
                                    </div>
                                    <div class="text-center mb-4">
                                        <h5 class="">DigiRush Solution</h5>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" id="register-form" onsubmit="return false;" method="post">
                                            @csrf
                                            <div class="col-12">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="name" name="name" class="form-control" id="name"
                                                    placeholder="Enter your name" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    id="inputEmailAddress" placeholder="jhon@example.com" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password"
                                                        class="form-control border-end-0" id="inputChoosePassword"
                                                        value="12345678" placeholder="Enter Password"> <a
                                                        href="javascript:;" class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="confirm_password" class="form-label">Confirm
                                                    Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="confirm_password"
                                                        class="form-control border-end-0" id="confirm_password"
                                                        placeholder="Re Enter Password"> <a href="javascript:;"
                                                        class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12" id="otp-field" style="display: none;">
                                                <label for="otp" class="form-label">Enter OTP</label>
                                                <input type="text" name="otp" id="otp" class="form-control"
                                                    placeholder="Enter OTP sent to email">
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked">
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end"> <a href="{{ route('forgetForm') }}">Forgot
                                                    Password ?</a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="d-grid">
                                                    <button type="submit" id="send-otp-btn"
                                                        class="btn btn-primary">Register</button>
                                                    <button type="button" id="verify-otp-btn" class="btn btn-success"
                                                        style="display: none;">Verify OTP</button>
                                                </div>
                                            </div>
                                            @if(Session::has('errors'))
                                                <div class="alert alert-danger">
                                                    {{Session::get('errors')}}
                                                </div>
                                            @endif
                                            <div class="col-12 mb-1">
                                                <div class="text-center ">
                                                    <p class="mb-0">You have an account <a
                                                            href="{{ route('login') }}">Login</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="form-error-box"></div>
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
        </div>
    </div>
    <script src="{{ custom_asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ custom_asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ custom_asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ custom_asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{ custom_asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <script src="{{ custom_asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#send-otp-btn').click(function () {
                const formData = {
                    name: $('#name').val(),
                    email: $('#inputEmailAddress').val(),
                    password: $('#inputChoosePassword').val(),
                    confirm_password: $('#confirm_password').val(),
                    _token: '{{ csrf_token() }}'
                };
                $.post("{{ route('send.otp') }}", formData, function (res) {
                    if (res.success) {
                        $('#otp-field').show();
                        $('#send-otp-btn').hide();
                        $('#verify-otp-btn').show();
                    } else {
                        $('#otp-field').hide();
                        $('#send-otp-btn').show();
                        $('#verify-otp-btn').hide();
                        showError(res.message);
                    }
                }).fail(function (xhr) {
                    const errors = xhr.responseJSON.errors;
                    if (errors) {
                        showError(Object.values(errors).flat().join("<br>"));
                    }
                });
            });
            $('#verify-otp-btn').click(function () {
                const $btn = $(this);
                const originalText = $btn.html();
                const otp = $('#otp').val();
                $btn.prop('disabled', true).html('Processing...');
                $.post("{{ route('verify.otp') }}", { otp: otp, _token: '{{ csrf_token() }}' }, function (res) {
                    if (res.success) {
                        window.location.href = "{{ route('admin.new_dashboard') }}";
                    } else {
                        showError(res.message);
                        $btn.prop('disabled', false).html(originalText);
                    }
                }).fail(function () {
                    showError("Something went wrong. Please try again.");
                    $btn.prop('disabled', false).html(originalText);
                });
            });
            function showError(message) {
                const errorBox = `<div class="alert alert-danger mt-2">${message}</div>`;
                if ($('#form-error-box').length) {
                    $('#form-error-box').html(errorBox);
                } else {
                    $('#otp-field').after(`<div id="form-error-box">${errorBox}</div>`);
                }
            }
        });
    </script>

</body>

</html>