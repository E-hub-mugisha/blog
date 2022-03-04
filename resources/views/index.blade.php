<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>HOMIEZ</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="./images/favicon.jpg" rel="icon">
        <link href="./images/favicon.jpg" rel="apple-touch-icon">
        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/a729743ac6.js" crossorigin="anonymous"></script>
        <!-- <script src="https://use.fontawesome.com/d7d3209928.js"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <!-- Responsive CSS -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/responsive.css') }}">
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
        <!-- ***** Preloader Start ***** -->
        <!-- <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> -->
        <!-- ***** Preloader End ***** -->
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center ">
            <div class="container-fluid container-xxl d-flex align-items-center">
                <div id="logo" class="me-auto">
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
                </nav>
                <!-- .navbar -->
                <a class="booking-btn scrollto" href="/bookings">Book Now!</a>
            </div>
        </header><!-- End Header -->
  
        <!-- ======= Hero Section ======= -->
        <section id="hero" style="background: url('../images/wes-hicks-MEL-jJnm7RQ-unsplash.jpg') top center;width: 100%;height: 100vh; background-size: cover; overflow: hidden;position: relative;">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">Your way to becoming a star:</h1>
            <p class="mb-4 pb-0">BRING YOUR SHINE.</p>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
            <a href="#contact" class="about-btn scrollto">Reach us</a>
        </div>
    </section>
    <!-- End Hero Section -->
    
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <h2><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp;OUR MISSION</h2>
                        <p>Growing the sports and entertainment sector to a high height by providing platforms that turn talents and passion into income generation opportunities.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;OUR VISION</h3>
                        <p>A life where everyone has the opportunity to live happily.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;OUR VALUES</h3>
                        <p>Team-working Customers focused competence-based / Professionalism Discipline and respect</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->


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

        
        <!-- <section id="services">
            <div class="services pd">
                <div class="container" data-aos="zoom-in">
                    <h3 class="section-header title">Services</h3>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="square">
                                <i class="fa fa-microphone" aria-hidden="true"></i>
                            </div>
                            <div class="serv">
                                <h5>Audio Production</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="serv">
                                <div class="square">
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                </div>
                                <h5>Video Production</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="square"><i class="fa fa-globe"></i></div>
                            <div class="serv">
                                <h5>Hosting service</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            </div>
                        </div> 
                        <div class="col-md-4">
                            <div class="square"><i class="fa fa-camera"></i></div>
                            <div class="serv">
                                <h5>Photography service</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section id="services" class="service_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                       <div class="about_content">
                            <div class="background_layer"></div>
                            <div class="layer_content">
                                <div class="section_title">
                                    <h5>HOMIEZ</h5>
                                    <h2>what <strong>we offer</strong></h2>
                                    <div class="heading_line"><span></span></div>
                                    <p>If you need any industrial solution we are available for you. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <a href="#contact">Let's talk<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="service_box">
                            <div class="service_container">
                                <div class="background_layer"></div>
                                <div class="layer_content">
                                    <div class="service_card container">
                                        <div class="services row"> 
                                            <div class="col-md-4 service_section">
                                                <div class="service_caption">
                                                    <h2>Audio</h2>
                                                    <span>Production</span><br/>
                                                    <img class="img-circle" src="./images/1.jpg">
                                                    
                                                </div>
                                                <p>The team at Tectxon industry is very talented, dedicated, well organized and knowledgeable. I was most satisfied with the quality of the workmanship. They did excellent work.</p>
                                            </div> 
                                            <div class="col-md-4 service_section">
                                                <div class="service_caption">
                                                    <h2>Video</h2>
                                                    <span>Production</span><br/>
                                                    <img class="img-circle" src="./images/1.jpg">
                                                    
                                                </div>
                                                <p>The team at Tectxon industry is very talented, dedicated, well organized and knowledgeable. I was most satisfied with the quality of the workmanship. They did excellent work.</p>
                                            </div>
                                            <div class="col-md-4 service_section">
                                                <div class="service_caption">
                                                    <h2>Photography</h2>
                                                    <span>services</span><br/>
                                                    <img class="img-circle" src="./images/1.jpg">
                                                    
                                                </div>
                                                <p>The team at Tectxon industry is very talented, dedicated, well organized and knowledgeable. I was most satisfied with the quality of the workmanship. They did excellent work.</p>
                                            </div>
                                        </div>
                                        
                                        
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
                        <div class="pic card"> 
                    <div class="row">
                    <span class="col"><iframe width="200" height="100" src="https://www.youtube.com/embed/T5HYwBBoSOY?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img"></iframe></span>
                    <span class="col"><h6>NIYITANGA by Ivo The Street</h6></span>
                    </div>
                </div>
                <div class="pic card"> 
                    <div class="row">
                    <span class="col"><iframe width="200" height="100" src="https://www.youtube.com/embed/Ucv-e6lGOAU?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img"></iframe></span>
                    <span class="col"><h6>AMAKURU by IVO THE STREET(Official Video)</h6></span>
                    </div>
                </div>
                <div class="pic card"> 
                    <div class="row">
                    <span class="col"><iframe width="200" height="100" src="https://www.youtube.com/embed/YQRqOjJlYhA?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img"></iframe></span>
                    <span class="col"><h6>RAP YANJYE by Ivo The Street</h6></span>
                    </div>
                </div>
                <div class="pic card"> 
                    <div class="row">
                    <span class="col"><iframe width="200" height="100" src="https://www.youtube.com/embed/9HvaxEWK2ZQ?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img"></iframe></span>
                    <span class="col"><h6>IBINTU BYANJYE(4k Video) by P-FLA</h6></span>
                    </div>
                </div>
                <div class="pic card"> 
                    <div class="row">
                    <span class="col"><iframe width="200" height="100" src="https://www.youtube.com/embed/CkwtJFS7VZs?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img"></iframe></span>
                    <span class="col"><h6>IBIGANZA by FIREMAN</h6></span>
                    </div>
                </div>
                <div class="pic card"> 
                    <div class="row">
                    <span class="col"><iframe width="200" height="100" src="https://www.youtube.com/embed/LiZHNQA_eR0?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img"></iframe></span>
                    <span class="col"><h6>NTIDUKINA by P-FLA</h6></span>
                    </div>
                </div>
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
                        <div class="swiper-slide">
                            <a href="./images/1.jpg" class="gallery-lightbox">
                                <img src="./images/1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="./images/2.jpg" class="gallery-lightbox">
                                <img src="./images/2.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="./images/3.jpg" class="gallery-lightbox">
                                <img src="./images/3.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="./images/4.jpg" class="gallery-lightbox">
                                <img src="./images/4.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="./images/5.jpg" class="gallery-lightbox">
                                <img src="./images/5.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="./images/6.jpg" class="gallery-lightbox">
                                <img src="./images/6.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="./images/7.jpg" class="gallery-lightbox">
                                <img src="./images/7.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="./images/8.jpg" class="gallery-lightbox">
                                <img src="./images/8.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <!-- End Gallery Section -->
            <!-- ======= Subscribe Section ======= -->
            <section id="subscribe">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="text-center section-header">
                                Here's what people say about us
                                </h3>
                            <div class="testimony" data-wow-delay="0.2s">
                                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="1">
                                            <img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="2">
                                            <img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                                        </li>
                                    </ol>
                                    <div class="carousel-inner text-center">
                                        <div class="item active">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                
                                                        <small>Erik famous</small>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                
                                                        <small>Someone famous</small>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 3 -->
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                        <small>Someone famous</small>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- Carousel Buttons Next/Prev -->
                                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
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
        <section id="contact" class="page-content">
            <div class="container">
                <div class="row">
                    <div class="section-header text-center">
                        <h3>Interested to work together? Let's talk</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h3>Office</h3>
                            <address><i class="fa fa-map-marker-alt">&nbsp;</i>KN, Nyarugenge, <br>Kigali, RWANDA</address>
        					</div><!-- End .contact-box -->
                		</div><!-- End .col-md-4 -->

                		<div class="col-md-4">
                			<div class="contact-box text-center">
        						<h3>Start a Conversation</h3>

        						<div class="contact-address"><a href="mailto:info@homiez.rw"><i class="fa fa-envelope"></i>&nbsp;info@homiez.rw</a></div>
        						<div class="contact-address"><a href="tel:+250 789-064-613"><i class="fa fa-mobile-alt"></i>&nbsp;+250 789-064-613</a></div>
        					</div><!-- End .contact-box -->
                		</div><!-- End .col-md-4 -->

                		<div class="col-md-4">
                			<div class="contact-box text-center">
        						<h3>Social</h3>

        						<div class="social-icons social-icons-color justify-content-center">
			    					<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="fa fa-facebook-f"></i></a>
			    					<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
			    					<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
			    					<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
			    				</div><!-- End .soial-icons -->
        					</div><!-- End .contact-box -->
                		</div><!-- End .col-md-4 -->
                	</div><!-- End .row -->

                    <div class="touch-container row justify-content-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="touch-text text-center">
                                <h2 class="title mb-1">Get In Touch</h2><!-- End .title mb-2 -->
                                <p class="lead">
                                    We collaborate with ambitious brands and people; we’d love to build something great together.
                                </p><!-- End .lead text-primary -->
                			</div><!-- End .text-center -->
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <form action="#" class="contact-form mb-2">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="cname" class="sr-only">Name</label>
                						<input type="text" class="form-control" id="cname" placeholder="Name *" required="">
                					</div><!-- End .col-sm-4 -->

                					<div class="form-group col-sm-4">
                                        <label for="cemail" class="sr-only">Name</label>
                						<input type="email" class="form-control" id="cemail" placeholder="Email *" required="">
                					</div><!-- End .col-sm-4 -->

                					<div class="form-group col-sm-4">
                                        <label for="cphone" class="sr-only">Phone</label>
                						<input type="tel" class="form-control" id="cphone" placeholder="Phone">
                					</div><!-- End .col-sm-4 -->
                				</div><!-- End .row -->
                                <div class="form-group">
                                    <label for="csubject" class="sr-only">Subject</label>
                                    <input type="text" class="form-control" id="csubject" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <label for="cmessage" class="sr-only">Message</label>
                                    <textarea class="form-control" cols="30" rows="4" id="cmessage" required="" placeholder="Message *"></textarea>
                                </div>
								<div class="text-center">
	                				<button type="submit" class="btn btn-outline-danger btn-minwidth-sm">
	                					<span>Send message</span>
	            						<i class="icon-long-arrow-right"></i>
	                				</button>
                				</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= end Contact Section ======= -->
    </main>
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="./images/logo.png" alt="" class="text-center">
                    </div>
                    <div class="col-lg-6 col-md-6 footer-links">
                        <div class="subscribe-head">
                            <h2>DO you have a project?</h2>
                            <p>Connect to us and grab something big....</p>
                            <div class="form-section">
                            <a href="/booking" type="submit" class="btn btn-outline-danger btn-minwidth-sm">
	                					<span>Reserve now!</span>
	            						<i class="fa fa-arrow-right"></i>
	                				</a href="/booking">
                            </div>
                        </div>
                    </div>
                    <div class="text-center col-lg-3 col-md-6 footer-contact">
                        <h4>follow us:</h4>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
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
                Designed by <a href="#">HOMIEZ</a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>
    
    
    
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
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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

        // Page loading animation
        $(window).on('load', function() {
            $('#js-preloader').addClass('loaded');
        });   
    </script>
    @stack("scripts")
</body>
</html>