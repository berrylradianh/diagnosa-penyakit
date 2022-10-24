@extends('layouts.app')

@section('content')
<!-- blog area start -->
<section class="blog__area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="postbox__wrapper postbox__details pr-20">
                    <div class="postbox__item transition-3 mb-70">
                        <div class="postbox__content">
                            <h3 class="postbox__title">{{$penyakits->nama}}</h3>
                            <div class=" postbox__text mb-40">
                                <p>{{ Str::ucfirst($penyakits->keterangan) }}</p>
                            </div>
                            <div class="postbox__text mb-40">
                                <h3>Penanganan {{$penyakits->nama}}</h3>
                                <p>{{ Str::ucfirst($penyakits->solusi) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->
@endsection
