@extends('layouts.app')

@section('content')
<!-- sign up area start -->
<section class="signup__area p-relative z-index-1 pt-100 pb-145">
    <div class="sign__shape">\
        <img class="man-1" src="{{ ('assets/img/man-3.png') }}" alt="">
        <img class="man-2 man-22" src="{{ ('assets/img/man-2.png') }}" alt="">
        <img class="circle" src="{{ ('assets/img/circle.png') }}" alt="">
        <img class="zigzag" src="{{ ('assets/img/zigzag.png') }}" alt="">
        <img class="dot" src="{{ ('assets/img/Dot.png') }}" alt="">
        <img class="bg" src="{{ ('assets/img/sign-up.png') }}" alt="">
        <img class="flower" src="{{ ('assets/img/flower.png') }}" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="sign__wrapper white-bg">
                    <div class="sign__form">
                        <form id="registration" action="{{ route('register.register') }}" method="POST">
                            @csrf
                            <div class="sign__input-wrapper mb-25">
                                <h5>Full Name</h5>
                                <div class="sign__input">
                                    <input name="fullname" id="fullname" type="text" placeholder="Full name" required>
                                    <i class="fal fa-user"></i>
                                </div>
                                <span class="text-danger" id="fullname_validation_register"></span>
                            </div>

                            <div class="sign__input-wrapper mb-25">
                                <h5>Email</h5>
                                <div class="sign__input">
                                    <input name="email" id="email_registration" type="text" placeholder="e-mail address" required>
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <span class="text-danger" id="email_validation_register"></span>
                            </div>

                            <div class="sign__input-wrapper mb-25">
                                <h5>Password</h5>
                                <div class="sign__input">
                                    <input name="password" id="input_password" type="password" placeholder="Password" required>
                                    <i class="fal fa-lock"></i>
                                    <i class="fal fa-eye" style="margin-left: 80%;" id="eye" onclick="toggle_password()"></i>
                                </div>
                                <span class="text-danger" id="password_validation"></span>
                            </div>

                            <div class="sign__input-wrapper mb-10">
                                <h5>Password Confirm</h5>
                                <div class="sign__input">
                                    <input name="password_confirm" id="input_password_confirm" type="password" placeholder="Re-Password" required>
                                    <i class="fal fa-lock"></i>
                                    <i class="fal fa-eye" style="margin-left: 80%;" id="eye_confirm" onclick="toggle_password_confirm()"></i>
                                </div>
                                <span class="text-danger" id="password_confirm_validation"></span>
                            </div>

                            <button class="tp-btn w-100"> <span></span> Register</button>

                            <div class="sign__new text-center mt-20">
                                <p>Already in Markit ? <a href="{{route('login')}}"> Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sign up area end -->

<!-- Import JQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Jquery and Javascript code -->
<script>
    var state = false;

    function toggle_password() {
        if (state) {
            document.getElementById("input_password").setAttribute("type", "password");
            document.getElementById("eye").setAttribute("class", "fal fa-eye");
            state = false;
        } else {
            document.getElementById("input_password").setAttribute("type", "text");
            document.getElementById("eye").setAttribute("class", "fal fa-eye-slash");
            state = true;
        }
    }

    function toggle_password_confirm() {
        if (state) {
            document.getElementById("input_password_confirm").setAttribute("type", "password");
            document.getElementById("eye_confirm").setAttribute("class", "fal fa-eye");
            state = false;
        } else {
            document.getElementById("input_password_confirm").setAttribute("type", "text");
            document.getElementById("eye_confirm").setAttribute("class", "fal fa-eye-slash");
            state = true;
        }
    }

    // Form validation name
    $('#registration').submit(function(event) {
        if ($('#fullname').val().match(/[\d-]/) || $('#fullname').val().match(/[`~!@#$%+^&*<>,.?_{}|;:'"()]/)) {
            event.preventDefault();
            $('#fullname_validation_register').text('The name cannot contain numbers or symbols');
            return false;
        } else {
            $('#fullname_validation_register').text('');
        }
    });

    // Form Validation email
    $('#registration').submit(function(event) {
        if ($('#email_registration').val().match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gm)) {
            $('#email_validation_register').text('');
        } else {
            event.preventDefault();
            $('#email_validation_register').text('Invalid Email Address');
            return false;
        }
    });

    // Form Validation password
    $('#registration').submit(function(event) {
        if ($('#input_password').val().match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/)) {
            $('#password_validation').text('');
        } else {
            event.preventDefault();
            $('#password_validation').text('The password must consist of at least 8 characters, 1 capital letter, 1 lowercase letter and 1 number');
            return false;
        }
    });

    // Form validation confirm password
    $('#registration').submit(function(event) {
        if ($('#input_password_confirm').val() != $('#input_password_confirm').val()) {
            event.preventDefault();
            $('#password_confirm_validation').text('The password must be the same!');
            return false;
        } else {
            $('#password_confirm_validation').text('');
        }
    });
</script>
@endsection
