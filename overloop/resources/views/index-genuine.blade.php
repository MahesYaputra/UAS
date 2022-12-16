<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{-- title --}}
    <title>OVERLOOP | Authenticity Checker Result</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('public-assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('public-assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public-assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public-assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public-assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('public-assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public-assets/css/style.css') }}" rel="stylesheet">


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Your Product is <br><span>{{ $result }}</span></h1>
                    <h3 style="color: white">"{{ $comment }}"</h3>
                    <br>
                    <a href="/" target="blank"><button class="btn btn-primary" style="background-color:
                        #fbc353; border:none; color:white"><h4><b>Back to Home</b></h4>
                    </button></a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('public-assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('public-assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('public-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public-assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('public-assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('public-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('public-assets/vendor/php-email-form/validate.js') }}"></script>


        <!-- Template Main JS File -->
        <script src="{{ asset('public-assets/js/main.js') }}"></script>
        <script src="{{ asset('public-assets/js/captcha.js') }}"></script>

</body>

</html>
