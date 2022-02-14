<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOMIEZ</title>

        <link href="./images/logo.png" rel="icon">
        <link href="./images/logo.png" rel="apple-touch-icon">
        <!-- Fonts -->
        <script src="https://use.fontawesome.com/d7d3209928.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <!-- Responsive CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css') }}">
	<script src="{{asset('js/modernizr.js') }}"></script> 

    <!-- Vendor CSS Files -->
  <link type="text/css" href="{{ URL::asset('css/aos.css')}}" rel="stylesheet">
  <!-- <link type="text/css" href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
  <link type="text/css" href="{{ URL::asset('css/bootstrap-icons.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ URL::asset('css/glightbox.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ URL::asset('css/swiper-bundle.min.css')}}" rel="stylesheet">

    </head>
    <body class="antialiased ">
    <div id="preloader">
  <div id="loader"></div>
</div>
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="#" class="scrollto"><img src="./images/logo.png" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#new_updates">New Updates</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="fa fa-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="booking-btn scrollto" href="/bookings">Book Now!</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="
  background: url('../images/wes-hicks-MEL-jJnm7RQ-unsplash.jpg') top center;
  width: 100%;height: 100vh; 
  background-size: cover; 
  overflow: hidden;
  position: relative;">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Your way to becoming a star:</h1>
      <p class="mb-4 pb-0">BRING YOUR SHINE.</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
      <a href="#contact" class="about-btn scrollto">Reach us</a>
    </div>
  </section><!-- End Hero Section -->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img class="header-logo img-fluid" src="images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggler="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#product">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <main id="main">
        <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>OUR MISSION</h2>
            <p>Growing the sports and entertainment sector to a high height by providing platforms that turn talents and passion into income generation opportunities.</p>
          </div>
          <div class="col-lg-3">
            <h3>OUR VISION</h3>
            <p>A life where everyone has the opportunity to live happily.</p>
          </div>
          <div class="col-lg-3">
            <h3>OUR VALUES</h3>
            <p>Teamworking Customers focused competence-based / Professionalism Discipline and respect</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

        <!-- <section id="home" class="main-banner parallaxie">
            <div class="heading">
                <h1>HOMIEZ</h1>
                <h3 class="cd-headline clip is-full-width">
                    <span>We provide services including </span>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">Audio production</b>
                        <b>Video production</b>
                    </span>
                    <div class="btn-ber">
                        <a class="contact-1-btn" href="/bookings">Book now!</a>
                    </div>
                </h3>
            </div>
        </section> -->

        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->


<!--  -->

        
 

        <!-- <section class="social">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="social-media">
                            <div class="text-center">
                                <h4>Feel free to reach out us:</h4>
                                <p>Homiez is a unique place where talents and passion are attracted, selected, developed and managed in an integrated and strategic way.</p>
                            </div>
                            <div class="text-center">
                                <button class="contact-btn" type="button" name="contact">Contact us</button>
                            </div>
                            <div class="text-center">
                                <h4>Our Social media</h4>
                                <ul class="social-network social-circle">
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <a class="twitter-timeline" href="https:twitter.com/ErikKabosi" data-widget-id="601003530829189120">Favorite Tweets by @ErikKabosi</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>
                </div>
            </section> -->
<!-- ======= Gallery Section ======= -->

