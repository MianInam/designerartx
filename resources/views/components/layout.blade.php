<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Designer Artx</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        !function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                    var i = document.getElementsByTagName("script")[0];
                    i.parentNode.insertBefore(o, i);
                };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('g2zgir4dypk3');
    </script>
    <!-- End of Async Drift Code -->

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div>
            {{--            <img src="img/carousel-1.jpg">--}}

        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-absolute nav-bar p-0">
    <div class="container position-relative" style="z-index: 9;" data-aos="slide-down">
        <nav
            class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5 border-bar border-left border-right border-bottom">
            <a href="/" class="navbar-brand">
                <img class="m-0 display-5" style="width: 300px;" src="img/logo.png">
                {{--                <h1 class="m-0 display-5 text-white"><span class="text-primary">Designer</span>ArtX</h1>--}}
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse" >
                <div class="navbar-nav ml-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/portfolio" class="nav-item nav-link">Portfolio</a>
                    <a href="/our-price" class="nav-item nav-link">Price List</a>
                    {{--                    <a href="service.html" class="nav-item nav-link">Contact</a>--}}
                    <div class="nav-item dropdown">
                        <a href="/refund-policy" class="nav-link dropdown-toggle">Refund Policy</a>
                        {{--                        data-toggle="dropdown"--}}
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/privacy-policy" class="dropdown-item">Privacy Policy</a>
                            <a href="/terms-and-conditions" class="dropdown-item">Terms & Conditions</a>
                            <a href="/about" class="dropdown-item">About Us</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<!-- Under Nav Start -->
<div class="container-fluid  py-3">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>
<!-- Under Nav End -->
{{$slot}}
<div class="container-fluid bg-light" style="padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div
                    class="d-flex flex-column align-items-center justify-content-center  h-100 py-5 px-3 rounded"
                    style="background-image:url({{url('/img/start.jpg')}});" data-aos="zoom-in-up">
                    <div class=" display-1 font-weight-normal text-secondary mb-3"><h1 style="color:white;">ARE YOU
                            READY?</h1></div>
                    <h6 class="display-3 mb-3" style="text-align: center;">Let's Start Your Project</h6><br><br><br>
                    <div class="containerbtn">
                        <div class="centerbtn1">
                            <a href="https://wa.link/hf4mw2"
                               class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4 rounded-pill centerbtn1 shadow-lg"
                               style="width: 200px;">START NOW</a>
                            {{--                            <a href="/contact" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4" style="width: 200px;">Contact Us</a>--}}
                        </div>
                    </div>
                    {{--                    <div class="wrapperbtn">--}}
                    {{--                        <button><a href="https://wa.link/hf4mw2" id="aa">START NOW</a></button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<div class="container-fluid bg-grey text-white py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary-black mb-4">Popular Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="mb-2" style="color: black;" href="/"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="mb-2" style="color: black;" href="/about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="mb-2" style="color: black;" href="/portfolio"><i class="fa fa-angle-right mr-2"></i>Portfolio</a>
                <a class="" style="color: black;" href="/contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary-black mb-4">Get In Touch</h4>
            <p style="color: black;"><i class="fa fa-map-marker-alt mr-2" style="color: black;"></i>Jindo Dero Talka
                Garhi Yasin Larkana</p>
            <p style="color: black;"><i class="fa fa-phone-alt mr-2" style="color: black;"></i>+447902018704</p>
            <p style="color: black;"><i class="fa fa-envelope mr-2" style="color: black;"></i>Designerartx@gmail.com</p>
        </div>
        {{--    </div>--}}
        {{--    <div> <!-- Back to Top -->--}}
        <a href="#" class="btn btn-lg btn-primary back-to-top" style="margin-bottom: 70px;"><i class="fa fa-angle-double-up"></i></a>
    </div>
</div>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset:300,
        duration:1200,
    });
</script>
</body>

</html>
