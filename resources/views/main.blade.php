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
        {{-- @include('template.service')
        @include('template.event')
        @include('template.menu') --}}
        @include('template.team')
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
