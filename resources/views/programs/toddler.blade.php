@extends('layouts.app')

@section('content')
    <div class="container-fluid fadeIn">
        <div class="row">
            <div class="col position-relative">
                <img src="{{asset('img/toddler.png')}}" sizes="(max-width: 1200px) 200vw, 800px"
                    class="img-fluid" alt="Smart Attendance Management System for Businesses" loading="lazy">
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Nurturing Confidence Through Playful Exploration</h1>
                <p>Our EuroTots – Toddler Transition Program gently eases toddlers into a structured, play-filled environment, fostering confidence and independence. Through engaging activities, children discover the joy of routine, social interaction, and new experiences – all while building essential physical, cognitive, and language skills. With every playful step, they grow stronger, more curious, and ready for the world beyond home.</p>
            </div>
        </div>
    </div>

    
        <!-- Team Start-->
        <div class="container-fluid">
            <div class="container py-5">
                {{-- <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Team</h4>
                    <h1 class="mb-5 display-3">Meet With Our Expert Teacher</h1>
                </div> --}}
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow slideInUp" data-wow-delay="0.1s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="{{asset('img/classes-1.jpg')}}" class="img-fluid w-100" alt="">
                            {{-- <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                            <div class="team-content text-center py-3">
                                {{-- <h4 class="text-primary">Linda Carlson</h4> --}}
                                <p class="text-muted mb-2">Teacher Child Ratio 1:6</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="{{asset('img/classes-3.jpg')}}" class="img-fluid w-100" alt="">
                            {{-- <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                            <div class="team-content text-center py-3">
                                {{-- <h4 class="text-primary">Linda Carlson</h4> --}}
                                <p class="text-muted mb-2">Dedicated Support Staff 1:6</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow slideInUp" data-wow-delay="0.5s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="{{asset('img/classes-5.jpg')}}" class="img-fluid w-100" alt="">
                            {{-- <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                            <div class="team-content text-center py-3">
                                {{-- <h4 class="text-primary">Linda Carlson</h4> --}}
                                <p class="text-muted mb-2">Child First Safety First</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow slideInUp" data-wow-delay="0.7s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="{{asset('img/classes-4.jpg')}}" class="img-fluid w-100" alt="">
                            {{-- <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                            <div class="team-content text-center py-3">
                                {{-- <h4 class="text-primary">Linda Carlson</h4> --}}
                                <p class="text-muted mb-2">Experienced All-female Staff</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End-->
@endsection
