<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="{{ asset('template') }}/index.html" class="navbar-brand">
                <h1 class="text-primary fw-bold mb-0">Cater<span class="text-dark">Serv</span> </h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ asset('template') }}/index.html" class="nav-item nav-link active">Home</a>
                    <a href="{{ asset('template') }}/about.html" class="nav-item nav-link">About</a>
                    <a href="{{ asset('template') }}/service.html" class="nav-item nav-link">Services</a>
                    <a href="{{ asset('template') }}/event.html" class="nav-item nav-link">Events</a>
                    <a href="{{ asset('template') }}/menu.html" class="nav-item nav-link">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="{{ asset('template') }}/#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light">
                            <a href="{{ asset('template') }}/book.html" class="dropdown-item">Booking</a>
                            <a href="{{ asset('template') }}/blog.html" class="dropdown-item">Our Blog</a>
                            <a href="{{ asset('template') }}/team.html" class="dropdown-item">Our Team</a>
                            <a href="{{ asset('template') }}/testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="{{ asset('template') }}/404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ asset('template') }}/contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                <a href="{{ asset('template') }}/" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
            </div>
        </nav>
    </div>
</div>