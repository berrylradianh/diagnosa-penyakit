@extends('layouts.app')

@section('content')
<!-- breadcrumb area start -->
<section class="breadcrumb__area  pt-150 pb-150 " data-background="{{ asset('assets/img/background-home.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                    <h3 class="breadcrumb__title">Diagnosa Penyakit Tanaman Pisang</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- main menu area start -->
<section class="my__course pt-120 pb-90">
    <div class="container">
        <div class="row center">

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="course__item-2 transition-3 white-bg mb-30 fix">
                    <div class="course__thumb-2 w-img fix">
                        <a href="#">
                            <img src="assets/img/course/2/course-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="course__content-2">
                        <h3 class="course__title-2">
                            <a href="#">Daftar Penyakit</a>
                        </h3>
                        <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                            <span>Semua Data penyakit yang telah dikumpulkan sesuai referensi dan data yang ada</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="course__item-2 transition-3 white-bg mb-30 fix">
                    <div class="course__thumb-2 w-img fix">
                        <a href="#">
                            <img src="assets/img/course/2/course-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="course__content-2">
                        <h3 class="course__title-2">
                            <a href="#">Daftar Gejala</a>
                        </h3>
                        <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                            <span>Semua Data gejala yang telah dikumpulkan sesuai referensi dan data yang ada</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="course__item-2 transition-3 white-bg mb-30 fix">
                    <div class="course__thumb-2 w-img fix">
                        <a href="#">
                            <img src="assets/img/course/2/course-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="course__content-2">
                        <h3 class="course__title-2">
                            <a href="#">Diagnosa</a>
                        </h3>
                        <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                            <span>Ikuti langkah-langkah sistem, dan temukan solusi permasalahan Anda</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- main menu area end -->
@endsection
