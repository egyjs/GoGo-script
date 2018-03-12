<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="pixie is a Personal Portfolio Template">
        <meta name="keywords" content="mhbthemes, resume, cv, portfolio, personal, developer, designer,personal resume, onepage, clean, modern">
        <meta name="author" content="Alex Smith">
        <title>{{ gettitle(@$info) }}</title>

    <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

        <!--== bootstrap ==-->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!--== font-awesome ==-->
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

        <!--== magnific-popup ==-->
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

        <!--== owl carousel ==-->
        <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">

        <!--== animate css ==-->
        <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

        <!--== style css ==-->
        <link href="{{ asset('style.css') }}" rel="stylesheet">

        <!--== responsive css ==-->
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

        <!--== theme css ==-->
        <link href="{{ asset('assets/css/theme-color.css') }}" rel="stylesheet">

        <!--== jQuery ==-->
        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>


        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body>

<!--====  COLOR PANEL ===-->
<div class="demo_panel_box">
    <div class="color_panel_box">
        <div class="spiner_button slide_in_out"><i class="fa fa-cog fa-spin"></i></div>
        <span class="color_1"></span>
        <span class="color_2"></span>
        <span class="color_3"></span>
        <span class="color_4"></span>
        <span class="color_5"></span>
        <span class="color_6"></span>
    </div>
</div>
<!--==== COLOR PANEL ===-->

<!--===== Preloader ====-->
<!--       <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>

-->



         @yield('content')


<!--====== FOOTER AREA ======-->
<footer class="footer">
    <div class="container">
        <div class="row wow zoomIn" data-wow-delay="0.4s">
            <div class="col-md-12 text-center">
                <p>&copy;2017 <strong>Alex Smith</strong>. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!--====== END FOOTER AREA ======-->


        <!--== plugins js ==-->
        <script src="{{ asset("assets/js/plugins.js") }}"></script>

        <!--== typed js ==-->
        <script src="{{ asset("assets/js/typed.js") }}"></script>

        <!--== stellar js ==-->
        <script src="{{ asset("assets/js/jquery.stellar.min.js") }}"></script>

        <!--== counterup js ==-->
        <script src="{{ asset("assets/js/jquery.counterup.min.js") }}"></script>

        <!--== waypoints js ==-->
        <script src="{{ asset("assets/js/jquery.waypoints.min.js") }}"></script>

        <!--== wow js ==-->
        <script src="{{ asset("assets/js/wow.min.js") }}"></script>

        <!--== validator js ==-->
        <script src="{{ asset("assets/js/validator.min.js") }}"></script>

        <!--== mixitup js ==-->
        <script src="{{ asset("assets/js/jquery.mixitup.js") }}"></script>

        <!--== contact js ==-->
        <script src="{{ asset("assets/js/contact.js") }}"></script>

        <!--== main js ==-->
        <script src="{{ asset("assets/js/main.js") }}"></script>
    <script>
        var element = $(".element");

        $(function() {
            element.typed({
                strings: [
                     <?php
                       @$text = explode(',',$info[0]->jobs)
                     ?>
                     @forelse($text as $t)
                      "{{ $t }}",
                     @empty
                    "Web Designer."
                    , "Graphic Designer."
                    , "Freelancer."
                     @endforelse
                ],
                typeSpeed: 100,
                loop: true,
            });
        });
    </script>
@stack('js')

</body>

<!-- Mirrored from mhbthemes.com/demos/pixie/pixie/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Mar 2018 08:28:12 GMT -->
</html>
