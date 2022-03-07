<?php
include("config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Charity.css">
    <script src="https://kit.fontawesome.com/f262bb2a7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <title>Charity</title>
    <link rel="icon" href="img/donation.png">
    <style>
      .gotopbtn{
        position: fixed;
        width: 50px;
        height: 50px;
        bottom: 40px;
        right: 20px;
        background: #517aec;
        text-decoration: none;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-size: 22px;
        border-radius: 50%;
        -webkit-transition:all 300ms ease;
        -ms-transition:all 300ms ease;
        -o-transition:all 300ms ease;
        -moz-transition:all 300ms ease;
        transition:all 300ms ease;		
      }
      .gotopbtn:hover{
        color:#517aec !important;
        background:#e2d5d5;
        border : 1px solid #517aec;
      }
      .affix {
        top: 0;
        width: 100%;
        z-index: 9999 !important;
      }
      .affix + .container-fluid {
        padding-top: 70px;
      }

    </style>
  </head>
  <body>
      <!-- header -->
      <header>
        <div class="container">
            <div class="row justify-content-between container-fluid">
                <div class="col">
                <a class="navbar-brand" href="#"><img src="img/donation.png" width="40" height="40" alt="">
                    <span>Charity</span></a>
                </div>
                <div class="col d-flex justify-content-end">
                <div class="social-media">
                <p class="mb-0 d-flex">
                    <div class="single-header-info d-flex align-item-center justify-content-center">
                        <div class="icon-box">
                            <div class="inner-box">
                              <i class="far fa-envelope"></i>
                            </div>
                        </div>
                        <div class="content">
                            <h3>E-mail</h3>
                            <p>charity@mail.com</p>
                        </div>
                    </div>
                    <div class="single-header-info d-flex align-item-center justify-content-center">
                        <div class="icon-box">
                            <div class="inner-box">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Call Now</h3>
                            <p><b>(+91) 123-456-789-0</b></p>
                        </div>
                    </div>
                </p>
                </div>
                </div>
            </div>
            <div class="nav-outer">
              <nav class="navbar navbar-expand-lg ftco-navbar-light" id="navbar_top">
                <div class="container ftco-navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="fa fa-bars"></span>  
                        <a href="#" class="social-meadia"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-meadia"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-meadia"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-meadia"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="social-meadia"><i class="fa fa-youtube"></i></a>
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#aboutus" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                            <li class="nav-item"><a href="#popular-causes" class="nav-link">Causes</a></li>
                            <li class="nav-item"><a href="#footer-contact" class="nav-link">Contact</a></li>
                            <li class="nav-item cta"><a href="donate.php" target="_blank" class="nav-link">Donate Now!</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <script type="text/javascript">
              document.addEventListener("DOMContentLoaded", function(){
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 50) {
                      document.getElementById('navbar_top').classList.add('fixed-top');
                      // add padding top to show content behind navbar
                      navbar_height = document.querySelector('.navbar').offsetHeight;
                      document.body.style.paddingTop = navbar_height + 'px';
                    } else {
                      document.getElementById('navbar_top').classList.remove('fixed-top');
                      // remove padding top from body
                      document.body.style.paddingTop = '0';
                    } 
                });
              }); 
            </script>
            </div>
        </div>
      </header>  
      <!-- slider -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/slider-1.jpg" alt="First slide">
              <div class="carousel-caption d-md-block">
                <h5>Join Us Today</h5>
                <h1 class="animate__animated animate__rubberBand animate__delay-.5s ">Better Life for People</h1>
                <p>DONATE FOR THE POOR CHILDREN <br>Forget what you can get and see what you can give.</p>
                <a href="donate.php" target="_blank" class="animate__animated animate__fadeInUp animate__delay-.8s">Donet Now</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider-2.jpg" alt="Second slide">
              <div class="carousel-caption d-md-block">
                <h5>Join Us Today</h5>
                <h1 class="animate__animated animate__rubberBand animate__delay-.5s">Together we can make a Difference</h1>
                <p>Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                <a href="donate.php" target="_blank" class="animate__animated animate__fadeInUp animate__delay-.8s">Donet Now</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider-3.jpg" alt="Third slide">
              <div class="carousel-caption d-md-block">
                <h5>Join Us Today</h5>
                <h1 class="animate__animated animate__rubberBand animate__delay-.5s">Give a little. Change a lot.</h1>
                <p>Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                <a href="donate.php" target="_blank" class="animate__animated animate__fadeInUp animate__delay-.8s">Donet Now</a>
              </div>
            </div>
          </div>
      </div>
        
    <!-- header ends -->


    <!-- count -->
    <div class="section-full bg-white contect-inner-3" id="aboutus">
      <div class="container">
        <div class="row dzseth p-lr15">
          <div class="col-md-4 p-a0">
            <div class="about-info-2 overlay-primary-dark p-a30 seth" style="background-image: url(img/pic1.jpg); background-size: cover;height: 305px;">
              <h2 class="bold m-t0 text-secondry m-b10" data-aos="zoom-in-up">Welcome to Charity Info</h2>
              <h4 class="text-white" data-aos="zoom-in-up">Charity Theme simply dummy text of the printing</h4>
              <p class="text-white" data-aos="zoom-in-up">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since.</p>
              <a href="#about" class="site-button radius-xl bg-secondry" data-aos="zoom-in-up">More Info</a>
            </div>
          </div>
          <div class="col-md-8 p-a0">
            <div class="about-info-1 overlay-primary  p-a30 seth" style="background-image: url(img/pic3.jpg); background-size: cover;height: 305px;">
							<div class="row count">
                <div class="col-md-4 col-sm-4 xs-padding">
                    <div class="promo-content">
                      <div class="counter-content">
                        <i class="fas fa-rupee-sign"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Money Donated</h4>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-padding">
                    <div class="promo-content">
                      <div class="counter-content">
                        <i class="fas fa-user-alt"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-padding">
                    <div class="promo-content">
                      <div class="counter-content">
                        <i class="fas fa-mail-bulk"></i>
                        <h3 class="counter">669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
          </div>
          <script type="text/javascript">
            $(".counter").counterUp({delay:10,time:2000});
          </script>
        </div>
      </div>
  </div>
    <!-- count end -->

    <br><br><br>

    <div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-profile-male"></i>
							</span>
							<div class="feature-copy"> 
              <center>
                <h2>Become a volunteer</h2>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
              </center>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-happy"></i>
							</span>
							<div class="feature-copy">
              <center>
                <h2>Happy Giving</h2>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
              </center>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
              <center>
                <h2>Donation</h2>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
              </center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <br><br><br>

    <!-- About Us -->
    <section id="about">
        <div class="container">
            <div class="row">
              <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column" data-aos="fade-right" data-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <div class="sec-title">ABOUT US</div>
                  <h2>Welcome To <span class="theme_color">Charity</span></h2>
                  <div class="text">We charity is an international charity that partners with communities through a holistic, sustainable development model that equips families with the tools and skills they need to lift themselves out of poverty. Ad mei nominati expetendis incorrupte, periculis prodesset</div>
                  <a href="about.html" class="theme-btn btn-style-three">Read More</a>
                </div>
              </div>
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Video Box-->
              <div class="video-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                  <figure class="video-image">
                      <img src="img/video-img.jpg" alt="">
                  </figure>
                  <a href="https://youtu.be/6TV-W_CD_og" target="_blank" class="lightbox-image overlay-box">
                      <span class="flaticon-play-button">
                          <i class="ripple"></i>
                      </span>
                  </a>
              </div>
						
					</div>
				</div>
            </div>
        </div>
    </section>
    <!-- About Us end -->
    <!-- why donate us -->
    <section id="why" class="overlay-white sec-padding parallax-section">
      <div class="container">
        <div class="row">
          <div class=" promote-project text-center" data-aos="zoom-in" data-duration="1200">
            <h3>Save Children From Hunger</h3>
            <div class="sec-title colored text-center">
              <span class="decor">
                <span class="inner"></span>
              </span>
            </div>
            <h2>Became a part of the world lorem ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>
            <a a href="donate.php" target="_blank" class="thm-btn">Donate Now</a>
          </div>
        </div>
      </div>
	  </section>
    <!-- why donate us end -->
    <!-- gallery -->

    <section id="gallery">
      <div class="gallery-section ptb-30">
          <div class="container">
              <div class="section-title text-center mb-25">
                  <h2>Trust Gallery</h2>
                  <p class="section-2">There are many variations of azer duskam of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
              </div>
          </div>
          <div class="clearfix">       
              <!--Image Box-->
              <div class="image-box" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1250">
                  <div class="inner-box">
                      <figure class="image"><a href="img/s1.jpg" class="lightbox-image"><img src="img/s1.jpg" alt=""></a></figure>
                      <a href="img/s1.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fas fa-search"></span></a>
                  </div>
              </div>
              
              <!--Image Box-->
              <div class="image-box" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1250">
                  <div class="inner-box">
                      <figure class="image"><a href="img/s2.jpg" class="lightbox-image"><img src="img/s2.jpg" alt=""></a></figure>
                      <a href="img/s2.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fas fa-search"></span></a>
                  </div>
              </div>
              
              <!--Image Box-->
              <div class="image-box"data-aos="fade-left"data-aos-delay="300" data-aos-duration="1250">
                  <div class="inner-box">
                      <figure class="image"><a href="img/s3.jpg" class="lightbox-image"><img src="img/s3.jpg" alt=""></a></figure>
                      <a href="img/s3.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fas fa-search"></span></a>
                  </div>
              </div>
              
              <!--Image Box-->
              <div class="image-box" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1250">
                  <div class="inner-box">
                      <figure class="image"><a href="img/s4.jpg" class="lightbox-image"><img src="img/s4.jpg" alt=""></a></figure>
                      <a href="img/s4.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fas fa-search"></span></a>
                  </div>
              </div>
              
              <!--Image Box-->
              <div class="image-box" data-aos="fade-right" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1250">
                  <div class="inner-box">
                      <figure class="image"><a href="img/s5.jpg" class="lightbox-image"><img src="img/s5.jpg" alt=""></a></figure>
                      <a href="img/s5.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fas fa-search"></span></a>
                  </div>
              </div>
              
              <!--Image Box-->
              <div class="image-box" data-aos="fade-right" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1250">
                  <div class="inner-box">
                      <figure class="image"><a href="img/s6.jpg" class="lightbox-image"><img src="img/s6.jpg" alt=""></a></figure>
                      <a href="img/s6.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fas fa-search"></span></a>
                  </div>
              </div>
              
              <!--Image Box-->
              <div class="image-box" data-aos="fade-left" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1250">
                  <div class="inner-box">
                      <figure class="image"><a href="img/s7.jpg" class="lightbox-image"><img src="img/s7.jpg" alt=""></a></figure>
                      <a href="img/s7.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fas fa-search"></span></a>
                  </div>
              </div>
              
              <!--Image Box-->
              <div class="image-box" data-aos="fade-left" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1250">
                  <div class="inner-box">
                      <figure class="image"><a href="img/s8.jpg" class="lightbox-image"><img src="img/s8.jpg" alt=""></a></figure>
                      <a href="img/s8.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fas fa-search"></span></a>
                  </div>
              </div>
          
          </div>
      </div>
  </section> 
    <!-- gallery end -->
    <!-- img -->
    <div class="bg-img2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12"> </div>
            <div class="col-lg-6 col-md-12 wow fadeInDown animated" style="visibility: visible;">
              <h2>Our Foundation is trusted
                by more than <span>1234k</span> Peoples</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container two-img two-img2">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-9 bg-white rounded">
            <div class="position-relative" data-aos="zoom-in" data-aos-duration="1000">
              <div class="img-css2">
                <div class="shadow2 rounded overflow-hidden"> <img src="img/foundation1.jpg" class="img-fluid" alt="" title="">
                  <div class="the-world position-absolute">
                    <h2>Let’s Make The World Better Place
                      Together</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-9">
            <div class="img-2 position-relative rounded overflow-hidden" data-aos="flip-right"> <img src="img/foundation.jpg" alt="" title="">
              <div class="phone-n">
                <div class="rotate"><a href=""><i class="fas fa-phone-volume mr-15"></i> 123 456 7890</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    <!-- img end -->
    <!-- causes -->
    <section id="popular-causes" class="masthead">
        <div class="container">
            <div class="sec-title">
				<div class="row">
					<div class="col-lg-6 col-md-6  pull-left">
						<h2><span class="theme_color">Our Recent</span> Causes</h2>
						<div class="text">Poor people are at high risk of severe malnutrition &amp; no education</div>
					</div>
					<div class="col-lg-6 col-md-6  pull-right">
						<a href="causes.html" class="theme-btn btn-style-four"><span class="btn-title">View all causes</span></a>
					</div>
				</div>
			</div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1150">
          <div class="bg-white shadow position-relative text-center">
            <div class="causes-img-container"><img src="img/causes1.jpg" alt="" title="" class="img-fluid"></div>
            <div class="box-css">
              <h4> Healthcare </h4>
              <h3>Lorem Ipsum is simply  text</h3>
              <p> Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula est euripidis hinc</p>
              <div class="progress-levels">
                <!--Skill Box-->
                <div class="progress-box ">
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="65" style="width: 65%;">
                          <div class="percent">65%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="donate clearfix">
                <div class="float-left"> <span class="font-weight-bold text-black-50">Raised:</span> <span class="font-weight-bold">Rs.487,500</span> </div>
                <div class="float-right"> <span class="font-weight-bold text-black-50">Goal:</span> <span class="font-weight-bold">Rs.750,000</span> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1150">
          <div class="bg-white shadow position-relative text-center">
            <div class="causes-img-container"><img src="img/causes2.jpg" alt="" title="" class="img-fluid"></div>
            <div class="box-css">
              <h4> Healthcare </h4>
              <h3>Lorem Ipsum is simply </h3>
              <p> Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula est euripidis hinc</p>
              <div class="progress-levels">
                <!--Skill Box-->
                <div class="progress-box ">
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="80" style="width: 80%;">
                          <div class="percent">80%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="donate clearfix">
                <div class="float-left"> <span class="font-weight-bold text-black-50">Raised:</span> <span class="font-weight-bold">Rs.65,500</span> </div>
                <div class="float-right"> <span class="font-weight-bold text-black-50">Goal:</span> <span class="font-weight-bold">Rs.850,000</span> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1150">
          <div class="bg-white shadow position-relative text-center">
            <div class="causes-img-container"><img src="img/causes3.jpg" alt="" title="" class="img-fluid"></div>
            <div class="box-css">
              <h4> Healthcare </h4>
              <h3>Lorem Ipsum is simply</h3>
              <p> Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula est euripidis hinc</p>
              <div class="progress-levels">
                <!--Skill Box-->
                <div class="progress-box ">
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="95" style="width: 95%;">
                          <div class="percent">95%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="donate clearfix">
                <div class="float-left"> <span class="font-weight-bold text-black-50">Raised:</span> <span class="font-weight-bold">Rs.687,500</span> </div>
                <div class="float-right"> <span class="font-weight-bold text-black-50">Goal:</span> <span class="font-weight-bold">Rs.750,000</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </section>
    <!-- causes end -->
    <!-- footer -->
    <footer class="footer sec-padding" style="background-image: url(img/map-pattern.png);" id="footer-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="footer-widget about-widget">
              <!-- <a href="#">
                <img src="img/resources/footer-logo.png" alt="Awesome Image">
              </a> -->
              <a class="footer-text" href="#"><img src="img/donation.png" width="40" height="40" alt="">
                Charity<span></span></a>
              <p>Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
              <ul class="contact">
                <li><i class="fa fa-map-marker"></i> <span>60 Grant Ave. Carteret NJ 0708</span></li>
                <li><i class="fa fa-phone"></i> <span>(880) 1723801729</span></li>
                <li><i class="fa fa-envelope-o"></i> <span>charity@gmail.com</span></li>
              </ul>
              <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="footer-widget quick-links">
              <h3 class="title">Featu<span>re</span>s</h3>
              <ul>
                <li>Food Donation</li>
                <li>Money Donation</li>
                <li>Dress Donation</li>
                <li>Water Supplay</li>
                <li>Education Donation</li>
                <li>Toys Donation</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="footer-widget contact-widget">
              <h3 class="title">Contact Form</h3>
              <form action="function.php" class="contact-form" method="POST">
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="email" placeholder="Email Address">
                <textarea name="message" placeholder="Your Message"></textarea>
                <button type="submit" name="send">Send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
	  </footer>
    <section class="footer-bottom">
        <div class="container text-center">
          <p>Website Created By <a href="#">Rohit Jaiswar</a> with love</p>
        </div>
	  </section>
    <!-- footer ends -->
    
    <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>
