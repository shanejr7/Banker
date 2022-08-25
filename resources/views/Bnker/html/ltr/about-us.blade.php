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
                             <li class="nav-item"><a href="/" class="nav-link">Home</a>
                           <!--  <li class="nav-item"><a href="#" class="nav-link">Home <i class='las la-angle-down'></i></a> -->
                              <!--   <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="/" class="nav-link">Home 1</a></li>
                                    <li class="nav-item"><a href="index-2.html" class="nav-link">Home 2</a></li>
                                    <li class="nav-item"><a href="index-3.html" class="nav-link">Home 3</a></li>
                                </ul> -->
                            </li>


                            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="/registration" class="nav-link">Register</a></li>

                            <li class="nav-item"><a href="#" class="nav-link active">About Us</a>
                            <!-- <li class="nav-item"><a href="#" class="nav-link active">About Us <i
                                        class='las la-angle-down'></i></a> -->
                              <!--   <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="about-us-1.html" class="nav-link active">About Us 1</a></li>
                                    <li class="nav-item"><a href="about-us-2.html" class="nav-link">About Us 2</a></li>
                                </ul> -->
                            </li>

                          <!--   <li class="nav-item"><a href="#" class="nav-link">Portfolio <i class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="portfolio.html" class="nav-link">Portfolio</a></li>
                                    <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio
                                            Details</a></li>
                                </ul>
                            </li> -->

                            <li class="nav-item"><a href="#" class="nav-link">Pages <i
                                        class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                    <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Auth Page <i
                                                class='las la-angle-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
                                            <li class="nav-item"><a href="signup.html" class="nav-link">Sing Up</a></li>
                                            <li class="nav-item"><a href="recover.html"
                                                    class="nav-link">Recover</a>
                                            </li>
                                        </ul>
                                    </li>
                                                                            <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
                                        <li class="nav-item"><a href="404.html" class="nav-link">404</a></li>
                                    <li class="nav-item"><a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item"><a href="loan-calculation.html" class="nav-link">Loan
                                            Calculation</a></li>
                                    <li class="nav-item"><a href="loans.html" class="nav-link">Loan Form</a></li>
                                    <li class="nav-item"><a href="open-account.html" class="nav-link">Open Account</a>
                                    </li>
                                    <li class="nav-item"><a href="privacy-policy.html" class="nav-link">Privacy
                                            Policy</a></li>
                                    <li class="nav-item"><a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                </ul>
                            </li>

                        <!--     <li class="nav-item"><a href="#" class="nav-link">Blog <i class='las la-angle-down'></i></a>
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
                        </ul>
                        <div class="others-option d-flex align-items-center">
                           <!--  <div class="option-item">
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
                    </div>
                </nav>
            </div>
            <!-- /Container -->
        </div>
        <div class="others-option-for-responsive">
            <!-- Container -->
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <!-- Container -->
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option">
                           <!--  <div class="option-item">
                                <form class="search-box">
                                    <input type="text" class="input-search" placeholder="Search for anything">
                                    <button type="submit"><i class="flaticon-loupe"></i></button>
                                </form>
                            </div> -->

                            <div class="option-item">
                                <a href="/registration" class="btn theme-btn-1"><i class="las la-angle-right"></i>Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Container -->
            </div>
            <!-- /Container -->
        </div>
    </div>
    <!-- /Header -->

    <!-- Breadcrumb -->
    <div class="banner-section position-relative">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col  -->
                <div class="col-md-6">
                    <div class="banner-content banner-padding">
                        <h3 class="title">ABOUT US</h3>
                        <p>Your favorite banking community.
                        </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="assets/images/bg/2.png" alt="img" />
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Breadcrumb -->

    <!-- About Us -->
    <div class="about-area pt-100">
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

    <!-- Team -->
    <div class="team-style pt-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Team</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Meet Our team member</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
                <!-- col -->
            <!--     <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="assets/images/team/team-1.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">Marketing</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="assets/images/team/team-2.png" alt=""></figure>
                            <ul class="social-list">
                                <!-- <li><a href="#"><i class="ri-facebook-fill"></i></a></li> -->
                                <!-- <li><a href="#"><i class="ri-twitter-line"></i></a></li> -->
                                <!-- <li><a href="#"><i class="ri-instagram-line"></i></a></li> -->
                                <!-- <li><a href="#"><i class="ri-dribbble-fill"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Shane Johnson</a></h3>
                            <span class="designation">Developer & CEO</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
             <!--    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="assets/images/team/team-3.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">Marketing</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
           <!--      <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="assets/images/team/team-4.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">UX/UI Designer</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
             <!--    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="assets/images/team/team-5.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
              <!--   <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="assets/images/team/team-6.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">UX/UI Designer</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Team -->

        <!-- FAQ -->
        <div class="faq-area pb-100">
            <!-- Container -->
            <div class="container">
                <div class="tab faq-accordion-tab">
                    <ul class="tabs d-flex flex-wrap justify-content-center">
                        <li class="mb-4"><a href="#"><i class="ri-flag-line"></i> <span>Getting Started</span></a></li>
    
                        <li class="mb-4"><a href="#"><i class="uil uil-money-bill"></i> <span>Pricing & Planes</span></a></li>
    
                        <li class="mb-4"><a href="#"><i class="uil uil-shopping-bag"></i> <span>Sales Question</span></a></li>
    
                        <li class="mb-4"><a href="#"><i class="uil uil-book-open"></i> <span>Usage Guides</span></a></li>
    
                        <li class="mb-4"><a href="#"><i class="uil uil-info-circle"></i> <span>General Guide</span></a></li>
                    </ul>
    
                    <div class="tab-content">
                        <div class="tabs-item">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q1. How do i get started?
                                        </a>
    
                                        <div class="accordion-content show">
                                            <p>Making an account is simple and fast. Register a new lending or borrowing account <a href="/registration" style="color:red">here.</a></p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q2. I have an account what's next?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>After making a new account you will go through a pre-approved credit check.</p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q3. What can i do with a lending account?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Your able to lend certain amounts of money with rates and monthly payments.</p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q4. What can i do with as a borrower account?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>You can search lendors to borrow money with rates you agree with.</p>
                                        </div>
                                    </li>
    
                                  <!--   <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q5. How do I know what my equity structure might look like over time?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
    
                        <div class="tabs-item">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q1. Can i set my own lending rates ?
                                        </a>
    
                                        <div class="accordion-content show">
                                            <p>Yes that is an option but rates should be averaged to national rates.</p>
                                        </div>
                                    </li>
    
                                  <!--   <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q2. ?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
    <!-- 
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q3. How do I know if I need to implement a new accounting system?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
    <!-- 
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q4. Why should I use bsal instead of other professional services firms?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
    
                                  <!--   <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q5. How do I know what my equity structure might look like over time?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="tabs-item">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q1.  Why should I use Banker instead of other professional banking firms?
                                        </a>
    
                                        <div class="accordion-content show">
                                            <p>We in power you to be your personal Banker by levergaing lending capabilites.</p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q2. How do I know what my equity structure might look like over time?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p> Your equity structure will be according to your lending amount, rates and term .</p>
                                        </div>
                                    </li>
    
                                   <!--  <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q3. How do I know if I need to implement a new accounting system?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
    
                                 <!--    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q4. Why should I use bsal instead of other professional services firms?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q5. How do I know what my equity structure might look like over time?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="tabs-item">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q1. Creating an Account?
                                        </a>
    
                                        <div class="accordion-content show">
                                            <p> Create an account <a href="/registration" style="color:red">here.</a></p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q2. How do i login in?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>You can login <a href="/login" style="color:red">here.</a></p>
                                        </div>
                                    </li>
    
                                     <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q3. What can i do with a lending account?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Your able to lend certain amounts of money with rates and monthly payments.</p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q4. What can i do with as a borrower account?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>You can search lendors to borrow money with rates you agree with.</p>
                                        </div>
                                    </li>
    
                                  <!--   <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q5. How do I know what my equity structure might look like over time?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="tabs-item">
                            <div class="faq-accordion">
                                  <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q1. How do i get started?
                                        </a>
    
                                        <div class="accordion-content show">
                                            <p>Making an account is simple and fast. Register a new lending or borrowing account <a href="/registration" style="color:red">here.</a></p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q2. I have an account what's next?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>After making a new account you will go through a pre-approved credit check.</p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q3. What can i do with a lending account?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Your able to lend certain amounts of money with rates and monthly payments.</p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q4. What can i do with as a borrower account?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>You can search lendors to borrow money with rates you agree with.</p>
                                        </div>
                                    </li>
    
                                  <!--   <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='las la-angle-down'></i>
                                            Q5. How do I know what my equity structure might look like over time?
                                        </a>
    
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Container -->
        </div>
        <!-- /FAQ -->

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
              <!--   <div class="col-xl-9 col-lg-9  col-md-8 mb-30">
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
                                    <input name="email_3" class="getemail" placeholder="Enter email " type="email">
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
                            <p>© Copyrights 2021 <a href="/">Banker.</a> All rights reserved.</p>
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
      let email = $("input[name=email_3]").val();
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