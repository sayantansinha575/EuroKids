  <style>
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .youtube-area .single-video .video-intro h4 {
              font-size: 14px
          }
      }

      .recent-articles .recent-wrapper {
          margin-bottom: 23px
      }

      .recent-articles .single-recent {
          position: relative;
          margin-left: 15px;
          margin-right: 15px
      }

      .recent-articles .single-recent .what-img img {
          border-radius: 6px;
          width: 100%
      }

      .recent-articles .single-recent .what-cap {
          padding: 20px 20px 10px 10px;
          background: #fff;
          position: absolute;
          bottom: 0px;
          left: 0;
          width: 80%;
          border-radius: 0 7px 0 0;
          -webkit-transition: all .4s ease-out 0s;
          -moz-transition: all .4s ease-out 0s;
          -ms-transition: all .4s ease-out 0s;
          -o-transition: all .4s ease-out 0s;
          transition: all .4s ease-out 0s
      }

      .recent-articles .single-recent .what-cap h4 {
          font-size: 18px
      }

      @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .recent-articles .single-recent .what-cap h4 {
              font-size: 16px
          }
      }

      @media (max-width: 575px) {
          .recent-articles .single-recent .what-cap h4 {
              font-size: 13px
          }
      }

      .recent-articles .single-recent .what-cap h4 a {
          font-weight: 700;
          line-height: 1.4
      }

      .recent-articles .single-recent .what-cap h4 a:hover {
          color: #ff2143
      }

      .recent-articles .single-recent P {
          font-size: 11px;
          font-weight: 600;
          margin-bottom: 0px;
          display: inline-block
      }

      .recent-articles .single-recent span {
          color: #7a8496;
          position: absolute;
          right: 20px;
          bottom: 2px;
          font-size: 30px;
          cursor: pointer
      }

      .recent-articles .slick-arrow {
          background: none;
          border: none;
          position: absolute;
          bottom: -87px;
          text-align: center;
          left: 0;
          right: -85px;
          margin: auto;
          font-size: 46px;
          cursor: pointer;
          color: #ff0b0b;
          -webkit-transition: all .4s ease-out 0s;
          -moz-transition: all .4s ease-out 0s;
          -ms-transition: all .4s ease-out 0s;
          -o-transition: all .4s ease-out 0s;
          transition: all .4s ease-out 0s
      }

      .recent-articles .slick-prev.slick-arrow {
          transform: rotate(180deg);
          left: -172px;
          color: #ddd
      }

      .recent-articles .slick-prev.slick-arrow:hover {
          color: red
      }
  </style>
  <!--  Recent Articles start -->
  <div class="recent-articles pt-80 pb-80">
      <div class="container">
          <div class="recent-wrapper">
              <!-- section Tittle -->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="section-tittle mb-30">
                          <h3>Trending News</h3>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="recent-active dot-style d-flex dot-style">
                          <!-- Single -->
                          <div class="single-recent">
                              <div class="what-img">
                                  <img src="{{ asset('img/classes-1.jpg') }}" alt="">
                              </div>
                              <div class="what-cap">
                                  <h4><a href="#">
                                          <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                  ations</a></h4>
                                      </a></h4>
                                  <P>Jun 19, 2020</P>
                                  <a class="popup-video btn-icon"
                                      href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fa-regular fa-circle-play"></i></a>

                              </div>
                          </div>
                          <!-- Single -->
                          <div class="single-recent">
                              <div class="what-img">
                                  <img src="{{ asset('img/classes-2.jpg') }}" alt="">
                              </div>
                              <div class="what-cap">
                                  <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a>
                                  </h4>
                                  <P>Jun 19, 2020</P>
                                  <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fa-regular fa-circle-play"></i></a>
                              </div>
                          </div>
                          <!-- Single -->
                          <div class="single-recent">
                              <div class="what-img">
                                  <img src="{{ asset('img/classes-6.jpg') }}" alt="">
                              </div>
                              <div class="what-cap">
                                  <h4><a href="latest_news.html">
                                          <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                  ations</a></h4>
                                      </a></h4>
                                  <P>Jun 19, 2020</P>
                                  <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fa-regular fa-circle-play"></i></a>
                              </div>
                          </div>
                          <!-- Single -->
                          <div class="single-recent">
                              <div class="what-img">
                                  <img src="{{ asset('img/classes-3.jpg') }}" alt="">
                              </div>
                              <div class="what-cap">
                                  <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a>
                                  </h4>
                                  <P>Jun 19, 2020</P>
                                  <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fa-regular fa-circle-play"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--Recent Articles End -->
  @push('scripts')
      <script>
          // recent-active
          $('.recent-active').slick({
              dots: false,
              infinite: true,
              speed: 600,
              arrows: false,
              slidesToShow: 3,
              slidesToScroll: 1,
              prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
              nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',

              initialSlide: 3,
              loop: true,
              responsive: [{
                      breakpoint: 1024,
                      settings: {
                          slidesToShow: 3,
                          slidesToScroll: 3,
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
                      breakpoint: 768,
                      settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                      }
                  }
              ]
          });
      </script>
  @endpush
