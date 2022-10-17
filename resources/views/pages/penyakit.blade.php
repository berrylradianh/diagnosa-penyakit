@extends('layouts.app')

@section('content')
<!-- course area start -->
<section class="course__area pt-100 pb-90 grey-bg-3">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                     <div class="course__tab-inner white-bg mb-50">
                        <div class="row align-items-center">
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="course__tab-wrapper d-flex align-items-center">
                                 <div class="course__tab-btn">
                                    <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                       </li>
                                       <li class="nav-item" role="presentation">
                                         <button class="nav-link list active" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                          <svg class="list" viewBox="0 0 512 512">
                                             <g id="Layer_2_1_">
                                                <path class="st0" d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z"/>
                                                <circle class="st0" cx="64" cy="100" r="31"/>
                                                <path class="st0" d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z"/>
                                                <circle class="st0" cx="64" cy="256" r="31"/>
                                                <path class="st0" d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z"/>
                                                <circle class="st0" cx="64" cy="412" r="31"/>
                                             </g>
                                             </svg>
                                         </button>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="course__sort d-flex justify-content-sm-end">
                              <div class="course__sidebar-search">
                              <form action="#">
                                 <input type="text" placeholder="Search...">
                                 <button type="submit">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 584.4 584.4" style="enable-background:new 0 0 584.4 584.4;" xml:space="preserve">
                                       <g>
                                          <g>
                                             <path class="st0" d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z"/>
                                             <path class="st1" d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z"/>
                                          </g>
                                       </g>
                                    </svg>
                                 </button>
                              </form>
                           </div>
                              </div>
                           </div>
                        </div>
                     </div>
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
                                                      <a href="course-details.html">
                                                         <img src="assets/img/layu-bakteri.jpg" alt="">
                                                      </a>
                                                   </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                   <div class="course__right p-relative">
                                                      <div class="course__content p-relative">
                                                         <h3 class="course__title">
                                                            <a href="#">Layu Bakteri</a>
                                                         </h3>

                                                         <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                            <div class="course__tutor">
                                                               <a href="#"><img src="assets/img/course/tutor/course-tutor-1.jpg" alt="">Diagnosa</a>
                                                            </div>
                                                            <div class="course__lesson">
                                                               <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  </svg>
                                                                  Forward Chaining
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                                      Penyakit ini ditandai dengan gejala...
                                                         <div class="course__btn">
                                                            <a href="#" class="link-btn-2">
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
                     <div class="row">
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
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                     <div class="course__sidebar pl-70">
                        <div class="course__sidebar-widget white-bg">
                           <div class="course__sidebar-info">
                              <h3 class="course__sidebar-title">Menu Lainnya</h3>
                              <ul>
                                    <li>
                                       <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                       <a href="#">About</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('gejala') }}">Daftar Gejala</a>
                                    </li>
                                 </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- course area end -->
@endsection
