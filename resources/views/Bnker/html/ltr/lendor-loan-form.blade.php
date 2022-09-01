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

                            <li class="nav-item"><a href="#" class="nav-link active">Pages <i
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
                                    <li class="nav-item"><a href="/lendor-form" class="nav-link active">Loan Form</a></li>
                                        <li class="nav-item"><a href="/lendor-find-borrower" class="nav-link">Find a borrower</a></li>
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
                        <h3 class="title">LOANS FORM</h3>
                        <p>Get started on your next <span style="color:red">Banker</span> opportunity. </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="assets/images/bg/9.png" alt="img" />
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

    <!-- Loan Form -->
    <div class="loan-form-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Create a loan</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Making a loan form is easy. No upfront cost until a borrower makes a requests.
                            Once payments are started there is a charge rate fee of 0.5% - 1.75%.</p>
                    </div>
                </div>
                <!-- /col -->
            </div>

            @if(session()->has('lendor_form_message'))
                <div class="alert alert-success">
                 {{ session()->get('lendor_form_message') }}
                </div>
            @endif
            <!-- /row -->

            <div class="loan-form">
                <form method="POST" action="/lendor-form-submit">
                    @csrf
                    <!--row -->

                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Full name</label>
                                @error('full_name')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <input name="full_name" type="text" class="form-control" placeholder="Full name">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                 @error('email')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <input name="email" type="text" class="form-control" placeholder="{{auth()->user()->email}}" value="{{auth()->user()->email}}">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                 @error('phone')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                 @error('state')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <input name="state" type="text" class="form-control" placeholder="State">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                 @error('gender')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <select name="gender">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Date of birth</label>
                                 @error('date_of_birth')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <input name="date_of_birth" type="text" class="form-control" placeholder="dd/mm/yy">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Marital status</label>
                                 @error('marital_status')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <select name="marital_status">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                </select>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                 @error('address')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <input name="address" type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Purpose of loan</label>
                                 @error('purpose_of_loan')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                 <select name="purpose_of_loan">
                                    <option value="personal_loan">Personal Loan</option>
                                    <option value="business_loan">Business Loan</option>
                                    <option value="education_loan">Education Loan</option>
                                    <option value="credit_loan">Credit Loan</option>
                                </select>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                @error('country')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <select name="country">
                                    <option value="">Country</option>
                                    <option value="england">England</option>
                                    <option value="australia">Australia</option>
                                    <option value="usa">USA</option>
                                </select>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Loan amount</label>
                                 @error('loan_amount')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <input name="loan_amount" type="text" class="form-control" placeholder="$100">
                               <!--  <select name="loan_amount">
                                    <option value="1 - 10">$1 - 10</option>
                                    <option value="10 - 50">$10 - 50</option>
                                    <option value="50 - 100">$50 - 100</option>
                                    <option value="100 - 500">$100 - 500</option>
                                    <option value="500 - 1000">$500 - 1000</option>
                                    <option value="1000 - 5000">$1000 - 5000</option>
                                    <option value="5000 - 10,000">$5000 - 10,000</option>
                                    <option value="5000 - 10,000">$5000 - 10,000</option>
                                    <option value="15,000 - 25,000">$15,000 - 25,000</option>
                                    <option value="25,000 - 50,000">$25,000 - 50,000</option>
                                    <option value="50,000 - 60,000">$50,000 - 60,000</option>
                                    <option value="60,000 - 70,000">$60,000 - 70,000</option>
                                    <option value="70,000 - 80,000">$70,000 - 80,000</option>
                                    <option value="80,000 - 90,000">$80,000 - 90,000</option>
                                </select> -->
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Loan term</label>
                                @error('loan_term')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                <select name="term">
                                    <option value="1 months">1m</option>
                                    <option value="5 months">5m</option>
                                    <option value="8 months">8m</option>
                                    <option value="9 months">9m</option>
                                    <option value="10 months">10m</option>
                                    <option value="11 months">11m</option>
                                    <option value="12 months">12m</option>
                                    <option value="none">No term</option>

                                </select>
                            </div>
                        </div>
                        <!-- /col -->
                           <!-- col -->
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Interest Rate</label>
                                 @error('interest_rate')
                                    <p class="alert" style="color: red;">{{$message}}</p>
                                @enderror
                                 <input name="interest_rate" type="text" class="form-control" placeholder="1.25%">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-12">
                            <div class="banner-form-btn">
                                <button type="submit" class="default-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </form>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Loan Form -->

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
            <!--     <div class="col-xl-9 col-lg-9  col-md-8 mb-30">
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
                                    <input name="email_5" class="getemail" placeholder="Enter email " type="email">
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

      <script>
         $(".post_subscribe_button").click(function(event){
      event.preventDefault();
      let email = $("input[name=email_5]").val();
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