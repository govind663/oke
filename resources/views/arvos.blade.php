<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>OKE | Arvos</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/images/home/favicon.png') }}" sizes="32x32" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
</head>

<body>

    <!-- ======= Start Header =======-->
    @include('common.header')
    <!-- ======= End Header =======-->

    <!-- banner section start -->
    <section class="hero-banner-wrap breadcrumb-banner-text">
        <div class="">
            <div class="item">
                <div class="slider-card">
                    <img src="{{ asset('assets/images/banner/arvos-banner-1.jpg') }}" class="img-responsive">
                    <div class="slider-text arvos-text">
                        <div class="banner-subsubtitle">
                            <h5>India Representative of</h5>
                            <img src="{{ asset('assets/images/home/arvos-logo.png') }}" class="img-responsive">
                        </div>
                        <h2 data-aos="fade-up" data-aos-duration="1000" class="aos-init aos-animate">
                            High Temperature Energy <br>Recovery & Efficiency<br> Product Solutions
                        </h2>
                        <div class="breadcrumb-box">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="#">Business</a></li>
                                <li>Arvos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- banner section end -->

    <section class="industry-served-wrap">
        <div class="c_line">
            <img src="{{ asset('assets/images/icons/c_line.png') }}">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="industry-item height-max-img">
                        <img src="{{ asset('assets/images/home/arvos-industries.jpg') }}" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="industry-served-carosol">
                        <div class="industies-list-wrap arvos-ind-lis-sec">
                            <div class="heading white-heading text-left">
                                <h2>Industries</h2>
                                <h3>Industry Served</h3>
                            </div>
                            <div class="industies-list">
                                <ul>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/oil-refinery.png') }}">
                                        <h2>Oil & Gas Refinery</h2>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/chemical.png') }}">
                                        <h2>Chemicals</h2>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/fertilizer.png') }}">
                                        <h2>Fertilizers</h2>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/carbon-black.png') }}">
                                        <h2>Carbon Black</h2>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/coal.png') }}">
                                        <h2>Coal / Petcoke Gasification</h2>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/bio-energy.png') }}">
                                        <h2>Biomass Gasification</h2>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/industryy.png') }}">
                                        <h2>Petrochemical</h2>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="pattern-box-two">
        <div class="horizontal-line"></div>
    </div>

    <section class="rsb-product-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading white-heading text-center">
                        <h2>Services</h2>
                        <h3>We Provide You The Best Experience</h3>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="single-io-box">
                        <div class="io-img">
                            <img src="{{ asset('assets/images/product/arvos-app-1.jpg') }}" class="img-responsive">
                        </div>
                        <div class="bg-voice-card-overlay"></div>
                        <div class="io-text">
                            <h3>Syn Gas cooler for Gasification</h3>
                            <!-- <a href="#">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="single-io-box">
                        <div class="io-img">
                            <img src="{{ asset('assets/images/product/arvos-app-2.jpg') }}" class="img-responsive">
                        </div>
                        <div class="bg-voice-card-overlay"></div>
                        <div class="io-text">
                            <h3>Transfer line exchanger (TLE) for Ethylene cracking</h3>
                            <!-- <a href="#">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="single-io-box">
                        <div class="io-img">
                            <img src="{{ asset('assets/images/product/arvos-app-3.jpg') }}" class="img-responsive">
                        </div>
                        <div class="bg-voice-card-overlay"></div>
                        <div class="io-text">
                            <h3>Reactor (Process gas cooler) for Nitric Acid - WNA plants</h3>
                            <!-- <a href="#">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="single-io-box">
                        <div class="io-img">
                            <img src="{{ asset('assets/images/product/arvos-app-4.jpg') }}" class="img-responsive">
                        </div>
                        <div class="bg-voice-card-overlay"></div>
                        <div class="io-text">
                            <h3>Air Preheater & waste heat boiler for carbon black plants</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rsb-linkto-main cta-align-vertical">
        <div class="container-fluid-custom">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <h2>For more information,</h2>
                    <div class="cta-box-email-phone">
                        <div class="contact-single-box">
                            <i class="fa fa-phone"></i>
                            <a href="tel:+91 81088 70099">+91 81088 70099</a>
                        </div>
                        <div class="contact-single-box">
                            <i class="fa fa-envelope"></i>
                            <a href="/cdn-cgi/l/email-protection#85f6ede4ece9e0f6edabe7e4e1e0c5eaeee0abe6eaabeceb">
                                <span class="__cf_email__" data-cfemail="394a515850555c4a51175b585d5c7956525c175a56175057">[email&#160;protected]</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <a href="https://www.schmidtsche-schack.com/" target="_blank">
                        <button class="btn-primary">
                            <span>Read More</span>
                            <span class="btn-primary-inner">
                                <img src="{{ asset('assets/images/icons/btn.svg') }}">
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Start Footer ======= -->
    @include('common.footer')
    <!-- ======= End Footer ======= -->

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu.js') }}"></script>

    <!-- for loader -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easeScroll.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script type="text/javascript">
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

</body>

</html>
