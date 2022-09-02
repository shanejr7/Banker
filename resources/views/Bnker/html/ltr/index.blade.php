<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Banker. - Lending </title>
    <!-- /Required meta tags -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- /Favicon -->

    <!-- All CSS -->

    <!-- Vendor Css -->
    <link rel="stylesheet" href="assets/css/vendors.css">
    <!-- /Vendor Css -->

    <!-- Plugin Css -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Plugin Css -->

    <!-- Icons Css -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <!-- /Icons Css -->

    <!-- Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- /Style Css -->

    <!-- /All CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


</head>

<body>

    <!-- PreLoader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!--Preloader-->

    <!-- Header -->
    <div class="navbar-area">
        <div class="acavo-responsive-nav">
            <!-- Container -->
            <div class="container">
                <div class="acavo-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="assets/images/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Container -->
        </div>
        <div class="acavo-nav">
            <!-- Container -->
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                             <li class="nav-item"><a href="#" class="nav-link active">Home </a>
                         <!--    <li class="nav-item"><a href="#" class="nav-link active">Home <i
                                        class='las la-angle-down'></i></a> -->
                             <!--    <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="/" class="nav-link active">Home 1</a></li>
                                    <li class="nav-item"><a href="index-2.html" class="nav-link">Home 2</a></li>
                                    <li class="nav-item"><a href="index-3.html" class="nav-link">Home 3</a></li>
                                </ul> -->
                            </li>
                            @if(Auth::check()==false)

                              <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                                            <li class="nav-item"><a href="/registration" class="nav-link">Register</a></li>

                            <li class="nav-item"><a href="/about-us" class="nav-link">About Us </a>
                   

                            <li class="nav-item"><a href="#" class="nav-link">Pages <i
                                        class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                     <li class="nav-item"><a href="/loan-calculations" class="nav-link">Loan
                                    Calculation</a></li>
                                    <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                    <!-- <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li> -->
                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                             
                                    </li>
                                    <li class="nav-item"><a href="privacy-policy.html" class="nav-link">Privacy
                                            Policy</a></li>
                                   
                                </ul>
                            </li>

                         <!--    <li class="nav-item"><a href="#" class="nav-link">Blog <i class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                                    <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                    <li class="nav-item"><a href="blog-single-sidebar.html" class="nav-link">Blog Single
                                            Sidebar</a>
                                    </li>
                                    <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Single</a>
                                    </li>
                                </ul>
                            </li> -->
                      
                            @endif
                            @if(Auth::check()==true && Auth::user()->is_admin == '1')

                                <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a>

                       
                          

                            <li class="nav-item"><a href="/about-us" class="nav-link">About Us</a>

                            <!-- <li class="nav-item"><a href="#" class="nav-link">About Us <i
                                        class='las la-angle-down'></i></a> -->
                               <!--  <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="about-us-1.html" class="nav-link">About Us 1</a></li>
                                    <li class="nav-item"><a href="about-us-2.html" class="nav-link">About Us 2</a></li>
                                </ul> -->
                            </li>

                          <!--   <li class="nav-item"><a href="#" class="nav-link active">Portfolio <i
                                        class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="portfolio.html" class="nav-link active">Portfolio</a>
                                    </li>
                                    <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio
                                            Details</a></li>
                                </ul>
                            </li> -->

                            <li class="nav-item"><a href="#" class="nav-link">Pages <i
                                        class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                   
                                   <!--  <li class="nav-item"><a href="#" class="nav-link">Auth Page <i
                                                class='las la-angle-right'></i></a> -->
                                       <!--  <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
                                            <li class="nav-item"><a href="signup.html" class="nav-link">Sing Up</a></li>
                                            <li class="nav-item"><a href="recover.html" class="nav-link">Recover</a>
                                            </li>
                                        </ul> -->
                                    </li>
                               <!--      <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li> -->
                                    <!-- <li class="nav-item"><a href="404.html" class="nav-link">404</a></li> -->
                                    <!-- <li class="nav-item"><a href="coming-soon.html" class="nav-link">Coming Soon</a> -->
                                    </li>
                                    <li class="nav-item"><a href="/loan-calculations" class="nav-link">Loan
                                    Calculation</a></li>
                                    <li class="nav-item"><a href="/lendor-form" class="nav-link">Loan Form</a></li>
                                    <li class="nav-item"><a href="/lendor-find-borrower" class="nav-link">Find a borrower</a></li>
                                        <li class="nav-item"><a href="/lendor-request" class="nav-link">Loan Request</a></li>
                                    <!-- <li class="nav-item"><a href="open-account.html" class="nav-link">Open Account</a> -->
                                         <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                    <!-- <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li> -->
                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                    </li>
                                    <li class="nav-item"><a href="privacy-policy.html" class="nav-link">Privacy
                                            Policy</a></li>
                                    <!-- <li class="nav-item"><a href="testimonials.html" class="nav-link">Testimonials</a> -->
                                    </li>
                                </ul>
                            </li>
                                 <li class="nav-item">
                                <a href="#" class="nav-link">   <form method="POST" action="/logout">
                                                @csrf
                                                <button style="border:none; background: transparent;"  type="submit">Logout</button>

                                            </form></a>
                            </li>


                       <!--      <li class="nav-item"><a href="#" class="nav-link">Blog <i class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                                    <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                    <li class="nav-item"><a href="blog-single-sidebar.html" class="nav-link">Blog Single
                                            Sidebar</a>
                                    </li>
                                    <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Single</a>
                                    </li>
                                </ul>
                            </li> -->

                            @endif
                             @if(Auth::check()==true && Auth::user()->is_admin == '0')

                                <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a>

                       
                          

                            <li class="nav-item"><a href="/about-us" class="nav-link">About Us</a>

                            <!-- <li class="nav-item"><a href="#" class="nav-link">About Us <i
                                        class='las la-angle-down'></i></a> -->
                               <!--  <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="about-us-1.html" class="nav-link">About Us 1</a></li>
                                    <li class="nav-item"><a href="about-us-2.html" class="nav-link">About Us 2</a></li>
                                </ul> -->
                            </li>

                          <!--   <li class="nav-item"><a href="#" class="nav-link active">Portfolio <i
                                        class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="portfolio.html" class="nav-link active">Portfolio</a>
                                    </li>
                                    <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio
                                            Details</a></li>
                                </ul>
                            </li> -->

                            <li class="nav-item"><a href="#" class="nav-link">Pages <i
                                        class='las la-angle-down active'></i></a>
                                <ul class="dropdown-menu">
                                   
                                   <!--  <li class="nav-item"><a href="#" class="nav-link">Auth Page <i
                                                class='las la-angle-right'></i></a> -->
                                       <!--  <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
                                            <li class="nav-item"><a href="signup.html" class="nav-link">Sing Up</a></li>
                                            <li class="nav-item"><a href="recover.html" class="nav-link">Recover</a>
                                            </li>
                                        </ul> -->
                                    </li>
                               <!--      <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li> -->
                                    <!-- <li class="nav-item"><a href="404.html" class="nav-link">404</a></li> -->
                                    <!-- <li class="nav-item"><a href="coming-soon.html" class="nav-link">Coming Soon</a> -->
                                    </li>
                                    <li class="nav-item"><a href="/loan-calculations" class="nav-link">Loan
                                    Calculation</a></li>
                                    <li class="nav-item"><a href="/borrower-form" class="nav-link">Loan Form</a></li>
                                    <li class="nav-item"><a href="/borrower-find-lendor" class="nav-link">Find a lendor</a></li>
                                    <li class="nav-item"><a href="/borrower-request" class="nav-link">Loan Request</a></li>
                                    <!-- <li class="nav-item"><a href="open-account.html" class="nav-link">Open Account</a> -->
                                         <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                    <!-- <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li> -->
                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                    </li>
                                    <li class="nav-item"><a href="privacy-policy.html" class="nav-link">Privacy
                                            Policy</a></li>
                                    <!-- <li class="nav-item"><a href="testimonials.html" class="nav-link">Testimonials</a> -->
                                    </li>
                                </ul>
                            </li>
                                 <li class="nav-item">
                                <a href="#" class="nav-link">   <form method="POST" action="/logout">
                                                @csrf
                                                <button style="border:none; background: transparent;"  type="submit">Logout</button>

                                            </form></a>
                            </li>


                       <!--      <li class="nav-item"><a href="#" class="nav-link">Blog <i class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                                    <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                    <li class="nav-item"><a href="blog-single-sidebar.html" class="nav-link">Blog Single
                                            Sidebar</a>
                                    </li>
                                    <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Single</a>
                                    </li>
                                </ul>
                            </li> -->

                            @endif
                          
                        </ul>
                        @unless (Auth::check()==true)
                         <div class="others-option d-flex align-items-center">
                          <!--   <div class="option-item">
                                <form class="search-box">
                                    <input type="text" class="input-search" placeholder="Search for anything">
                                    <button type="submit"><i class="uil uil-search-alt"></i></button>
                                </form>
                            </div> -->
                            <div class="option-item">
                                <a href="/registration" class="btn theme-btn-1">Get
                                    Started <i class="las la-angle-right"></i></a>
                            </div>
                        </div>
                           
                        @endunless
                        @unless (Auth::check()==false)

                          <div class="others-option d-flex align-items-center">
                          <!--   <div class="option-item">
                                <form class="search-box">
                                    <input type="text" class="input-search" placeholder="Search for anything">
                                    <button type="submit"><i class="uil uil-search-alt"></i></button>
                                </form>
                            </div> -->
                            <div class="option-item">
                                <a href="#" class="btn theme-btn-1">@ {{auth()->user()->username}}</a>
                            </div>
                        </div>
                           
                        @endunless
                       
                    </div>
                </nav>
            </div>
            <!-- /Container -->
        </div>
       
    </div>
    <!-- /Header -->

    <!-- Hero -->
    <div class="hero-1 oh pos-rel" style="background: url('assets/images/hero/banner-bg.png')">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-5">
                    <div class="hero-1-content wow fadeInLeft animated">
                        <h5 class="cate  wow fadeInUp animated" data-wow-delay="0.2s">#Bank Loan</h5>
                        <h1 class="title  wow fadeInUp animated" data-wow-delay="0.4s">Personal Bank Loan
                            From $12,500</h1>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.6s">
                            Easy to lend money, Easy to get money.
                        </p>
                        <div class="hero-1-button-group">
                            <a href="#" class="btn theme-btn-1  wow fadeInUp animated" data-wow-delay="0.8s"> Get
                                Started
                                <i class="uil uil-angle-right-b ml-2 mb-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-7 d-lg-block">
                    <div class="hero-1-thumb-15 wow fadeInUp animated" data-wow-delay="0.4s">
                        <img class="img-fluid wow fadeInRight animated" src="assets/images/hero/hero-1.png" alt="hero-1">
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Hero -->

    <!-- Featured box -->
    <div class="featured-boxes-area">
        <!-- Container -->
        <div class="container">
            <div class="featured-boxes-inner">
                <!-- row -->
                <div class="row m-0">
                    <!-- col -->
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-fb7756">
                                <i class="ri-thumb-up-line"></i>
                            </div>
                            <h3>Professional Services</h3>
                            <!-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> -->
                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-facd60">
                                <i class="ri-wallet-line"></i>
                            </div>
                            <h3>Low costing</h3>
                            <!-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> -->
                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-1ac0c6">
                                <i class="ri-customer-service-2-line"></i>
                            </div>
                            <h3>Live Support</h3>
                            <!-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> -->
                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <i class="ri-shield-keyhole-line"></i>
                            </div>
                            <h3>Safe and Secure</h3>
                            <!-- <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> -->
                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Featured box -->

    <!-- About Us -->
    <div class="about-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-6 align-self-center">
                    <div class="mb-20">
                        <img src="assets/images/bg/about.png" class="img-fluid  wow fadeInLeft animated" data-wow-delay="0.2s"
                            alt="image">
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6">
                    <div class="about-content warp">
                        <!-- row -->
                        <div class="row justify-content-center text-center">
                            <!-- col -->
                            <div class="col-lg-8 col-md-12 mb-50">
                                <div class="section-title">
                                    <h2 class="title">About Us</h2>
                                    <div class="title-bdr">
                                        <div class="left-bdr"></div>
                                        <div class="right-bdr"></div>
                                    </div>
                                    <p>We operate our banking services in many countries around the world.</p>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->
                        <strong>Lending or borrowing money is now in your control, we make it easy, set up an account to lend or borrow at your own pace.</strong>
                        <p>You are your personal bank, track your lending, track your loan. Make your own terms. Here at Banker we put banking power in your hands.</p>

                        <div class="about-btn justify-content-center text-center">
                            <a href="/registration" class="btn theme-btn-1">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /About Us -->

    <!-- /Services -->
       <div class="services-area pt-120 pb-70">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Best Services</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Presenting Banking Plan & Services That are Right For You</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="assets/images/services/01.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Personal Loan</a>
                        </h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p> -->
                       <!--  <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a> -->
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="assets/images/services/02.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Business Loan</a>
                        </h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p> -->
                       <!--  <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a> -->
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="assets/images/services/03.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Education Loan</a>
                        </h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p> -->
                       <!--  <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a> -->
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="assets/images/services/04.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Mobile Banking</a>
                        </h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p> -->
                       <!--  <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a> -->
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="assets/images/services/05.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Credit Card</a>
                        </h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p> -->
                       <!--  <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a> -->
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="assets/images/services/06.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Online Payment</a>
                        </h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p> -->
                       <!--  <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a> -->
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Services -->

    <!-- Testimonial -->
    <!-- <div class="testimonial-area pt-100 pb-100"> -->
        <!-- Container -->
        <!-- <div class="container"> -->
            <!-- row -->
            <!-- <div class="row justify-content-center text-center"> -->
                <!-- col -->
                <!-- <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Testimonial</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>You can see our clients feedback what you say?</p>
                    </div>
                </div> -->
                <!-- /col -->
            <!-- </div> -->
            <!-- /row -->
        <!-- </div> -->
        <!-- /Container -->
        <!-- Container -->
        <!-- <div class="container-fluid"> -->
            <!-- row -->
            <!-- <div class="row"> -->
                <!-- col -->
       <!--          <div class="col-lg-12">
                    <div class="testimonial-item-wrap-1 testimonial-carousel-1">
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/03.jpg" alt="small-avatar">
                                <h3 class="author__title">Jack Hardson</h3>
                                <span class="author__meta">United States</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/02.jpg" alt="small-avatar">
                                <h3 class="author__title">Mike Wood</h3>
                                <span class="author__meta">United Kingdom</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/05.jpg" alt="small-avatar">
                                <h3 class="author__title">Mike Hardson</h3>
                                <span class="author__meta">Italy</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-half-o"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/04.jpg" alt="small-avatar">
                                <h3 class="author__title">Bernice Pease</h3>
                                <span class="author__meta">Germany</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/06.jpg" alt="small-avatar">
                                <h3 class="author__title">Daniel Ward</h3>
                                <span class="author__meta">India</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/01.jpg" alt="small-avatar">
                                <h3 class="author__title">Kamran Ahmed</h3>
                                <span class="author__meta">Bangladesh</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/02.jpg" alt="small-avatar">
                                <h3 class="author__title">Jessica Brown</h3>
                                <span class="author__meta">Netherlands</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/03.jpg" alt="small-avatar">
                                <h3 class="author__title">Mike Hardson</h3>
                                <span class="author__meta">Pakistan</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/05.jpg" alt="small-avatar">
                                <h3 class="author__title">Bernice Pease</h3>
                                <span class="author__meta">Australia</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <img src="assets/images/testimonial/04.jpg" alt="small-avatar">
                                <h3 class="author__title">Daniel Ward</h3>
                                <span class="author__meta">Costa rica</span>
                                <span class="author__rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-desc">
                                <p class="testimonial__desc">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
            <!-- </div> -->
            <!-- /row -->
        <!-- </div> -->
        <!-- /Container -->
    <!-- </div> -->
    <!-- /Testimonial -->

    <!-- Choose Us -->
    <div class="why-choose-us-area pb-100" style="margin-top:3em;">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-6">
                    <div class="why-choose-us-img">
                        <img src="assets/images/bg/choose-us.png" alt="Image">
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6">
                    <div class="why-choose-us-content mb-removed">
                        <!-- row -->
                        <div class="row justify-content-center text-center">
                            <!-- col -->
                            <div class="col-lg-8 col-md-12 mb-50">
                                <div class="section-title">
                                    <h2 class="title">Why choose us</h2>
                                    <div class="title-bdr">
                                        <div class="left-bdr"></div>
                                        <div class="right-bdr"></div>
                                    </div>
                                    <p>We put banking power in your hands</p>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->
                        <p>Lending and finding money has never been this easy, we let you be your own boss, Lend or borrow based on your qualifications. Become a Banker now!</p>
                        <ul>
                            <li>
                                <i class="ri-check-line"></i>
                                <h3>Become a lendor</h3>
                               <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p> -->
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <h3>Find flexible loans </h3>
                               <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p> -->
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <h3>Track lending & payments</h3>
                          <!--       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p> -->
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <h3>Invest the way you like</h3>
                              <!--   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p> -->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Choose Us -->

    <!-- Download -->
    <div class="download-area">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center justify-content-between">
                <!-- col -->
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="download-1-content mt-50">
                        <h2 class=" wow fadeInUp animated">Download Our App</h2>
                        <ul>
                            <li class="wow fadeInUp animated" data-wow-delay="0.2s"><i class="la la-check"></i>
                                Lend money the way you want. </li>
                            <li class="wow fadeInUp animated" data-wow-delay="0.4s"><i class="la la-check"></i>
                                Borrow and find loans that meet your standards. </li>
                            <li class="wow fadeInUp animated" data-wow-delay="0.6s"><i class="la la-check"></i>
                                Track lending & payments. </li>
                        </ul>
                        <div class="mt-4 wow fadeInUp animated" data-wow-delay="0.6s">
                            <a href="#" class="btn theme-btn-1">
                                <img src="assets/images/svg/android.svg" alt="">
                            </a>
                            <a href="#" class="btn theme-btn-1">
                                <img src="assets/images/svg/apple.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="download-1-img">
                        <img class=" img-fluid" src="assets/images/bg/download.png" alt="">
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Download -->

    <!-- Blog -->
    <!-- <div class="blog-area pt-120 pb-100"> -->
        <!-- Container-->
        <!-- <div class="container"> -->
            <!-- row -->
            <!-- <div class="row"> -->
                <!-- col -->
              <!--   <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img">
                            <a href="blog-single.html"><img src="assets/images/blog/blog1.jpg" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-single.html">Lorem ipsum dolor sit amet.
                                </a>
                            </h4>
                            <a href="blog-single.html">Read More <i class="ri-arrow-right-line"></i></a>
                            <div class="blog-meta">
                                <span> <i class="las la-calendar"></i> 05 Feb 2022</span>
                                <span> <i class="lar la-heart"></i>Comments (03)</span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
             <!--    <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img">
                            <a href="blog-single.html"><img src="assets/images/blog/blog2.jpg" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-single.html">Lorem ipsum dolor sit amet.</a>
                            </h4>
                            <a href="blog-single.html">Read More <i class="ri-arrow-right-line"></i></a>
                            <div class="blog-meta">
                                <span> <i class="las la-calendar"></i> 05 Feb 2022</span>
                                <span> <i class="lar la-heart"></i>Comments (03)</span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
              <!--   <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img">
                            <a href="blog-single.html"><img src="assets/images/blog/blog3.jpg" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-single.html">Lorem ipsum dolor sit amet.</a>
                            </h4>
                            <a href="blog-single.html">Read More <i class="ri-arrow-right-line"></i></a>
                            <div class="blog-meta">
                                <span> <i class="las la-calendar"></i> 05 Feb 2022</span>
                                <span> <i class="lar la-heart"></i>Comments (03)</span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
            <!-- </div> -->
            <!-- /row -->
        </div>
        <!-- /Container-->
    <!-- </div> -->
    <!-- /Blog -->

    <!-- Client Logo -->
    <div class="client-logo-area pb-100" style="margin-top:3em;">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="assets/images/client-logo/logo-envato.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="assets/images/client-logo/logo-converkit.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="assets/images/client-logo/logo-buzzumo.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="assets/images/client-logo/logo-buffer.png" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="assets/images/client-logo/logo-frame.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="assets/images/client-logo/logo-clearbit.png" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Client Logo -->

    <!-- Cta -->
    <div class="cta-area">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-12">
                    <div class="get-start-box">
                        <!-- col -->
                        <div class="col-lg-8">
                            <div class="section-heading">
                                <h5 class="section__meta text-white">#get in touch</h5>
                                <h2 class="section__title">Ready to get started ?</h2>
                                <p class="section__sub">Speak to a Bnker specialist at (800-123-1234)</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <div class="button-shared text-end">
                                <a href="contact.html" class="btn cta-btn">
                                    Request Call Back <span class="la la-caret-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Cta -->

    <!-- Footer -->
    <footer class="footer-style bg-gray-100 pt-200">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="footer-logo">
                        <a href="/"><img src="assets/images/logo.png" alt=""></a>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
        <!--         <div class="col-xl-9 col-lg-9  col-md-8 mb-30">
                    <div class="footer-top-wrapper">
                        <ul class="footer-top-link text-end">
                            <li><a href="#">Layouts </a></li>
                            <li><a href="#"> Pages</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Blog </a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
            </div>
            <!-- /row -->
            <div class="footer-middle-area mt-30 pb-30 pt-60">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About Us</h3>
                            <div class="footer-text">
                                <p>Presenting Banking Plan & Services That are Right For You</p>
                            </div>
                            <div class="footer-icon">
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-instagram-alt"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Services</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#">Conditions</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">New Guests List</a></li>
                                    <li><a href="#">The Team List</a></li>
                                </ul>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Useful Links</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#">Conditions</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">New Guests List</a></li>
                                    <li><a href="#">The Team List</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Subscribe</h3>
                            <div class="subscribes-form">
                                <div>
                                <form>

                                    <div class="message"></div> 
                                    <input name="email" class="getemail" placeholder="Enter email " type="email">
                                </form>
                                    <button class="btn theme-btn-1 width-100 mt-10 post_subscribe_button"><i
                                            class="lab la-telegram-plane me-2"></i>subscribe</button>
                                </div>
                            </div>
                            <div class="footer-info">
                                <p>Get the latest updates via email. Any time you may unsubscribe</p>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <div class="footer-bottom-area pt-25 pb-25">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>© Copyrights 2021 <a href="/">Bnker.</a> All rights reserved.</p>
                        </div>
                    </div>
                    <!-- col -->
                    <!-- /col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link text-end">
                            <ul>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#"> Terms</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Help </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </footer>
    <!-- /Footer -->

    <!-- Go top -->
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="las la-angle-double-up"></i>
                    <i class="las la-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- /Go top -->

    <!-- JS -->

    <!-- Vendor Js -->
    <script src="assets/js/vendors.js"></script>
    <!-- /Vendor js -->

    <!-- Plugins Js -->
    <script src="assets/js/plugins.js"></script>
    <!-- /Plugins Js -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- /Main JS -->

    <!-- /JS -->

    <script >
         $(".post_subscribe_button").click(function(event){
      event.preventDefault();
      let email = $("input[name=email]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "/subscribe",
        type:"POST",
        data:{
          email:email,
          _token: _token
        },
           success:function(data){
                $('.message').text(data.message); 
           }
       });
  });
    </script>
   

</body>

</html>


