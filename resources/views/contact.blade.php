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
    <title>OKE | Contact Us</title>

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

    <!-- Toaster Message -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>
        .invalid-feedback {
            color: rgb(247, 247, 247);
            font-size: 14px;
            font-weight: 400px;
            margin-left: 20px;
        }

        .message-box-sec {
            padding: 30px 22px !important;
        }
    </style>
</head>

<body>

    <!-- ======= Start Header =======-->
    @include('common.header')
    <!-- ======= End Header =======-->

    <!-- breadcrumb start -->
    <section class="breadcrumb-wrap contact-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="breadcrumb-box">
                        <h1>Contact Us</h1>
                        <h3>Feel free to write us anytime</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- contact-one start -->
    <section class="contact-one-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-one_content wow fadeInLeft animated" data-wow-delay="700ms"
                        data-wow-duration="700ms">
                        <ul class="list-unstyled contact-one_info">
                            <li class="contact-one_info_item">
                                <div class="contact-one_info_icon">
                                    <img src="{{ asset('assets/images/icons/location.png') }}">
                                </div>
                                <div class="contact-one_info_content">
                                    <p class="contact-one_info_text">Our Location</p>
                                    <p class="contact-one_info_title">Plot A-161, Wagle Industrial Estate,<br> Thane
                                        (Mumbai), 400 604 India.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-one_content wow fadeInLeft animated" data-wow-delay="700ms"
                        data-wow-duration="700ms">
                        <ul class="list-unstyled contact-one_info">
                            <li class="contact-one_info_item">
                                <div class="contact-one_info_icon">
                                    <img src="{{ asset('assets/images/icons/phonee.png') }}">
                                </div>
                                <div class="contact-one_info_content">
                                    <p class="contact-one_info_text">Have any question?</p>
                                    <p class="contact-one_info_title">
                                        <b>Arvos, RSB, Catalyst - </b>
                                        <a href="tel:+91 81088 70099"> +91 81088 70099</a>
                                    </p>
                                    <hr>
                                    <p class="contact-one_info_title">
                                        <b>Battery Manufacturing - </b>
                                        <a href="tel:+918655780031">+91 86557 80031</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-one_content wow fadeInLeft animated" data-wow-delay="700ms"
                        data-wow-duration="700ms">
                        <ul class="list-unstyled contact-one_info">
                            <li class="contact-one_info_item">
                                <div class="contact-one_info_icon">
                                    <img src="{{ asset('assets/images/icons/mail.png') }}">
                                </div>
                                <div class="contact-one_info_content">
                                    <p class="contact-one_info_text">Send email</p>
                                    <p class="contact-one_info_title">
                                        <b>Arvos, RSB, Catalyst - </b>
                                        <a href="mailto:shailesh.bade@oke.co.in">
                                            <i class="fa fa-envelope"></i>&NonBreakingSpace;
                                            shailesh.bade@oke.co.in
                                        </a>
                                    </p>
                                    <hr>
                                    <p class="contact-one_info_title">
                                        <b>Battery Manufacturing -</b>
                                        <a href="mailto:shailesh.bade@arvosindia.com">
                                            <i class="fa fa-envelope"></i>&NonBreakingSpace;
                                            sales@oke.co.in
                                        </a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact One-->

    <!-- Contact Form -->
    <section class="contact-form-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form id="contactForm" method="POST" action="{{ route('send-mail') }}" enctype="multipart/form-data" enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <div class="heading white-heading">
                            <h2>Contact Form</h2>
                            <h3>Feel free to write us anytime</h3>
                        </div>

                        <div class="row">
                            <!-- Name Field -->
                            <div class="form-group col-md-6">
                                <label>Name : <span class="text-light">*</span></label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="form-group col-md-6">
                                <label>Email ID : <span class="text-light">*</span></label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter Email Id">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Phone Number Field -->
                            <div class="form-group col-md-6">
                                <label>Phone No : <span class="text-light">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Mobile No">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Enquiry Dropdown -->
                            <div class="form-group col-md-6">
                                <label>Enquiry : <span class="text-light">*</span></label>
                                <select class="form-control @error('enquiry_id') is-invalid @enderror" id="enquiry_id" name="enquiry_id">
                                    <option value="">Select Enquiry</option>
                                    <option value="1" {{ old('enquiry_id')=='1' ? 'selected' : '' }}>Arvos</option>
                                    <option value="2" {{ old('enquiry_id')=='2' ? 'selected' : '' }}>RSB</option>
                                    <option value="3" {{ old('enquiry_id')=='3' ? 'selected' : '' }}>Catalyst</option>
                                    <option value="4" {{ old('enquiry_id')=='4' ? 'selected' : '' }}>Battery Manufacturing</option>
                                </select>
                                @error('enquiry_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Message Field -->
                            <div class="form-group col-md-12">
                                <label>Message : <span class="text-light">*</span></label>
                                <textarea id="message" name="message" class="form-control message-box-sec @error('message') is-invalid @enderror" rows="5" cols="5" value="{{ old('message') }}" placeholder="Enter Message">{{ old('message') }}</textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Captcha Field -->
                            <div class="col-sm-12 mb-3" style="margin: 20px;">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                @error('g-recaptcha-response')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center col-md-12">
                                <button type="submit" class="btn-primary btn-grey">
                                    <span>Submit</span>
                                    <span class="btn-primary-inner">
                                        <img src="{{ asset('assets/images/icons/btn.svg') }}" alt="Submit">
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->

    <!-- Google Map -->
    <section class="contact-map-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="google_map">
                        <h3>Our Location</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11755.37225357605!2d72.9460531!3d19.1952408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b908ffffffff%3A0x4bb4618fba0be4a5!2sOranje%20Kracht%20Engineering!5e1!3m2!1sen!2sin!4v1728368519776!5m2!1sen!2sin"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Map End -->

    <!-- Contact Box -->
    <section class="box-two">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-text">
                        <ul class="contact-info-list">
                            <h3>For Arvos, RSB, Catalyst</h3>
                            <li><i class="fa fa-user"></i> Shailesh Bade</li>
                            <li>
                                <a href="mailto:shailesh.bade@oke.co.in">
                                    <i class="fa fa-envelope"></i>&NonBreakingSpace;
                                    shailesh.bade@oke.co.in
                                </a>
                            </li>
                            <li><a href="tel:+91 81088 70099"><i class="fa fa-phone"></i> +91 81088 70099</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-text">
                        <ul class="contact-info-list">
                            <h3>For Battery Manufacturing</h3>
                            <li><i class="fa fa-user"></i> Mukesh Rane</li>
                            <li>
                                <a href="mailto:shailesh.bade@arvosindia.com">
                                    <i class="fa fa-envelope"></i>&NonBreakingSpace;
                                    sales@oke.co.in
                                </a>
                            </li>
                            <li><a href="tel:+91 12345 67890"><i class="fa fa-phone"></i>+91 86557 80031 </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Box End -->

    <!-- ======= Start Footer ======= -->
    @include('common.footer')
    <!-- ======= End Footer ======= -->

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

    <!-- Toaster Java Script -->
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"

            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    <script>
        // For Name Validation
        $('#name').keypress(function (e) {
            // accept only alphabets and space
            var regex = new RegExp("^[a-zA-Z \s]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }
            else
            {
                e.preventDefault();
                alert('Please Enter Alphabate');
                return false;
            }
        });
    </script>

</body>

</html>