<section class="service" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="services-text">
                    <h2>Services</h2>
                    <p></p>
                    <a href="#" class="read-btn">Read more..</a>
                </div>
            </div>
            <div class="col-md-7">
            <div class="row">
                    <div class="col-md-6">
                    <div class="d-flex award justify-content-center">
                                <div class="align-self-center text-center">
                                    <p class="awesome_content awesome_black text-uppercase mabo16 fowe700">
                                    <i class="fa fa-microphone" aria-hidden="true"></i>
                                    </p>
                                    <p class="awesome_grey_a awesome_caption mabo0">
                                        Audio Production
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex award justify-content-center">
                                <div class="align-self-center text-center">
                                    <p class="awesome_content awesome_black text-uppercase mabo16 fowe700">
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                    </p>
                                    <p class="awesome_grey_a awesome_caption mabo0">
                                        Video Production
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex award justify-content-center">
                                <div class="align-self-center text-center">
                                    <p class="awesome_content awesome_black text-uppercase mabo16 fowe700">
                                        <i class="fa fa-camera"></i>
                                    </p>
                                    <p class="awesome_grey_a awesome_caption mabo0">
                                        Photography services
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex award justify-content-center">
                                <div class="align-self-center text-center">
                                    <p class="awesome_content awesome_black text-uppercase mabo16 fowe700">
                                    <i class="fa fa-database" aria-hidden="true"></i>
                                    </p>
                                    <p class="awesome_grey_a awesome_caption mabo0">Hosting services
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="new_updates" >
    <div class="container" class="new_updates" data-aos="zoom-in">
        <div class="section-header">
            <h2>Recent Release</h2>
            <p>Check our video from the recent projects</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6" id="result">
                <div class="pic">
                    <iframe  src="https://www.youtube.com/embed/T5HYwBBoSOY?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img"></iframe>
                </div>
            </div>
            <div class="row col-sm-12 col-md-6 overflow-auto" id="group">
                <div class="pic"><a class="img"><iframe  src="https://www.youtube.com/embed/T5HYwBBoSOY?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col img"></iframe><h6 class="col"><span>NIYITANGA by Ivo The Street</span></h6></a></div>
                <div class="pic"><a class="img"><iframe  src="https://www.youtube.com/embed/Ucv-e6lGOAU?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col img"></iframe><h6 class="col"><span>AMAKURU by IVO THE STREET(Official Video)</span></h6></a></div>
	            <div class="pic"><a class="img"><iframe  src="https://www.youtube.com/embed/YQRqOjJlYhA?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col img"></iframe><h6 class="col"><span>RAP YANJYE by Ivo The Street</span></h6></a></div>
	            <div class="pic"><a class="img"><iframe  src="https://www.youtube.com/embed/9HvaxEWK2ZQ?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col img"></iframe><h6 class="col"><span>IBINTU BYANJYE(4k Video) by P-FLA</span></h6></a></div>
	            <div class="pic"><a class="img"><iframe  src="https://www.youtube.com/embed/CkwtJFS7VZs?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col img"></iframe><h6 class="col"><span>IBIGANZA by FIREMAN</span></h6></a></div>
	            <div class="pic"><a class="img"><iframe  src="https://www.youtube.com/embed/LiZHNQA_eR0?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col img"></iframe><h6 class="col"><span>NTIDUKINA by P-FLA</span></h6></a></div>
	            
            </div>
        </div>
    </div>
</section>

<section id="gallery">

<div class="container" data-aos="fade-up">
  <div class="section-header">
    <h2>Gallery</h2>
    <p>Check our gallery from the recent events</p>
  </div>
</div>

<div class="gallery-slider swiper">
  <div class="swiper-wrapper align-items-center">
    <div class="swiper-slide"><a href="./images/1.jpg" class="gallery-lightbox"><img src="./images/1.jpg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="./images/2.jpg" class="gallery-lightbox"><img src="./images/2.jpg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="./images/3.jpg" class="gallery-lightbox"><img src="./images/3.jpg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="./images/4.jpg" class="gallery-lightbox"><img src="./images/4.jpg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="./images/5.jpg" class="gallery-lightbox"><img src="./images/5.jpg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="./images/6.jpg" class="gallery-lightbox"><img src="./images/6.jpg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="./images/7.jpg" class="gallery-lightbox"><img src="./images/7.jpg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="./images/8.jpg" class="gallery-lightbox"><img src="./images/8.jpg" class="img-fluid" alt=""></a></div>
  </div>
  <div class="swiper-pagination"></div>
</div>

