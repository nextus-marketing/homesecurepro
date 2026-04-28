<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="description"
        content="Home Secure Pro offers reliable CCTV cameras, smart home security systems, alarms, and surveillance solutions. Secure your home with advanced technology designed for safety and peace of mind.">
    <!-- Page Title -->
    <title>@yield('title')</title>
    <link rel="canonical" href="{{ url()->current() }}">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/my-img/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Onest:wght@100..900&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="/frontend/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="/frontend/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="/frontend/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="/frontend/css/custom.css" rel="stylesheet" media="screen">
</head>

<body>

    <!-- Preloader Start -->
    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="/frontend/images/loader.svg" alt=""></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <a href="tel:+18001234567" class="floating-call">
        <i class="fa-solid fa-phone"></i>
    </a>

    <style>
        .navbar {
            padding: 10px 0;
            align-items: center;
        }

        .floating-call {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: #fcde70;
            color: #fffbfb;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 999;
            transition: 0.3s;
        }

        .floating-call:hover {
            transform: scale(1.1);
        }
    </style>

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="/">
                        <img src="/frontend/my-img/logo.png" alt="Logo"
                            style="width: 200px; height: auto; max-width: 100%;">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto d-flex justify-content-center w-100" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/#about">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="/#contact">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Header Contact Btn Start -->
                        <div class="header-contact-btn">
                            <a href="#0" class="btn-default">(123) 456 - 789</a>
                        </div>
                        <!-- Header Contact Btn End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Main Start -->
    <footer class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- About Footer start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="/frontend/my-img/footer-logo.png" alt=""
                                style="width: 200px; height: auto; max-width: 100%;">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Content -->
                        <div class="about-footer-content">
                            <p>
                                We provide smart and reliable home security solutions designed to protect your home,
                                your family, and everything that matters most. Our systems are easy to use, highly
                                secure, and built for complete peace of mind.
                            </p>
                        </div>
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-5">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/#about">About Us</a></li>
                            <li><a href="/#contact">Contact Us</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/terms-and-condition">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-7">
                    <!-- Footer Contact -->
                    <div class="footer-links">
                        <h3>Contact Us</h3>

                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-phone-accent.svg" alt="">
                            </div>
                            <div class="footer-contact-content">
                                <p><a href="tel:+18001234567">(800) 123-4567</a></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="footer-copyright" style="display:flex; justify-content:center; align-items:center;">
                        <div class="footer-copyright-text">
                            <p>Copyright © 2026 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .footer-copyright {
            text-align: center !important;
        }

        .footer-copyright-text {
            width: 100%;
            text-align: center !important;
        }
    </style>
    <!-- Footer Main End -->

    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/frontend/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/frontend/js/SplitText.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>
</body>

</html>
