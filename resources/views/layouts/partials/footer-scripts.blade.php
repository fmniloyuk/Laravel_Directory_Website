<!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    {{-- <script src="js/jquery-3.2.1.min.js"></script> --}}
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>

    {{-- <script src="js/popper.min.js"></script> --}}
    <script src="{{ asset('js/popper.min.js') }}" defer></script>

    {{-- Adding Bootstrap JS --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}" defer></script>

    <!-- Swipper Slider JS -->
    <script src="js/swiper.min.js"></script>
    <script src="{{ asset('js/swiper.min.js') }}" defer></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>
