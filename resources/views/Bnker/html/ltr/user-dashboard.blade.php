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
                            <!-- <li class="nav-item"><a href="#" class="nav-link">Home <i class='las la-angle-down'></i></a> -->
                              <!--   <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="/" class="nav-link">Home 1</a></li>
                                    <li class="nav-item"><a href="index-2.html" class="nav-link">Home 2</a></li>
                                    <li class="nav-item"><a href="index-3.html" class="nav-link">Home 3</a></li>
                                </ul> -->
                            </li>

                            <li class="nav-item"><a href="/dashboard" class="nav-link active">Dashboard</a>

                       
                          

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
                        </ul>
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
                            <div class="option-item">
                                <form class="search-box">
                                    <input type="text" class="input-search" placeholder="Search for anything">
                                    <button type="submit"><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>

                            <div class="option-item">
                                <a href="contact.html" class="btn theme-btn-1"><i class="las la-angle-right"></i>Get
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
                        <h3 class="title">DASHBOARD</h3>
                        <p>Welcome to your <span style="color:red">Banker</span> account. </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="assets/images/bg/7.png" alt="img" />
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

    <!-- /Portfolio -->
    <div class="portfolio-page pt-100 pb-100">
        <!-- Container -->
        <div class="container">
              @if(session()->has('lendor_form_message'))
            <div class="alert alert-success">
                {{ session()->get('lendor_form_message') }}
            </div>
       @endif
            <!-- row -->
            <div class="row">
                <!-- col -->
                @if(isset($forms) && count($forms)>0)
                <h1 class="text-center" style="margin-bottom: 2em;">Loan Forms Activity</h1>
                    @for ($i = 0; $i < sizeof($forms); $i++)
                         <div class="col-lg-4 col-md-6 item">
                            <div class="single-portfolio mr-20 mr-sm-0 ">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/1.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                @if($forms[$i]->purpose_of_loan=='personal_loan')
                                  <h4><a href="#">Personal Loan &bull; {{{$forms[$i]->status}}}</a></h4>
                                @endif

                                @if($forms[$i]->purpose_of_loan=='business_loan')
                                  <h4><a href="#">Business Loan &bull; {{{$forms[$i]->status}}}</a></h4>
                                @endif

                                @if($forms[$i]->purpose_of_loan=='education_loan')
                                  <h4><a href="#">Education Loan &bull; {{{$forms[$i]->status}}}</a></h4>
                                @endif

                                @if($forms[$i]->purpose_of_loan=='credit_loan')
                                  <h4><a href="#">Credit Loan &bull; {{{$forms[$i]->status}}}</a></h4>
                                @endif

                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                @if($forms[$i]->status=='created')
                                 <a class="btn portfolio-btn" href="/borrower-loan-form-view/{{$forms[$i]->id}}">View Loan</a>
                                @endif
                                @if($forms[$i]->status=='pending')
                                <a class="btn portfolio-btn" href="/borrower-request/{{$forms[$i]->id}}">View Loan</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                    @endfor
                @else
                     <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio mr-20 mr-sm-0 ">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/1.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="#">Personal Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio ml-10 ml-sm-0 mr-10 mr-sm-0">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/2.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="/borrower-form">Business Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio ml-20 ml-sm-0">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/3.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="/borrower-form">Private Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio mr-20 mr-sm-0">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/4.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="/borrower-form">Personal Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio ml-20 ml-sm-0">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/6.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="/borrower-form">Business Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio ml-10 ml-sm-0 mr-10 mr-sm-0">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/5.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="/borrower-form">Private Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio mr-20 mr-sm-0">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/7.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="/borrower-form">Personal Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio ml-10 ml-sm-0 mr-10 mr-sm-0">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/8.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="/borrower-form">Business Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="single-portfolio ml-20 ml-sm-0">
                        <div class="portfolio-thumb">
                            <img src="assets/images/folio/9.jpg" alt="" />
                        </div>
                        <div class="portfoilo-overlay">
                            <div class="portfolio-aling">
                                <h4><a href="/borrower-form">Private Loan</a></h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> -->
                                <a class="btn portfolio-btn" href="/borrower-form">Create a Loan Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                
                @endif

               
            </div>
            <!-- /row -->
            <!-- row -->
           <div class="row">
                <!-- col -->
                <div class="col-lg-12 text-center">
                    <h2 class="sec_title">
                        If you want to get started!<br>
                        Quickly hit this button.
                    </h2>
                    <a href="/borrower-form" class="btn theme-btn-1">Loan Form</a>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Portfolio -->

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
           <!--      <div class="col-xl-9 col-lg-9  col-md-8 mb-30">
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
                                    <input name="email_9" class="getemail" placeholder="Enter email " type="email">
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
                            <p>?? Copyrights 2021 <a href="/">Bnker.</a> All rights reserved.</p>
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
      let email = $("input[name=email_9]").val();
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