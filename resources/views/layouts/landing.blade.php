<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Clasifico - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('landing/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('landing/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

<div class="boxed_wrapper">


    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->


    <!-- main header -->
    <header class="main-header style-two">

        <!-- header-lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.html"><img src="{{ asset('landing/images/logo-2.png') }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=""><a href="index.html">Home</a>
                                    </li>
                                    <li class=""><a href="index.html">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="btn-box">
                        <a href="browse-ads-details.html" class="theme-btn-one"><i class="icon-1"></i>Submit Ads</a>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.html"><img src="{{ asset('landing/images/logo.png') }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="btn-box">
                        <a href="browse-ads-details.html" class="theme-btn-one"><i class="icon-1"></i>Submit Ads</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
    </div><!-- End Mobile Menu -->


    @yield('content')


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top" style="background-image: url({{ asset('landing/images/background/footer-1.jpg') }});">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="{{ asset('landing/images/footer-logo.png') }}" alt=""></a></figure>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consetetur adi pisicing elit sed eiusm tempor in cididunt ut labore dolore magna aliqua enim ad minim venitam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="footer-inner clearfix">
                    <div class="copyright pull-left"><p><a href="index.html">News Prediction</a> &copy; 2022 All Right Reserved</p></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="far fa-long-arrow-up"></span>
    </button>
</div>


<!-- jequery plugins -->
<script src="{{ asset('landing/js/jquery.js') }}"></script>
<script src="{{ asset('landing/js/popper.min.js') }}"></script>
<script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('landing/js/owl.js') }}"></script>
<script src="{{ asset('landing/js/wow.js') }}"></script>
<script src="{{ asset('landing/js/validation.js') }}"></script>
<script src="{{ asset('landing/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('landing/js/appear.js') }}"></script>
<script src="{{ asset('landing/js/scrollbar.js') }}"></script>
<script src="{{ asset('landing/js/jquery.nice-select.min.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('landing/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->
</html>
