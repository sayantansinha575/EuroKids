@extends('layouts.app')

@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 about-img wow" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('img/about-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('img/about-2.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('img/about-3.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        EuroJunior</h4>
                    <h1 class="text-dark mb-4 display-5">Age-appropriate learning and educational tools suited for individual pace.</h1>
                    <p class="text-dark mb-4">
                    Encouraging age-appropriate language development involves providing tailored learning tools suited to individual spaces, fostering the ability to express thoughts and feelings effectively.
                    </p>
                    <div class="row mb-4">
                         <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>4-5 years age</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>5 Days a week</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>3 Hours per day</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Nurturing Creativity</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Social & Emotional-Skills</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Communication Skill
                            </h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Building Brain Power
                            </h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Developing Lasting Life skills
                            </h6>
                            <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Growing a Healthy Body</h6>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    About EuroJunior</h4>
                {{-- <h1 class="mb-5 display-3">Our program focuses on emerging new skills and develop multidisciplinary learning at EuroKids. We encourage developmental milestones and emerging interests in academics, creative expression and outdoor learning.</h1> --}}
            </div>
            <div class="owl-carousel testimonial-carousel wow slideInUp" data-wow-delay="0.3s">
                <div class="testimonial-item img-border-radius  p-4">
                    <div class="events">
                        <div class="events-item rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden  position-relative">
                                    <img src="{{ asset('img/classes-5.jpg') }}" class="img-fluid w-100" alt="Image">
                                    <div class="event-overlay">
                                        <a href="{{ asset('img/classes-5.jpg') }}" data-lightbox="event-1"><i
                                                class="fas fa-search-plus text-white fa-2x"></i></a>
                                    </div>
                                </div>
                                {{-- <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                            <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                12:00pm</small>
                            <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New
                                York</small>
                        </div> --}}
                            </div>
                            {{-- <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                        <a href="#" class="h4">Music & drawing workshop</a>
                        <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus
                            consectetur,</p>
                    </div> --}}
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius p-4">
                    <div class="events">
                        <div class="events-item rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden  position-relative">
                                    <img src="{{ asset('img/classes-4.jpg') }}" class="img-fluid w-100" alt="Image">
                                    <div class="event-overlay">
                                        <a href="{{ asset('img/classes-4.jpg') }}" data-lightbox="event-1"><i
                                                class="fas fa-search-plus text-white fa-2x"></i></a>
                                    </div>
                                </div>
                                {{-- <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                            <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                12:00pm</small>
                            <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New
                                York</small>
                        </div> --}}
                            </div>
                            {{-- <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                        <a href="#" class="h4">Music & drawing workshop</a>
                        <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus
                            consectetur,</p>
                    </div> --}}
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius p-4">
                    <div class="events">
                        <div class="events-item rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden  position-relative">
                                    <img src="{{ asset('img/classes-6.jpg') }}" class="img-fluid w-100" alt="Image">
                                    <div class="event-overlay">
                                        <a href="{{ asset('img/classes-6.jpg') }}" data-lightbox="event-1"><i
                                                class="fas fa-search-plus text-white fa-2x"></i></a>
                                    </div>
                                </div>
                                {{-- <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                            <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                12:00pm</small>
                            <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New
                                York</small>
                        </div> --}}
                            </div>
                            {{-- <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                        <a href="#" class="h4">Music & drawing workshop</a>
                        <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus
                            consectetur,</p>
                    </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
