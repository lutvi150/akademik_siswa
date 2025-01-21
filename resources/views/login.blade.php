<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/notiflix/dist/notiflix-3.2.7.min.css') }}">
    <title>{{config("app.name")}}</title>
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url({{ asset('assets/images/back_ground.png') }}) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-6 col-md-6 modal-bg-img"
                    style="background-image: url({{ asset('assets/images/logo.png') }}); ">
                </div>
                <div class="col-lg-6 col-md-6 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="{{asset('assets/images/logo.png')}}" alt="wrapkit"
                                style="width: 60px; height: 70px">
                        </div>
                        <h2 class="mt-3 text-center">Login</h2>
                        <p class="text-center">Gunakan username untuk login</p>
                        <div class="msg-alert" hidden>
                            <div class="alert alert-danger" role="alert">
                                <strong class="alert-title">Login Gagal</strong>
                                <p class="alert-text">Username atau password yang anda gunakan salah !</p>
                            </div>
                        </div>
                        @if ($message=Session::get('error'))
                        <div class="alert alert-danger" role="alert">
                            <strong>Error</strong>
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <form action="#" method="post" id="wage">
                            <div class="alert alert-danger" role="alert">
                                <strong>Informasi!</strong>
                                <p> Email untuk login adalah admin@gmail.com dan password nya adalah admin</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Email </label>
                                        <input id="email" type="text" class="form-control " name="email" value=""
                                            required autocomplete="email" autofocus placeholder="Username">
                                        <span class="red email"></span>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input id="password" type="password" class="form-control " name="password"
                                            required autocomplete="current-password" placeholder="Password">
                                        <span class="red password"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="show-loading">
                                        <div class="spinner-border" role="status">

                                        </div>
                                        <span class="">Login Proses mohon tunggu...</span>
                                    </div>
                                    <div class="show-button">
                                        <button type="button" onclick="login()"
                                            class="btn btn-block btn-dark">Login</button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/jquery/dist/jquery.js')}}"></script>
    {{-- notiflix --}}
    <script src="{{ asset('assets/notiflix/dist/notiflix-aio-3.2.7.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->

    <script>
        $(document).ready(function () {
            show_loading('hide');
        });
        var wage = document.getElementById("wage");
        wage.addEventListener("keydown", function (e) {
            if (e.code === "Enter") {
                login();
            }
        });

        const url = "{{ url('') }}";
        $(".preloader ").fadeOut();

        function login() {
            $(".email").text("");
            $(".password").text("");
            show_loading('show');
            $(".msg-alert").attr("hidden", "true");
            let data = {
                email: $("#email").val(),
                password: $("#password").val(),
                _token: "{{ csrf_token() }}"
            }
            show_loading('show');
            proses_login(data)
        }

        function proses_login(data) {
            $.ajax({
                type: "POST",
                url: url + "/login/verification",
                data: data,
                dataType: "JSON",
                success: function (response) {
                    show_loading('hide');
                    if (response.status == 'validationerror') {
                        $(".email").text(response.erors.email);
                        $(".password").text(response.erors.password);
                    } else if (response.status == 'failed') {
                        Notiflix.Report.failure(
                            'Login Gagal',
                            'username dan password yang anda gunakan salah !',
                            'Okay',
                        );

                    } else if (response.status == 'success') {
                        Notiflix.Notify.success('Login berhasil');
                        window.location.href = "{{ url('login') }}";
                    }
                },
                error: function () {
                    show_loading('hide');
                    Notiflix.Report.failure(
                        'Gagal',
                        'Akses ke server bermasalah silahkan coba lagi',
                        'Okay',
                    );
                }
            });
        }

        function show_loading(params) {
            if (params == 'show') {
                $(".show-button").hide();
                $(".show-loading").show();
            } else {
                $(".show-button").show();
                $(".show-loading").hide();
            }
        }
    </script>
</body>

</html>