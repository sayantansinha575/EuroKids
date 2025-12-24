        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>EuroKids Silpara</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('preschool.admission')}}" class="nav-item nav-link active">Preschool Admission</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Our
                            Programs</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{route('program.toddler')}}" class="dropdown-item">Toddler</a>
                            <a href="{{route('program.playgroup')}}" class="dropdown-item">Playgroup</a>
                            <a href="{{route('program.nursery')}}" class="dropdown-item">Nursery</a>
                            <a href="{{route('program.eurojunior')}}" class="dropdown-item">EuroJunior</a>
                            <a href="{{route('program.eurosenior')}}" class="dropdown-item">EuroSenior</a>
                        </div>
                    </div>
                    {{-- <a href="classes.html" class="nav-item nav-link">Our Blogs</a>
                    <a href="classes.html" class="nav-item nav-link">EuroVarsity Course</a> --}}
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="team.html" class="dropdown-item">Popular Teachers</a>
                            <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                            <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                        </div>
                    </div> --}}
                    {{-- <a href="contact.html" class="nav-item nav-link">Locate Us</a> --}}
                    <a href="{{route('contact.us')}}" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="{{route('preschool.admission')}}"
                    class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Enroll Now<i
                        class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
