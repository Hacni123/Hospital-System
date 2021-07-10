
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Life Care - Responsive HTML5 Multi Page Template</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Site Icons -->
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="shortcut icon" href="assets/images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="assets/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="assets/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="assets/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="assets/css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="assets/js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="assets/images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="assets/images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@Lifecare.com</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a data-scroll href="#about">About us</a></li>
                        <li><a data-scroll href="#service">Services</a></li>
                        <li><a data-scroll href="#doctors">Doctors</a></li>
                        <li><a data-scroll href="#getintouch">Contact</a></li>
                        <li><a href="{{URL::to('/login')}}">Login</a></li>
                        <li><a href="{{URL::to('/register')}}">Sign Up</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="assets/images/icon-logo.png" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Life Care", "We Care Your Health", "We are Expert!" ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="time-table" class="time-table-section">
         <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#2895f1;">
                     <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                     <h3>Emergency Case</h3>
                     <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas mole.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">
                     <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 
                     <h3>Working Hours</h3>
                     <div class="time-table-section">
                        <ul>
                           <li><span class="left">Monday - Friday</span><span class="right">8.00 – 18.00</span></li>
                           <li><span class="left">Saturday</span><span class="right">8.00 – 16.00</span></li>
                           <li><span class="left">Sunday</span><span class="right">8.00 – 13.00</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time three" style="background:#0060b1;">
                     <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                     <h3>Clinic Timetable</h3>
                     <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas mole.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="assets/images/icon-logo.png" alt="#"></span>
               <h2>The Specialist Clinic</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>What We Do</h4>
                     <h2>Clinic Service</h2>
                     <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                     <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  </p>
                     <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="assets/images/about_03.jpg" alt="" class="img-responsive">
                     <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="hr1">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="assets/images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="assets/images/clinic_01.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Digital Control Center</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="assets/images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="assets/images/clinic_02.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Hygienic Operating Room</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="assets/images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="assets/images/clinic_03.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Specialist Physicians</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="assets/images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="assets/images/clinic_01.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Digital Control Center</h3>
                  </div>
                  <!-- end service -->
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="assets/images/service-icon1.png" alt="#" /></span>
                           <h4>PREMIUM FACILITIES</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="assets/images/service-icon2.png" alt="#" /></span>
                           <h4>LARGE LABORATORY</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="assets/images/service-icon3.png" alt="#" /></span>
                           <h4>DETAILED SPECIALIST</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="assets/images/service-icon4.png" alt="#" /></span>
                           <h4>CHILDREN CARE CENTER</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="assets/images/service-icon5.png" alt="#" /></span>
                           <h4>FINE INFRASTRUCTURE</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="assets/images/service-icon6.png" alt="#" /></span>
                           <h4>ANYTIME BLOOD BANK</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span> Book Appointment</h3>
                     <div class="form">
                        <form action="index.html">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" placeholder="Your Name"  />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="email" placeholder="Email Address" id="email" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Day</option>
                                          <option>Sunday</option>
                                          <option>Monday</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Time</option>
                                          <option>AM</option>
                                          <option>PM</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Doctor Name</option>
                                          <option>Mr.XYZ</option>
                                          <option>Mr.ABC</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit">Submit</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
	  
	  <!-- doctor -->
	  
	  <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">
		
		<div class="heading">
               <span class="icon-logo"><img src="assets/images/icon-logo.png" alt="#"></span>
               <h2>The Specialist Clinic</h2>
            </div>

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="assets/images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Soren Bo Bostian</h3>
                            <small>Clinic Owner</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="assets/images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Bryan Saftler</h3>
                            <small>Internal Diseases</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="widget clearfix">
                        <img src="assets/images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Matthew Bayliss</h3>
                            <small>Orthopedics Expert</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div>
	  
	  <div id="price" class="section pr wow fadeIn" style="background-image:url('assets/images/price-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="tab-content">
                     <div class="tab-pane active fade in" id="tab1">
                        <div class="row text-center">
                           <div class="col-md-4">
                              <div class="pricing-table">
                                 <div class="pricing-table-header">
                                    <h2>Shared Hosting</h2>
                                    <h3>$85/month</h3>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                    <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                    <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                    <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                    <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="pricing-table pricing-table-highlighted">
                                 <div class="pricing-table-header grd1">
                                    <h2>WordPress Hosting</h2>
                                    <h3>$59/year</h3>
                                 </div>
                                 <div class="pricing-table-space"></div>
                                 <div class="pricing-table-text">
                                    <p>This is a perfect choice for small businesses and startups.</p>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                    <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                    <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                    <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                    <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="pricing-table">
                                 <div class="pricing-table-header">
                                    <h2>Reseller Hosting</h2>
                                    <h3>$85/one-time</h3>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                    <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                    <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                    <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                    <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end pane -->
                     <div class="tab-pane fade" id="tab2">
                        <div class="row text-center">
                           <div class="col-md-6">
                              <div class="pricing-table">
                                 <div class="pricing-table-header">
                                    <h2>Dedicated Server</h2>
                                    <h3>$85/month</h3>
                                 </div>
                                 <div class="pricing-table-space"></div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                    <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                    <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                    <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                    <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="pricing-table pricing-table-highlighted">
                                 <div class="pricing-table-header grd1">
                                    <h2>VPS Server</h2>
                                    <h3>$59/month</h3>
                                 </div>
                                 <div class="pricing-table-space"></div>
                                 <div class="pricing-table-text">
                                    <p>This is a perfect choice for small businesses and startups.</p>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                    <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                    <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                    <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                    <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end pane -->
                  </div>
                  <!-- end content -->
               </div>
               <!-- end col -->
            </div>
         </div>
      </div>
	  
	  <!-- end doctor section -->
	  
      <div id="testimonials" class="section wb wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="assets/images/icon-logo.png" alt="#"></span>
               <h2>Testimonials</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                        <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                     </div>
                     <div class="testi-meta">
                        <img src="assets/images/testi_01.png" alt="" class="img-responsive alignleft">
                        <h4>James Fernando <small>- Manager of Racer</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                        <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                     </div>
                     <div class="testi-meta">
                        <img src="assets/images/testi_02.png" alt="" class="img-responsive alignleft">
                        <h4>Andrew Atkinson <small>- Life Manager</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="invis">
            <div class="row">
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                        <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                     </div>
                     <div class="testi-meta">
                        <img src="assets/images/testi_03.png" alt="" class="img-responsive alignleft">
                        <h4>Amanda DOE <small>- Manager of Racer</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                        <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                     </div>
                     <div class="testi-meta">
                        <img src="assets/images/testi_01.png" alt="" class="img-responsive alignleft">
                        <h4>Martin Johnson <small>- Founder of Goosilo</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="assets/images/icon-logo.png" alt="#"></span>
               <h2>Get in Touch</h2>
            </div>
         </div>
         <div class="contact-section">
            <div class="form-contant">
               <form id="ajax-contact" action="assets/mailer.php" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group in_name">
                           <input type="text" class="form-control" placeholder="Name" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="email" class="form-control" placeholder="E-mail" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group in_message"> 
                           <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div class="actions">
                           <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div id="googleMap" style="width:100%;height:450px;"></div>
         </div>
      </div>
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="assets/images/logo.png" alt=""></a>
                     <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+1) 800 123 456</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>SUBSCRIBE</h3>
                     <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                              <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                              <div class="clearfix"></div>
                              <!-- mailchimp-alerts Start -->
                              <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div>
                                 <!-- mailchimp-submitting end -->
                                 <div class="mailchimp-success"></div>
                                 <!-- mailchimp-success end -->
                                 <div class="mailchimp-error"></div>
                                 <!-- mailchimp-error end -->
                              </div>
                              <!-- mailchimp-alerts end -->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>© 2018 Lifecare. All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="social">
                     <ul class="social-links">
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="assets/js/all.js"></script>
      <!-- all plugins -->
      <script src="assets/js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>
