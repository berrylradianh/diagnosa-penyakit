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

    <div class="container text-center p-lg-5">
        <a href="{{ Auth::check() ? route ('diagnosa') : route ('login') }}" class="btn btn-lg btn-info w-auto ">Mulai</a>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- main menu area start -->
<section class="my__course pt-120 pb-90">
    <div class="container"">
        <div class=" row">

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                <div class="course__content-2">
                    <h3 class="course__title-2 text-center">
                        <a href="{{ route('penyakit') }}">Daftar Penyakit</a>
                    </h3>
                    <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                        <span>Semua Data penyakit yang telah dikumpulkan sesuai referensi dan data yang ada</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                <div class="course__content-2">
                    <h3 class="course__title-2 text-center">
                        <a href="{{ route('gejala') }}">Daftar Gejala</a>
                    </h3>
                    <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                        <span>Semua Data gejala yang telah dikumpulkan sesuai referensi dan data yang ada</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>
<!-- main menu area end -->
@endsection