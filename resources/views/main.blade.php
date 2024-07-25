<!DOCTYPE html>
@include('template.header')
    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        @include('template.navbar')
        @include('template.hero')
        @include('template.about')
        @include('template.fact')
        @include('template.service')
        @include('template.event')
        @include('template.menu')

        <!-- Team Start -->
        <div class="container-fluid team py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Team</small>
                    <h1 class="display-5 mb-5">We have experienced chef Team</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="{{ asset('template') }}/img/team-1.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Henry</h4>
                                <p class="text-white mb-0">Decoration Chef</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="{{ asset('template') }}/img/team-2.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Jemes Born</h4>
                                <p class="text-white mb-0">Executive Chef</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="{{ asset('template') }}/img/team-3.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Martin Hill</h4>
                                <p class="text-white mb-0">Kitchen Porter</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="{{ asset('template') }}/img/team-4.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Adam Smith</h4>
                                <p class="text-white mb-0">Head Chef</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="{{ asset('template') }}/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

      @include('template.testimoni')
      @include('template.blog')
      @include('template.footer')



        <!-- Back to Top -->
        <a href="{{ asset('template') }}/#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('template') }}/lib/wow/wow.min.js"></script>
        <script src="{{ asset('template') }}/lib/easing/easing.min.js"></script>
        <script src="{{ asset('template') }}/lib/waypoints/waypoints.min.js"></script>
        <script src="{{ asset('template') }}/lib/counterup/counterup.min.js"></script>
        <script src="{{ asset('template') }}/lib/lightbox/js/lightbox.min.js"></script>
        <script src="{{ asset('template') }}/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('template') }}/js/main.js"></script>
    </body>
</html>
