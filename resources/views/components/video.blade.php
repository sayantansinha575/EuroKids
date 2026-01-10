  <style>
      .youtube-area {
          background: #f4f4f4
      }

      .youtube-area .video-items video {
          width: 100%
      }

      .youtube-area .video-info .video-caption {
          position: relative
      }

      .youtube-area .video-info .video-caption .top-caption {
          background: #fff;
          width: 60%;
          border-radius: 0 7px 0 0;
          padding-top: 60px;
          padding-bottom: 30px
      }

      .youtube-area .video-info .video-caption .top-caption span {
          padding: 7px 30px;
          line-height: 1;
          color: #000;
          text-transform: uppercase;
          font-weight: 600;
          font-size: 11px
      }

      .youtube-area .single-video video {
          padding: 0 5px;
          width: 100%
      }

      .youtube-area .single-video .video-intro h4 {
          font-size: 15px;
          font-weight: 500;
          padding: 0 5px;
          line-height: 1.4
      }
  </style>
  <!-- Start Video Area -->
  <div class="youtube-area video-padding d-sm-block">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="video-items-active">
                      <div class="video-items text-center">
                          <video controls>
                              <source src="{{asset('video/news1.mp4')}}" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="video-items text-center">
                          <video controls>
                              <source src="{{asset('video/news1.mp4')}}" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="video-items text-center">
                          <video controls>
                              <source src="{{asset('video/news2.mp4')}}" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="video-items text-center">
                          <video controls>
                              <source src="{{asset('video/news3.mp4')}}" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="video-items text-center">
                          <video controls>
                              <source src="{{asset('video/news1.mp4')}}" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                  </div>
              </div>
          </div>
          <div class="video-info">
              <div class="row">
                  <div class="col-12">
                      <div class="testmonial-nav text-center">
                          <div class="single-video">
                              <video controls>
                                  <source src="{{asset('video/news1.mp4')}}" type="video/mp4">
                                  Your browser does not support the video tag.
                              </video>
                              <div class="video-intro">
                                  <h4>Old Spondon News - 2020 </h4>
                              </div>
                          </div>
                          <div class="single-video">
                              <video controls>
                                  <source src="{{asset('video/news2.mp4')}}" type="video/mp4">
                                  Your browser does not support the video tag.
                              </video>
                              <div class="video-intro">
                                  <h4>Banglades News Video </h4>
                              </div>
                          </div>
                          <div class="single-video">
                              <video controls>
                                  <source src="{{asset('video/news3.mp4')}}" type="video/mp4">
                                  Your browser does not support the video tag.
                              </video>
                              <div class="video-intro">
                                  <h4>Latest Video - 2020 </h4>
                              </div>
                          </div>
                          <div class="single-video">
                              <video controls>
                                  <source src="{{asset('video/news2.mp4')}}" type="video/mp4">
                                  Your browser does not support the video tag.
                              </video>
                              <div class="video-intro">
                                  <h4>Spondon News -2019 </h4>
                              </div>
                          </div>
                          <div class="single-video">
                              <video controls>
                                  <source src="{{asset('video/news1.mp4')}}" type="video/mp4">
                                  Your browser does not support the video tag.
                              </video>
                              <div class="video-intro">
                                  <h4>Latest Video - 2020</h4>
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
          /* 5. Video area Active */
          $('.video-items-active').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: true,
              asNavFor: '.testmonial-nav'
          });
          $('.testmonial-nav').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              asNavFor: '.video-items-active',
              dots: false,
              arrows: false,
              prevArrow: '<button type="button" class="slick-prev"><span class="ti-arrow-left"></<span></button>',
              nextArrow: '<button type="button" class="slick-next"><span class="ti-arrow-right"></span></button>',
              centerMode: true,
              focusOnSelect: true,
              centerPadding: 0,
              responsive: [{
                      breakpoint: 1024,
                      settings: {
                          slidesToShow: 3,
                          infinite: true,
                          dots: false,
                      }
                  },
                  {
                      breakpoint: 991,
                      settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                      }
                  },
                  {
                      breakpoint: 480,
                      settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                      }
                  }
              ]
          });
      </script>
  @endpush
