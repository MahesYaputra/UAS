<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{-- title --}}
    <title>OVERLOOP | Stay Classy In The Loop</title>
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
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="/">OVERLOOP</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{ asset('') }}public-assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <!-- Start Navbar -->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#products">Products</a></li>
                    <li><a class="nav-link scrollto " href="#authenticity">Authenticity Checker</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- End Navbar -->

            <a href="https://www.tokopedia.com/overloop" target="blank" class="get-started-btn scrollto">Buy Now</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Simplicity Is The <span>Key</span></h1>
                    <h2>Stay Classy In The Loop</h2>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('public-assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>Classy Streetwear Brand</h3>
                        <p class="fst-italic">
                            Dressing classy means dressing elegant and sophisticated. It's also timeless and elegant.
                            But do you ever think that "streetwear" can be one of the classy style? OVERLOOP ready to
                            serve you a product that:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Simple</li>
                            <li><i class="ri-check-double-line"></i> Classy</li>
                            <li><i class="ri-check-double-line"></i> Limited</li>
                        </ul>
                        <p>
                            OVERLOOP present a product that can be used as the main choice of clothing worn by people
                            everyday by bringing classy values. OVERLOOP ready to deliver quality products and
                            prioritize customer satisfaction and improve the appearance quality of the wearer.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="image col-lg-6" style='background-image: url("{{ asset('public-assets/img/features.jpg')}}");'
                        data-aos="fade-right"></div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-receipt"></i>
                            <h4>SIMPLE</h4>
                            <p>We present a product with uncomplicated in design without much ornamentation.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-cube-alt"></i>
                            <h4>CLASSY</h4>
                            <p>We present a product that reflecting high standards of personal behavior.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-images"></i>
                            <h4>LIMITED</h4>
                            <p>We present a products that only 50pcs/catalog in the world.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Product Section ======= -->
        <section id="products" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Products</h2>
                    <p>Check our Products</p>
                </div>


                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="https://www.tokopedia.com/overloop">Oversized Tee</a></h4>
                            <p>Oversized is a term used for the roomiest possible fit, one that doesn't have any body
                                definition at all. It brings to mind slouch, volume and less structure. An oversized fit
                                is the most fashion forward and edgy fit. Once you get started with oversized garments,
                                it's all about proportions.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Jacket / Hoodie (Coming Soon)</a></h4>
                            <p>A jacket is a piece of clothing that is typically worn as outerwear. It has a bodice that
                                reaches to the waist or hips. A jacket usually has long sleeves that extend to the
                                wrist. Most jackets have some type of closure.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Short Pants (Coming Soon)</a></h4>
                            <p>An outer garment covering each leg separately and usually extending from the waist to the
                                upper knee</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Products Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>EXCLUSIVE ONLY ON TOKOPEDIA</h3>
                    <a class="cta-btn" href="https://www.tokopedia.com/overloop" target="blank">Buy Now</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Authenticity Section ======= -->
        <section id="authenticity" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Authenticity</h2>
                    <p>Authenticity Checker</p>
                </div>

                <form action="/" method="GET">
                    <div class="form-group">
                        <label>Loopkey:</label>
                        <input type="text" class="form-control" name="loopkey" id="loopkey" required
                            aria-describedby="emailHelp" placeholder="OVLP123XXXXXXX">
                        <small id="emailHelp" class="form-text text-muted">Loopkey listed on the purchased product's hang tag.</small>
                        <br>
                    </div>

                    <div class="form-group">
                        <label>Captcha:</label>

                        <!-- input captcha -->
                        <div class="code">
                            <div class="captcha-code" style="border: 1px solid #000000;  padding:10px">
                                <div class="dynamic-code">
                                </div>
                            </div>
                            <div class="captcha-reload">
                                <i class="ion-ios-loop-strong"></i>
                            </div>
                        </div>
                        <div class="captcha-input">
                            <input type="text" class="form-control" id="captcha-input" required
                                autocomplete="off" placeholder="Enter captcha code ...">
                            <span id="errCaptcha"></span>
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary"
                        style="background-color:
                        #fbc353; border:none; color:black">Submit
                    </button>
                </form><br>


            </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3>OVERLOOP</h3>
                                <p>
                                    <strong>Email:</strong> info@overloop.id<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#products">Products</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#authenticity">Authenticity Checker</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">

                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Visit Our Store</h4>
                            <p>Exclusive only on Tokopedia</p>
                            <a href="https://www.tokopedia.com/overloop" target="blank"><button class="btn btn-primary"
                            style="background-color:
                            #fbc353; border:none; color:black">Click Here
                        </button></a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>OVERLOOP</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">Erick Laurianto</a>
                </div>
            </div>
        </footer><!-- End Footer -->

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
