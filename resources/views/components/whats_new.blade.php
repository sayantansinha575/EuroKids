   <style>
       .single-box {
           overflow: hidden;
       }

       .highlight-item img {
           flex-shrink: 0;
       }

       .highlight-item strong {
           font-size: 16px;
           line-height: 1.2;
       }

       .highlight-item small {
           color: #6c757d;
           line-height: 1.3;
           white-space: normal;
       }

       .notice-container {
           height: 420px;
           overflow: hidden;
           position: relative;
       }

       .notice-track {
           display: flex;
           flex-direction: column;
           animation: noticeLoop 18s linear infinite;
       }

       /* Pause on hover */
       .notice-container:hover .notice-track {
           animation-play-state: paused;
       }

       @keyframes noticeLoop {
           0% {
               transform: translateY(0);
           }

           100% {
               transform: translateY(-50%);
           }
       }
   </style>
   <section class="whats-news-area pt-50 pb-20 gray-bg">
       <div class="container">
           <div class="row">
               <div class="col-lg-8">
                   <div class="whats-news-wrapper">
                       <!-- Heading & Nav Button -->
                       <div class="row justify-content-between align-items-end mb-15">
                           <div class="col-xl-4">
                               <div class="section-tittle mb-30">
                                   <h3>What’s Happening</h3>
                               </div>
                           </div>
                           <div class="col-xl-8 col-md-9">
                               <div class="properties__button">
                                   <!--Nav Button  -->
                                   <nav>
                                       <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                           <a class="nav-item nav-link active show" id="nav-home-tab"
                                               data-bs-toggle="tab" href="#nav-home" role="tab"
                                               aria-controls="nav-home" aria-selected="true">Events</a>
                                           <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                               href="#nav-profile" role="tab" aria-controls="nav-profile"
                                               aria-selected="false">Activities</a>
                                           <a class="nav-item nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                               href="#nav-notice" role="tab" aria-controls="nav-contact"
                                               aria-selected="false">Notice</a>
                                           <a class="nav-item nav-link" id="nav-Sports" data-bs-toggle="tab"
                                               href="#nav-nav-Sport" role="tab" aria-controls="nav-contact"
                                               aria-selected="false">Admissions</a>
                                       </div>
                                   </nav>
                                   <!--End Nav Button  -->
                               </div>
                           </div>
                       </div>
                       <!-- Tab content -->
                       <div class="row">
                           <div class="col-12">
                               <!-- Nav Card -->
                               <div class="tab-content" id="nav-tabContent">
                                   <!-- card one -->
                                   <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                       aria-labelledby="nav-home-tab">
                                       <div class="row">
                                           <!-- Left Details Caption -->
                                           <div class="col-xl-6 col-lg-12">
                                               <div class="whats-news-single mb-40 mb-40">
                                                   <div class="whates-img">
                                                       <img width="100" src="{{ asset('img/about-1.jpg') }}"
                                                           alt="">
                                                   </div>
                                                   <div class="whates-caption">
                                                       <h4><a href="latest_news.html">Secretart for Economic Air plane
                                                               that
                                                               looks like</a></h4>
                                                       <span>by Alice cloe - Jun 19, 2020</span>
                                                       <p>Struggling to sell one multi-million dollar home currently on
                                                           the
                                                           market won’t stop actress and singer Jennifer Lopez.</p>
                                                   </div>
                                               </div>
                                           </div>
                                           <!-- Right single caption -->
                                           <div class="col-xl-6 col-lg-12">
                                               <div class="row gap-4">
                                                   <!-- single -->
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                       <div class="whats-right-single mb-20">
                                                           <div class="whats-right-img">
                                                               <img width="100" src="{{ asset('img/about-2.jpg') }}"
                                                                   alt="">
                                                           </div>
                                                           <div class="whats-right-cap">
                                                               <span class="colorb">FASHION</span>
                                                               <h4><a href="latest_news.html">Portrait of group of
                                                                       friends
                                                                       ting eat. market in.</a></h4>
                                                               <p>Jun 19, 2020</p>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                       <div class="whats-right-single mb-20">
                                                           <div class="whats-right-img">
                                                               <img width="100" src="{{ asset('img/about-3.jpg') }}"
                                                                   alt="">
                                                           </div>
                                                           <div class="whats-right-cap">
                                                               <span class="colorb">FASHION</span>
                                                               <h4><a href="latest_news.html">Portrait of group of
                                                                       friends
                                                                       ting eat. market in.</a></h4>
                                                               <p>Jun 19, 2020</p>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                       <div class="whats-right-single mb-20">
                                                           <div class="whats-right-img">
                                                               <img width="100"
                                                                   src="{{ asset('img/carousel-1.jpg') }}"
                                                                   alt="">
                                                           </div>
                                                           <div class="whats-right-cap">
                                                               <span class="colorg">FASHION</span>
                                                               <h4><a href="latest_news.html">Portrait of group of
                                                                       friends
                                                                       ting eat. market in.</a></h4>
                                                               <p>Jun 19, 2020</p>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                       <div class="whats-right-single mb-20">
                                                           <div class="whats-right-img">
                                                               <img width="100"
                                                                   src="{{ asset('img/carousel-2.jpg') }}"
                                                                   alt="">
                                                           </div>
                                                           <div class="whats-right-cap">
                                                               <span class="colorr">FASHION</span>
                                                               <h4><a href="latest_news.html">Portrait of group of
                                                                       friends
                                                                       ting eat. market in.</a></h4>
                                                               <p>Jun 19, 2020</p>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Card two -->
                                   <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                       aria-labelledby="nav-profile-tab">
                                       <div class="row">
                                           <!-- Left Details Caption -->
                                           <div class="col-xl-6">
                                               <div class="whats-news-single mb-40">
                                                   <div class="whates-img">
                                                       <img src="{{ asset('img/carousel-1.jpg') }}" alt="">
                                                   </div>
                                                   <div class="whates-caption">
                                                       <h4><a href="#">Secretart for Economic Air
                                                               plane that looks like</a></h4>
                                                       <span>by Alice cloe - Jun 19, 2020</span>
                                                       <p>Struggling to sell one multi-million dollar home currently on
                                                           the
                                                           market won’t stop actress and singer Jennifer Lopez.</p>
                                                   </div>
                                               </div>
                                           </div>
                                           <!-- Right single caption -->
                                           <div class="col-xl-6 col-lg-12">
                                               <div class="row gap-4">
                                                   <!-- single -->
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                       <div class="whats-right-single mb-20">
                                                           <div class="whats-right-img">
                                                               <img width="100"
                                                                   src="{{ asset('img/classes-5.jpg') }}"
                                                                   alt="">
                                                           </div>
                                                           <div class="whats-right-cap">
                                                               <span class="colorb">FASHION</span>
                                                               <h4><a href="latest_news.html">Portrait of group of
                                                                       friends
                                                                       ting eat. market in.</a></h4>
                                                               <p>Jun 19, 2020</p>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                       <div class="whats-right-single mb-20">
                                                           <div class="whats-right-img">
                                                               <img width="100"
                                                                   src="{{ asset('img/classes-6.jpg') }}"
                                                                   alt="">
                                                           </div>
                                                           <div class="whats-right-cap">
                                                               <span class="colorb">FASHION</span>
                                                               <h4><a href="latest_news.html">Portrait of group of
                                                                       friends
                                                                       ting eat. market in.</a></h4>
                                                               <p>Jun 19, 2020</p>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                       <div class="whats-right-single mb-20">
                                                           <div class="whats-right-img">
                                                               <img width="100"
                                                                   src="{{ asset('img/classes-3.jpg') }}"
                                                                   alt="">
                                                           </div>
                                                           <div class="whats-right-cap">
                                                               <span class="colorg">FASHION</span>
                                                               <h4><a href="latest_news.html">Portrait of group of
                                                                       friends
                                                                       ting eat. market in.</a></h4>
                                                               <p>Jun 19, 2020</p>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                       <div class="whats-right-single mb-20">
                                                           <div class="whats-right-img">
                                                               <img width="100"
                                                                   src="{{ asset('img/classes-3.jpg') }}"
                                                                   alt="">
                                                           </div>
                                                           <div class="whats-right-cap">
                                                               <span class="colorr">FASHION</span>
                                                               <h4><a href="latest_news.html">Portrait of group of
                                                                       friends
                                                                       ting eat. market in.</a></h4>
                                                               <p>Jun 19, 2020</p>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Card three Notice -->
                                   <div class="tab-pane fade" id="nav-notice" role="tabpanel"
                                       aria-labelledby="nav-profile-tab">
                                       <div class="row">
                                           <!-- Left Details Caption -->
                                           <div class="col-xl-6">
                                               <div class="whats-news-single mb-40">
                                                   <div class="whates-img">
                                                       <img src="{{ asset('img/carousel-1.jpg') }}" alt="">
                                                   </div>
                                                   <div class="whates-caption">
                                                       <h4><a href="#">Secretart for Economic Air
                                                               plane that looks like</a></h4>
                                                       <span>by Alice cloe - Jun 19, 2020</span>
                                                       <p>Struggling to sell one multi-million dollar home currently on
                                                           the
                                                           market won’t stop actress and singer Jennifer Lopez.</p>
                                                   </div>
                                               </div>
                                           </div>
                                           <!-- Right single caption -->
                                           <div class="col-xl-6 col-lg-12">
                                               <div class="row gap-3 notice-list">
                                                     <h4 class="mb-3">School Notice</h4>
                                                   <div class="notice-container">
                                                       <div class="notice-track">

                                                           <!-- ORIGINAL LIST -->
                                                           <div class="notice-group">
                                                               <!-- notice 1 -->
                                                               <div class="whats-right-single mb-20">
                                                                   <div class="notice-item d-flex align-items-start">
                                                                       <div class="notice-icon">📌</div>
                                                                       <div class="notice-content">
                                                                           <span
                                                                               class="notice-tag bg-warning">Important</span>
                                                                           <h6 class="mb-1">
                                                                               <a href="#">Gurdian
                                                                                   Meeting Scheduled</a>
                                                                           </h6>
                                                                           <small class="text-muted">15 Jan
                                                                               2026</small>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <!-- notice 2 -->
                                                               <div class="whats-right-single mb-20">
                                                                   <div class="notice-item d-flex align-items-start">
                                                                       <div class="notice-icon">📌</div>
                                                                       <div class="notice-content">
                                                                           <span
                                                                               class="notice-tag bg-warning">Important</span>
                                                                           <h6 class="mb-1">
                                                                               <a href="#">Parent–Teacher
                                                                                   Meeting Scheduled</a>
                                                                           </h6>
                                                                           <small class="text-muted">15 Jan
                                                                               2026</small>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <!-- notice 3 -->
                                                               <div class="whats-right-single mb-20">
                                                                   <div class="notice-item d-flex align-items-start">
                                                                       <div class="notice-icon">📌</div>
                                                                       <div class="notice-content">
                                                                           <span
                                                                               class="notice-tag bg-warning">Important</span>
                                                                           <h6 class="mb-1">
                                                                               <a href="#">Parent–Teacher
                                                                                   Meeting Scheduled</a>
                                                                           </h6>
                                                                           <small class="text-muted">15 Jan
                                                                               2026</small>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <!-- notice 3 -->
                                                               <div class="whats-right-single mb-20">
                                                                   <div class="notice-item d-flex align-items-start">
                                                                       <div class="notice-icon">📌</div>
                                                                       <div class="notice-content">
                                                                           <span
                                                                               class="notice-tag bg-warning">Important</span>
                                                                           <h6 class="mb-1">
                                                                               <a href="#">Parent–Teacher
                                                                                   Meeting Scheduled</a>
                                                                           </h6>
                                                                           <small class="text-muted">15 Jan
                                                                               2026</small>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <!-- notice 3 -->
                                                               <div class="whats-right-single mb-20">
                                                                   <div class="notice-item d-flex align-items-start">
                                                                       <div class="notice-icon">📌</div>
                                                                       <div class="notice-content">
                                                                           <span
                                                                               class="notice-tag bg-warning">Important</span>
                                                                           <h6 class="mb-1">
                                                                               <a href="#">Parent–Teacher
                                                                                   Meeting Scheduled</a>
                                                                           </h6>
                                                                           <small class="text-muted">15 Jan
                                                                               2026</small>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <!-- notice 3 -->
                                                               <div class="whats-right-single mb-20">
                                                                   <div class="notice-item d-flex align-items-start">
                                                                       <div class="notice-icon">📌</div>
                                                                       <div class="notice-content">
                                                                           <span
                                                                               class="notice-tag bg-warning">Important</span>
                                                                           <h6 class="mb-1">
                                                                               <a href="#">Parent–Teacher
                                                                                   Meeting Scheduled</a>
                                                                           </h6>
                                                                           <small class="text-muted">15 Jan
                                                                               2026</small>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <!-- notice 3 -->
                                                               <div class="whats-right-single mb-20">
                                                                   <div class="notice-item d-flex align-items-start">
                                                                       <div class="notice-icon">📌</div>
                                                                       <div class="notice-content">
                                                                           <span
                                                                               class="notice-tag bg-warning">Important</span>
                                                                           <h6 class="mb-1">
                                                                               <a href="#">Parent–Teacher
                                                                                   Meeting Scheduled</a>
                                                                           </h6>
                                                                           <small class="text-muted">15 Jan
                                                                               2026</small>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <!-- notice 3 -->
                                                               <div class="whats-right-single mb-20">
                                                                   <div class="notice-item d-flex align-items-start">
                                                                       <div class="notice-icon">📌</div>
                                                                       <div class="notice-content">
                                                                           <span
                                                                               class="notice-tag bg-warning">Important</span>
                                                                           <h6 class="mb-1">
                                                                               <a href="#">Parent–Teacher
                                                                                   Meeting Scheduled</a>
                                                                           </h6>
                                                                           <small class="text-muted">15 Jan
                                                                               2026</small>
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
                               <!-- End Nav Card -->
                           </div>
                       </div>
                   </div>
                   <!-- Banner -->
                   <div class="banner-one mt-20 mb-30">
                       <img height="250" src="{{ asset('img/toddler.png') }}" alt="">
                   </div>
               </div>
               <div class="col-lg-4">
                   <!-- Flow Socail -->
                   <div class="single-follow mb-45">
                       <div class="single-box">

                           <h4 class="mb-3">School Highlights</h4>

                           <!-- Item -->
                           <div class="highlight-item d-flex align-items-center mb-3">
                               <img width="40" src="{{ asset('img/best-employee.png') }}" alt="">
                               <div class="ms-3">
                                   <strong class="d-block">15+ Years</strong>
                                   <small>Excellence in Early Education</small>
                               </div>
                           </div>

                           <!-- Item -->
                           <div class="highlight-item d-flex align-items-center mb-3">
                               <img width="40" src="{{ asset('img/guarantee.png') }}" alt="">
                               <div class="ms-3">
                                   <strong class="d-block">Safe & Secure</strong>
                                   <small>Learning Environment</small>
                               </div>
                           </div>

                           <!-- Item -->
                           <div class="highlight-item d-flex align-items-center">
                               <img width="40" src="{{ asset('img/parents.png') }}" alt="">
                               <div class="ms-3">
                                   <strong class="d-block">1200+ Parents</strong>
                                   <small>Trust Our School</small>
                               </div>
                           </div>

                       </div>
                   </div>

                   <!-- Most Recent Area -->
                   <div class="most-recent-area">
                       <!-- Section Tittle -->
                       <div class="small-tittle mb-20">
                           <h4>Most Recent</h4>
                       </div>
                       <!-- Details -->
                       <div class="most-recent mb-40">
                           <div class="most-recent-img">
                               <img src="{{ asset('img/classes-1.jpg') }}" alt="">
                               <div class="most-recent-cap">
                                   <span class="bgbeg">Vogue</span>
                                   <h4><a href="latest_news.html">What to Wear: 9+ Cute Work <br>
                                           Outfits to Wear This.</a></h4>
                                   <p>Jhon | 2 hours ago</p>
                               </div>
                           </div>
                       </div>
                       <!-- Single -->
                       <div class="most-recent-single mt-2">
                           <div class="most-recent-images">
                               <img width="100" src="{{ asset('img/classes-2.jpg') }}" alt="">
                           </div>
                           <div class="most-recent-capt">
                               <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                               <p>Jhon | 2 hours ago</p>
                           </div>
                       </div>
                       <!-- Single -->
                       <div class="most-recent-single mt-2">
                           <div class="most-recent-images">
                               <img width="100" src="{{ asset('img/classes-3.jpg') }}" alt="">
                           </div>
                           <div class="most-recent-capt">
                               <h4><a href="latest_news.html">Most Beautiful Things to Do in Sidney with Your BF</a>
                               </h4>
                               <p>Jhon | 3 hours ago</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   @push('scripts')
   @endpush
