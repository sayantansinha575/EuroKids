   <style>
       .weekly2-news-area .weekly2-wrapper .slider-wrapper {
           background: #fff;
           padding: 30px 22px 19px 23px;
           border-radius: 10px
       }

       .weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single {
           margin-left: 15px;
           margin-right: 15px
       }

       .weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-img {
           margin-bottom: 20px
       }

       .weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-img img {
           width: 100%;
           border-radius: 6px
       }

       .weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-caption h4 a {
           font-size: 16px;
           font-weight: 700;
           line-height: 1.3;
           display: block;
           padding-right: 20px
       }

       @media only screen and (min-width: 576px) and (max-width: 767px) {
           .weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-caption h4 a {
               padding-right: 0px
           }
       }

       .weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-caption h4 a:hover {
           color: #ff2143
       }

       .weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-caption p {
           color: #838793;
           font-size: 12px;
           margin: 0
       }

       .weekly2-news-area .weekly2-wrapper .slider-wrapper .home-banner2 img {
           width: 100%
       }

       .weekly2-news-area .weekly2-news-active button {
           cursor: pointer
       }

       .weekly2-news-area .weekly2-news-active .slick-arrow {
           position: absolute;
           top: -46px;
           right: 10px;
           background: none;
           border: none;
           color: #707b8e;
           padding: 0;
           cursor: pointer;
           font-size: 12px
       }

       .weekly2-news-area .weekly2-news-active .slick-prev.slick-arrow {
           right: 37px
       }
   </style>
   <!--   Weekly2-News start -->
   <div class="weekly2-news-area pt-50 pb-30 gray-bg">
       <div class="container">
           <div class="weekly2-wrapper">
               <div class="row">
                   <!-- Banner -->
                   <div class="col-lg-3">
                       <div class="home-banner2 d-none d-lg-block">
                           <img src="{{ asset('img/classes-1.jpg') }}" alt="">
                       </div>
                   </div>
                   <div class="col-lg-9">
                       <div class="slider-wrapper">
                           <!-- section Tittle -->
                           <div class="row">
                               <div class="col-lg-12">
                                   <div class="small-tittle mb-30">
                                       <h4>Classes</h4>
                                   </div>
                               </div>
                           </div>
                           <!-- Slider -->
                           <div class="row">
                               <div class="col-lg-12">
                                   <div class="weekly2-news-active d-flex">
                                       <!-- Single -->
                                       <div class="weekly2-single">
                                           <div class="weekly2-img">
                                               <img src="{{asset('img/classes-2.jpg')}}" alt="">
                                           </div>
                                           <div class="weekly2-caption">
                                               <h4><a href="#">Scarlett’s disappointment at latest accolade</a>
                                               </h4>
                                               <p>Jhon | 2 hours ago</p>
                                           </div>
                                       </div>
                                       <!-- Single -->
                                       <div class="weekly2-single">
                                           <div class="weekly2-img">
                                               <img src="{{asset('img/classes-3.jpg')}}" alt="">
                                           </div>
                                           <div class="weekly2-caption">
                                               <h4><a href="#">Scarlett’s disappointment at latest accolade</a>
                                               </h4>
                                               <p>Jhon | 2 hours ago</p>
                                           </div>
                                       </div>
                                       <!-- Single -->
                                       <div class="weekly2-single">
                                           <div class="weekly2-img">
                                               <img src="{{asset('img/classes-4.jpg')}}" alt="">
                                           </div>
                                           <div class="weekly2-caption">
                                               <h4><a href="#">Scarlett’s disappointment at latest accolade</a>
                                               </h4>
                                               <p>Jhon | 2 hours ago</p>
                                           </div>
                                       </div>
                                       <!-- Single -->
                                       <div class="weekly2-single">
                                           <div class="weekly2-img">
                                               <img src="{{asset('img/classes-5.jpg')}}" alt="">
                                           </div>
                                           <div class="weekly2-caption">
                                               <h4><a href="#">Scarlett’s disappointment at latest accolade</a>
                                               </h4>
                                               <p>Jhon | 2 hours ago</p>
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
   @push('scripts')
       <script>
           // Weekly-2 Acticve
           $('.weekly2-news-active').slick({
               dots: false,
               infinite: true,
               speed: 500,
               arrows: true,
               autoplay: true,
               loop: true,
               slidesToShow: 3,
               prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
               nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
               slidesToScroll: 1,
               responsive: [{
                       breakpoint: 1200,
                       settings: {
                           slidesToShow: 2,
                           slidesToScroll: 1,
                           infinite: true,
                           dots: false,
                       }
                   },
                   {
                       breakpoint: 992,
                       settings: {
                           slidesToShow: 2,
                           slidesToScroll: 1
                       }
                   },
                   {
                       breakpoint: 700,
                       settings: {
                           arrows: false,
                           slidesToShow: 1,
                           slidesToScroll: 1
                       }
                   },
                   {
                       breakpoint: 480,
                       settings: {
                           arrows: false,
                           slidesToShow: 1,
                           slidesToScroll: 1
                       }
                   }
               ]
           });
       </script>
   @endpush
