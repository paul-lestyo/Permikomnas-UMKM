<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UMKM-Kemuning</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ secure_asset('front') }}/assets/images/favicon.png">

    <!-- All CSS is here
 ============================================ -->

    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/vendor/vandella.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/vendor/jellybelly.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/vendor/icofont.min.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/vendor/fontello.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="{{ secure_asset('front') }}/assets/css/style.min.css"> -->
    <style>
        .tab-content>.active {
            animation: fadeIn 2s;
        }
        .slider-mt-7, .breadcrumb-mt {
            margin-top: 0; !important
        }

        .slick-list {
            padding-top: 40px;
        }

        @media only screen and (max-width: 767px){
            .breadcrumb-ptb-1 {
                padding: 0;
            }
            .slider-mt-7, .breadcrumb-mt {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="main-wrapper main-wrapper-2 main-wrapper-3">

        @include('/front/layouts/nav')
        @include('/front/layouts/slider')
        @include('/front/layouts/shop')
        @include('/front/layouts/toko')
        @include('/front/layouts/footer')
        @include('/front/layouts/modal')


    </div>
    <!-- All JS is here
============================================ -->
    <script src="{{ secure_asset('front') }}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/slick.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/countdown.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/wow.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/instafeed.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/svg-injector.min.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/mouse-parallax.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/images-loaded.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/isotope.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/jquery-ui.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/magnific-popup.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/easyzoom.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/scrollup.js"></script>
    <script src="{{ secure_asset('front') }}/assets/js/plugins/ajax-mail.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above
<script src="{{ secure_asset('front') }}/assets/js/vendor/vendor.min.js"></script>
<script src="{{ secure_asset('front') }}/assets/js/plugins/plugins.min.js"></script> -->
    <!-- Main JS -->
    <script src="{{ secure_asset('front') }}/assets/js/main.js"></script>

</body>

</html>
<!-- smooth scroll -->
<script>
    $(document).ready(function() {

        // Add smooth scrolling to all links

        $(".smooth").on('click', function(event) {



            // Make sure this.hash has a value before overriding default behavior

            if (this.hash !== "") {

                // Prevent default anchor click behavior

                event.preventDefault();



                // Store hash

                var hash = this.hash;



                // Using jQuery's animate() method to add smooth page scroll

                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

                $('html, body').animate({

                    scrollTop: $(hash).offset().top

                }, 800, function() {



                    // Add hash (#) to URL when done scrolling (default click behavior)

                    window.location.hash = hash;

                });
            } // End if

        });

    });

</script>
