@extends('layouts.app')

@section('content')
<!-- sign up area start -->
<section class="signup__area p-relative z-index-1 pt-100 pb-145">
<div class="sign__shape">
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
                           <form action="#">
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Full Name</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Full name">
                                    <i class="fal fa-user"></i>
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Email</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="e-mail address">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Password</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Password">
                                    <i class="fal fa-lock"></i>
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-10">
                                 <h5>Password Confirm</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Re-Password">
                                    <i class="fal fa-lock"></i>
                                 </div>
                              </div>
                              <button class="tp-btn w-100"> <span></span> Sign Up</button>
                              <div class="sign__new text-center mt-20">
                                 <p>Already in Markit ? <a href="{{route('login')}}"> Sign In</a></p>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- sign up area end -->
@endsection
