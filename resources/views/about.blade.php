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
    <title>OKE | About</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/images/home/favicon.png') }}" sizes="32x32" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
</head>

<body>

    <!-- ======= Start Header =======-->
    @include('common.header')
    <!-- ======= End Header =======-->

    <!-- ======= Start Breadcrumb =======-->
    <section class="breadcrumb-wrap about-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="breadcrumb-box">
                        <h1>About Us</h1>
                        <h3>Explore, Create, Connect, Inspire.</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Breadcrumb =======-->

    <!-- ======= Start About Detail Page =======-->
    <section class="about-detail-page-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-detail-text">
                        <div class="heading white-heading">
                            <h2>About OKE</h2>
                            <h3>Oranje Kracht Engineering (OKE) operates in the sustainability <br>engineering space.
                            </h3>
                        </div>
                        <p class="text-justify">
                            Our journey started in 2009 with heat/energy recovery equipment and service space for
                            chemical, oil & gas, petrochemical and fertilizer industry with its partnership with ARVOS -
                            Schmidtsche Schack Group (<a href="www.schmidtsche-schak.com"
                                target="_blank">www.schmidtsche-schak.com</a> ). OKE represents ARVOs - Schmidtsche
                            Schak for the Indian market. OKE is working with an aim to build a sustainable bouquet of
                            products and services. It has partnered with R S Bruce, UK to offer precious metal recovery
                            services to the Indian industry.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-thumb2">
                        <div class="about-img-1">
                            <img src="{{ asset('assets/images/home/abt-img.jpg') }}" alt="img" class="img-responsive">
                        </div>
                        <div class="about-counter-wrap style2 jump-reverse">
                            <p class="about-counter-text"> Journey <br>started in</p>
                            <h3 class="about-counter-number"><span class="counter-number"><span>2009</span></span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-detail-text about-detail-text-two">
                        <p class="text-justify">
                            This is helping recover and recycle precious materials. OKE is actively involved in the
                            renewable space by designing and manufacturing battery storage solutions. It has ambitions
                            to offer complementing smart power solutions and work out synergies with gasification
                            (fossil and biomass feedstock), green chemicals for feedstock and energy. OKE has been
                            actively involved in gasification projects in India. The company has team of chemical,
                            mechanical, electrical, and electronic specialists.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End About Detail Page =======-->

    <!-- ======= Start Footer ======= -->
    @include('common.footer')
    <!-- ======= End Footer ======= -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('assets/js/menu.js') }}"></script>

    <!-- for loader -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easeScroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

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
