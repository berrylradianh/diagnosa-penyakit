<div class="footer__area">
    <div class="footer__top grey-bg-4 pt-95 pb-45">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__widget footer-col-1 mb-50">
                        <div class="footer__logo">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img class="w-100" src="{{ asset('assets/img/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="footer__widget-content">
                            <div class="footer__widget-info">
                                <p>Sistem pakar diagnosa penyakit pada tanaman pisang menggunakan metode Forward Chaining</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget mb-50">
                        <h3 class="footer__widget-title">Explore</h3>
                        <div class="footer__widget-content">
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget mb-50">
                        <h3 class="footer__widget-title">Menu</h3>
                        <div class="footer__widget-content">
                            <ul>
                                <li>
                                    <a href="{{ route('penyakit') }}">Daftar Penyakit</a>
                                </li>
                                <li>
                                    <a href="{{ route('gejala') }}">Daftar Gejala</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__widget footer-col-4 mb-50">
                        <h3 class="footer__widget-title">Contact Me</h3>

                        <h6>
                            <a class="text-dark">
                                <img src="{{ ('assets/img/ic_place.png') }}" width="26" alt="">
                                &nbsp Malang, Indonesia
                            </a>
                        </h6>
                        <h6>
                            <a href="#" target="_blank" class="text-dark">
                                <img src="{{('assets/img/ic_phone.png') }}" width="26" alt="">
                                &nbsp +62 8111 1111 1111
                            </a>
                        </h6>
                        <h6>
                            <a href="#" target="_blank" class="text-dark">
                                <img src="{{ ('assets/img/ic_email.png') }}" width="26" alt="">
                                &nbsp example@gmail.com
                            </a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
