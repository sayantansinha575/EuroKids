<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach ($banners as $item)
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('storage/banners/' . $item->image) }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                {{-- title --}}
                                <h1 class="display-2 text-white animated slideInDown mb-4">{{ $item->title }}
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-2 pb-1">
                                    <i class="fas fa-lightbulb me-2 text-primary"></i>

                                    @php
                                        $words = explode(' ', trim($item->subtitle));
                                        $highlightIndex = 2; // 3rd word
                                    @endphp

                                    @foreach ($words as $index => $word)
                                        @if ($index === $highlightIndex)
                                            <span class="text-primary fw-bold">{{ strtoupper($word) }}</span>
                                        @else
                                            {{ $word }}
                                        @endif
                                    @endforeach
                                </p>

                                {{-- description --}}
                                <p class="mb-4 text-white-50">{{ $item->description }}</p>
                                <div class="col-lg-6">
                                    <h6 class="mb-3 text-white">
                                        <i class="fas fa-check-circle me-2 text-primary"></i>An Investment of <i
                                            class="fas fa-rupee-sign me-1"></i>15-20 lakh*
                                    </h6>
                                    <h6 class="mb-3 text-white"><i
                                            class="fas fa-check-circle me-2 text-primary"></i>Long-Term Vision
                                    </h6>
                                </div>
                                <a href="{{ route('preschool.admission') }}"
                                    class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Enroll
                                    Your Child</a>
                                <a href=""
                                    class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our
                                    Classes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Carousel End -->
