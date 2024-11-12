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
    <title>OKE | Home</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/images/home/favicon.png') }}" sizes="32x32" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/fullpage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
</head>

<body>

    <!-- ======= Start Loading =======-->
    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>
        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    <!-- ======= End Loading =======-->

    <!-- ======= Start Header =======-->
    @include('common.header')
    <!-- ======= End Header =======-->

    <div id="fullpage">
        <section class="section black-img-bg" id="banner">
            <div class="boxes-group-wrap">
                <div class="wrap-circle-button">
                    <img src="{{ asset('assets/images/icons/arrow-down-big.png') }}">
                    <p>Scroll Down</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                            <div class="boxes-text">
                                <h1>Unlocking Efficiency, <br>Embracing Sustainability</h1>
                                <!-- <p>Navigate your choice <i class="fa fa-angle-down"></i></p> -->
                            </div>
                            <div class="boxes-group">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#section2">
                                            <div class="single-box">
                                                <p>01 - Represent</p>
                                                <img src="{{ asset('assets/images/home/arvos-logo.png') }}" class="img-responsive">
                                                <h2>Arvos</h2>
                                                <h6>High Temperature Recovery Solutions</h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#section3">
                                            <div class="single-box">
                                                <p>02 - Represent</p>
                                                <img src="{{ asset('assets/images/home/rsb-logo.png') }}" class="img-responsive">
                                                <h2>RSB</h2>
                                                <h6>Precious Metal Recovery Service</h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#section4">
                                            <div class="single-box">
                                                <p>03</p>
                                                <img src="{{ asset('assets/images/home/logo.png') }}" class="img-responsive">
                                                <h2>Catalyst</h2>
                                                <h6>Precious Metal Catalyst Supply</h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <a href="#section5">
                                            <div class="single-box">
                                                <p>04</p>
                                                <img src="{{ asset('assets/images/home/logo.png') }}" class="img-responsive">
                                                <h2>Battery</h2>
                                                <h6>Lithium Ion Battery Storage</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section banner-wrap banner-two" id="gasification">
            <div class="bg2"></div>
            <div class="banner-text">
                <h6>ARVOS Group </h6>
                <h2>Heat Recovery: Clean and<br> Efficient Solutions</h2>
                <div class="banner-pattern mb-16 flex flex-col items-center">
                    <div class="banner-line flex items-center justify-center">
                        <div class="fourline"></div>
                        <div class="thirdline"></div>
                    </div>
                    <div class="banner-line flex items-center justify-center">
                        <div class="secline"></div>
                        <div class="firstline"></div>
                    </div>
                </div>
                <div class="text-center-center">
                    <a href="arvos.html">
                        <button class="btn-primary">
                            <span>Read More</span>
                            <span class="btn-primary-inner">
                                <img src="{{ asset('assets/images/icons/btn.svg') }}" alt="arrow-right">
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <section class="section banner-wrap banner-three" id="metal">
            <div class="bg3"></div>
            <div class="banner-text">
                <h6>RS Bruce</h6>
                <h2>Precise approach for <br>precious metal recovery</h2>
                <div class="banner-pattern mb-16 flex flex-col items-center">
                    <div class="banner-line flex items-center justify-center">
                        <div class="fourline"></div>
                        <div class="thirdline"></div>
                    </div>
                    <div class="banner-line flex items-center justify-center">
                        <div class="secline"></div>
                        <div class="firstline"></div>
                    </div>
                </div>
                <div class="text-center-center">
                    <a href="rsb.html">
                        <button class="btn-primary">
                            <span>Read More</span>
                            <span class="btn-primary-inner">
                                <img src="{{ asset('assets/images/icons/btn.svg') }}">
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <section class="section banner-wrap banner-four" id="catalyst">
            <div class="bg4"></div>
            <div class="banner-text">
                <h6>Catalyst</h6>
                <h2>Catalyst Supply: Coming Soon</h2>
                <div class="banner-pattern mb-16 flex flex-col items-center">
                    <div class="banner-line flex items-center justify-center">
                        <div class="fourline"></div>
                        <div class="thirdline"></div>
                    </div>
                    <div class="banner-line flex items-center justify-center">
                        <div class="secline"></div>
                        <div class="firstline"></div>
                    </div>
                </div>
                <div class="text-center-center">
                    <a href="coming-soon.html">
                        <button class="btn-primary">
                            <span>Read More</span>
                            <span class="btn-primary-inner">
                                <img src="{{ asset('assets/images/icons/btn.svg') }}">
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <section class="section banner-wrap banner-one" id="battery-manufacturing">
            <div class="bg1"></div>
            <div class="banner-text">
                <h6>Battery Manufacturing</h6>
                <h2>Powering Tomorrow,<br> One Charge at a Time</h2>
                <div class="banner-pattern mb-16 flex flex-col items-center">
                    <div class="banner-line flex items-center justify-center">
                        <div class="fourline"></div>
                        <div class="thirdline"></div>
                    </div>
                    <div class="banner-line flex items-center justify-center">
                        <div class="secline"></div>
                        <div class="firstline"></div>
                    </div>
                </div>
                <div class="text-center-center">
                    <a href="coming-soon.html">
                        <button class="btn-primary">
                            <span>Read More</span>
                            <span class="btn-primary-inner">
                                <img src="{{ asset('assets/images/icons/btn.svg') }}">
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <!-- ======= Start Footer ======= -->
        @include('common.footer')
        <!-- ======= End Footer ======= -->

    </div>

    <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('assets/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <!-- for loader -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- image moving with parallex -->
    <script src="https://themes.tvda.pw/demos/identiq/js/jquery.parallax-1.1.3.js"></script>

    <script src="{{ asset('assets/js/fullpage.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- for loader -->
    <script type="text/javascript">
        $(function() {
            const svg = document.getElementById("svg");
            const tl = gsap.timeline();
            const curve = "M0 502S175 272 500 272s500 230 500 230V0H0Z";
            const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";

            tl.to(".loader-wrap-heading .load-text , .loader-wrap-heading .cont", {
                delay: 1.5,
                y: -100,
                opacity: 0,
            });
            tl.to(svg, {
                duration: 0.5,
                attr: {
                    d: curve
                },
                ease: "power2.easeIn",
            }).to(svg, {
                duration: 0.5,
                attr: {
                    d: flat
                },
                ease: "power2.easeOut",
            });
            tl.to(".loader-wrap", {
                y: -1500,
            });
            tl.to(".loader-wrap", {
                zIndex: -1,
                display: "none",
            });
            tl.from(
                "header .container", {
                    y: 100,
                    opacity: 0,
                    delay: 0.3,
                },
                "-=1.5"
            );

        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sandTimer = document.getElementById('sand-timer');
            const carouselDots = document.getElementById('carousel-dots');

            // Simulate transition after 3 seconds
            setTimeout(() => {
                document.querySelector('.transition-container').classList.add('active');
            }, 3000); // Transition after 3 seconds
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            new fullpage('#fullpage', {
                autoScrolling: true,
                scrollHorizontally: true,
                navigation: true,
                navigationPosition: 'right',
                anchors: ['section1', 'section2', 'section3', 'section4', 'section5', 'section6'],
                navigationTooltips: ['<img src="{{ asset('assets/images/icons/header.png') }}">',
                    '<img src="{{ asset('assets/images/icons/gasification.png') }}">', '<img src="{{ asset('assets/images/icons/metal.png') }}">',
                    '<img src="{{ asset('assets/images/icons/rs.png') }}">', '<img src="{{ asset('assets/images/icons/battery.png') }}">',
                    '<img src="{{ asset('assets/images/icons/footer.png') }}">'
                ],
                showActiveTooltip: true,
                slidesNavigation: true,
                slidesNavPosition: 'bottom',
                afterLoad: function(origin, destination, direction) {
                    // Custom function if needed after section is loaded
                }
            });
        });
    </script>
</body>

</html>