</section>
<!-- End Gallery Section -->
<!-- ======= Subscribe Section ======= -->
<section id="subscribe" style="background: url('../images/wes-hicks-MEL-jJnm7RQ-unsplash.jpg') center center no-repeat; background-size: cover;
  overflow: hidden;
  position: relative;
  ">
    <div class="container" data-aos="zoom-in">
        <div class="row">
            <div class="col-md-7">
            <div class="social-media">
                            <div class="text-center">
                                <h4>Feel free to reach out us:</h4>
                                <p>Homiez is a unique place where talents and passion are attracted, selected, developed and managed in an integrated and strategic way.</p>
                            </div>
                            <div class="text-center">
                                <button class="contact-btn" type="button" name="#contact">Contact us</button>
                            </div>
                            <div class="text-center">
                                <h4>Our Social media</h4>
                                <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
                            </div>
                        </div>
            </div>
            <div class="col-md-5">
                <a class="twitter-timeline" href="https:twitter.com/HomiezMusic" data-widget-id="601003530829189120">Favorite Tweets by @HomiezMusic</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
    </div>
</section><!-- End Subscribe Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg" style="background: url('../images/herob.jpg') center center no-repeat; background-size: cover;
  overflow: hidden;
  position: relative;">

<div class="container" data-aos="fade-right">
    <div class="section-header">
        <h2>Contact Us</h2>
        <p>Nihil officia ut sint molestiae tenetur.</p>
    </div>
  
    <div class="row contact-info">
        <div class="col-md-5"><div class="contact-detail">
            <i class="fa fa-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            <i class="fa fa-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@homiez.rw">info@homiez.rw</a></p>
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <h3>Address</h3>
            <address>KN, NY KIGALI, RWANDA</address>
        </div></div>
        <div class="col-md-7 contact-form">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php 
                    Session::forget('success');
                @endphp    
            </div>
            @endif
            <form action="{{ route('index.store') }}" method="POST" role="form" class="php-email-form">
            @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" name="names" class="form-control" id="name" placeholder="Your Name" required>
                        @if ($errors->has('names'))
                        <span class="text-danger">{{ $errors->first('names') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mt-3">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" required>
                        @if ($errors->has('phone'))
                           <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                </div>
                <!-- <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> -->
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>
    </div>
</div>
</section><!-- End Contact Section -->
        </main>

            <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="./images/logo.png" alt="">
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="fa fa-home"></i> <a href="#home">Home</a></li>
              <li><i class="fa fa-user"></i> <a href="#about">About us</a></li>
              <li><i class="fa fa-cogs"></i> <a href="#services">Services</a></li>
              <li><i class="fa fa-comment"></i> <a href="#contact">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-sign-in" aria-hidden="true"></i> <a href="/login">Login</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              KN <br>
              Nyarugenge, KIGALI<br>
              RWANDA <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@homiez.rw<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy; <?php echo date("Y"); ?><strong>&nbsp;</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        Designed by <a href="#">HOMIEZ</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>
            <!-- <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-logo">
                                <img src="./images/logo.png" class="footer-logo"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="footer-social">
                                <h4 class="text-center">Quick link:</h4>
                                <ul class="social-footer foote-circle">
                                    <li><a href="#"><i class="fa fa-home" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></a></li>
                                    <li><a href="#"><i class="fa fa-user"></i></a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <div class="footer-social">
                                <h4 class="text-center">follow us on:</h4>
                                <ul class="social-footer foote-circle">
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="footer-copyright">
                            <p class="text-center">Copyright &copy; <?php echo date("Y"); ?> | Designed With by <a href="#">HOMIEZ</a></p>
                        </div>
                    </div>
                </div>
            </footer> -->


            <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
            
<!-- Vendor JS Files -->
<script type="text/javascript" src="{{ URL::asset('js/aos.js') }}"></script>
  <!-- <script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script> -->
  <script type="text/javascript" src="{{ URL::asset('js/glightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/swiper-bundle.min.js') }}"></script>
  <!-- <script type="text/javascript" src="{{ URL::asset('js/validate.js') }}"></script> -->

  <!-- Template Main JS File -->
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>
    $(document).ready(function(){
			$('.pic').click(function(){
				$(this).clone().appendTo('#result');
				$('#result').children().prev().remove();
				$('#result').children().children().attr({'class': 'result img'}).fadeIn();
			});
		});
        // Getting video element using jQuery
        var video = $("#video");
  
        // Check if video is ready to play
        $(video).on('canplay', function () {
            $(video).mouseenter(function () {
                $(this).get(0).play();
            }).mouseleave(function () {
                $(this).get(0).pause();
            })
        });
</script>
@stack("scripts")
    </body>
</html>
