@extends('layouts.app')

@section('content')
<!-- course area start -->
<section class="course__area pt-100 pb-90 grey-bg-3">
    @foreach ($penyakits as $key => $penyakits )
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="course__tab-conent">
                            <div class="tab-content" id="courseTabContent">
                                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="course__item course__item-list course__item-list-2 white-bg mb-30 fix transition-3">
                                                <div class="row gx-0">
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                        <div class="course__thumb w-img p-relative fix">
                                                            <a href="#">
                                                                <img src="{{ $penyakits->url }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                        <div class="course__right p-relative">
                                                            <div class="course__content p-relative">
                                                                <h3 class="course__title">
                                                                    <a href="#">{{ $penyakits->nama }}</a>
                                                                </h3>

                                                                <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                    <div class="course__tutor">
                                                                        <a href="#"><img src="assets/img/course/tutor/course-tutor-1.jpg" alt="">Diagnosa</a>
                                                                    </div>
                                                                    <div class="course__lesson">
                                                                        <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                                            </svg>
                                                                            Forward Chaining
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                                                {{ Str::words($penyakits->keterangan,4) }}
                                                                <div class="course__btn">
                                                                    <a href="{{ url('penyakit/'.$penyakits->id) }}" class="link-btn-2">
                                                                        Read More
                                                                        <i class="far fa-arrow-right"></i>
                                                                        <i class="far fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-xxl-12">
                        <div class="basic-pagination">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <span class="current">1</span>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    @endforeach
</section>
<!-- course area end -->
@endsection
