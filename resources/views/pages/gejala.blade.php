@extends('layouts.app')

@section('content')
<!-- course area start -->
<section class="course__area pt-100 pb-90 grey-bg-3">
    @foreach ($gejalas as $key => $gejalas )
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
                                                    <div class="">
                                                        <div class="course__right p-relative">
                                                            <div class="course__content p-relative">
                                                                {{ $gejalas->keterangan  }}
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
