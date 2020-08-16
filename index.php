<?php
require "header.php";
 ?>

<main>
  <!---Slider-->
<div id="slider">
  <div id="menu-slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
       <li data-target="#menu-slider" data-slide-to="0" class="active"></li>
       <li data-target="#menu-slider" data-slide-to="1"></li>
       <li data-target="#menu-slider" data-slide-to="2"></li>
      </ol>
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/4.jpg" alt="First slide">
      <?php
      if (isset($_GET['signup'])) {
        if ($_GET['signup'] == "success") {
          echo '<div class="alert alert-success" role="alert">';
          echo "You have signed up with success!";
          echo "</div>";
        }
      }

      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Empty fields please fill out!";
          echo "</div>";
        }
        elseif ($_GET['error'] == "invalidmail_last_first") {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Invalide mail, first and last name try again!";
          echo "</div>";
        }
        elseif ($_GET['error'] == "invalidmail_last") {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Invalide mail and last name try again!";
          echo "</div>";
        }
        elseif ($_GET['error'] == "invalidmail_first") {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Invalide mail and first name try again!";
          echo "</div>";
        }
        elseif ($_GET['error'] == "invalidmail") {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Invalide mail try again!";
          echo "</div>";
        }
        elseif ($_GET['error'] == "invalidlast") {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Invalide last name try again!";
          echo "</div>";
        }
        elseif ($_GET['error'] == "invalidpassword") {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Invalide password try again!";
          echo "</div>";
        }
        elseif ($_GET['error'] == "already_used") {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Already used try again!";
          echo "</div>";
        }
      }
       ?>
      <div class="carousel-caption">
        <h5>Make Changes</h5>
        <p>Be Apart Of Our Family</p>
        <div class="form-btn">
          <form class="sl" action=""  method="post">
          <a href="#" name="button" class="btn btn-primary" id="login">LOGIN</a>
          <a href="#" name="button" class="btn btn-primary" id="signup">SIGNUP</a>
          </form>
        </div>
     </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/7.jpg" alt="Second slide">
      <div class="carousel-caption">
        <h5>Donate For Charity</h5>
        <p>Be Human Save Who Nedds Help</p>
        <div class="form-btn">
          <form class="" action="index.html" method="post">
            <a href="#" name="button" class="btn btn-primary" id="donate">DONATE NOW</a>
          </form>
        </div>
     </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/9.jpg" alt="Third slide">
      <div class="carousel-caption">
        <h5>Become A Member</h5>
        <p>We Are A Team Join Us</p>
        <div class="form-btn">
          <form class="" action="index.html" method="post">
            <a href="#" name="button" class="btn btn-primary" id="member">BECOME A MEMBER</a>
          </form>
        </div>
     </div>
     </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#menu-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#menu-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--SIGNUP POP UP-->
<div class="signup-modal">
  <div class="modal-content">
    <img src="images/profile.png" alt="profile">
    <div class="close">
      <i class="fas fa-times"></i>
    </div>
    <form class="signup" action="php/signup.inc.php" method="post">
      <input type="text" name="first" value="" placeholder="First name">
      <input type="text" name="last" value="" placeholder="Last name">
      <input type="email" name="email" value="" placeholder="Your e-mail...">
      <input type="password" name="pwd" value="" placeholder="Your password...">
      <input type="password" name="repwd" value="" placeholder="Type again password...">
      <input type="submit" name="sign-up" class="btn btn-primary" value="Signup">
    </form>
  </div>
</div>
<!--LOGIN-->
<div class="login-modal">
  <div class="modal-content">
    <img src="images/profile.png" alt="profile">
    <div class="close">
      <i class="fas fa-times"></i>
    </div>
    <form class="login" action="php/login.inc.php" method="post">
      <input type="email" name="email" value="" placeholder="Your e-mail...">
      <input type="password" name="pwd" value="" placeholder="Your password...">
      <input type="submit" name="login" class="btn btn-primary" value="Login" id="click-login">
    </form>
  </div>
</div>

<!--Donation-->
<div class="donation-modal">
  <div class="modal-content">
    <div class="close">
      <i class="fas fa-times"></i>
    </div>
    <div class="modal-step1" id="step1">
      <h2>Make a donation</h2>

      <h4>How much do you want to donate?</h4>

      <form class="donation" method="post">
          <div>
            <input type="text" name="amount" value="$" required>
          <div>
              <h4>Payment Type</h4>

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">One Time</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Recurring</label>
              </div>
          </div>
        </div>
      </form>
    <a href="#" class="btn btn-success" id="next1" style="margin-top: 20px;">Next</a>
  </div>
        <div class="modal-step2" id="step2">
            <h4>Billing Information</h4>
          <form class="donation" method="post">
            <input type="text" placeholder="Name">
            <input type="email" placeholder="E-mail">
            <input type="text" placeholder="Address">
            <input type="text" placeholder="City">
            <input type="number" placeholder="Postcode">
            <input type="text" placeholder="Country">
          </form>
            <a href="#" class="btn btn-danger" id="previous1">Previous</a>
            <a href="#" class="btn btn-success" id="next2">Next</a>
        </div>

        <div class="modal-step3" id="step3">
            <h4>Payment Method</h4>
          <form class="donation" method="post">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline3">Credit Card</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input" checked>
              <label class="custom-control-label" for="customRadioInline4">PayPal</label>
            </div>
          </form>
            <br><br>
            <a href="#" class="btn btn-danger" id="previous2">Previous</a>
            <input class="btn btn-primary" type="submit" value="Donate Now">
        </div>
  </div>
</div>

<!--Member-->
<div class="member-modal">
  <div class="modal-content">
    <div class="close">
      <i class="fas fa-times"></i>
    </div>
    <div class="modal-step-1" id="step-1">
      <h2>Become A Member</h2>

      <h4>Required Active Donator</h4>

      <form class="donation" method="post">
          <div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input" checked>
              <label class="custom-control-label" for="customRadio5">Active Member</label>
            </div>

          <div>
              <h4>Payment Type</h4>

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline6" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline6">Per month</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline7" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline7">Per week</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline8" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline8">Per day</label>
              </div>
          </div>
        </div>
    </form>
    <a href="#" class="btn btn-success" id="next-1" style="margin-top: 20px;">Next</a>
  </div>
        <div class="modal-step-2" id="step-2">
            <h4>Personal Information</h4>
          <form class="donation" method="post">
            <input type="text" name="firstname" value="" placeholder="First name" required>
            <input type="text" name="lastname" value="" placeholder="Last name" required>
            <input type="email" name="emailuid" value="" placeholder="Your e-mail..." required>
            <input type="password" name="pwduid" value="" placeholder="Your password..." required>
            <input type="password" name="repwduid" value="" placeholder="Type again password..." required>
          </form>
            <br>
            <a href="#" class="btn btn-danger" id="previous-1">Previous</a>
            <a href="#" class="btn btn-success" id="next-2">Next</a>
        </div>

        <div class="modal-step-3" id="step-3">
            <h4>Payment Method</h4>
          <form class="donation" method="post">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline9" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline9">Credit Card</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline10" name="customRadioInline1" class="custom-control-input" checked/>
              <label class="custom-control-label" for="customRadioInline10">PayPal</label>
            </div>
            <br><br>
            <a href="#" class="btn btn-danger" id="previous-2">Previous</a>
            <input class="btn btn-primary" type="submit" value="SIGNUP">
          </form>
        </div>
  </div>
</div>

<!--About Us-->
<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>About Us</h2>
        <div class="about-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      <a href="#" name="button" class="btn btn-primary" id="video">Watch video >></a>
      </div>
      <div class="col-md-6 skills-bar">
       <p>Food</p>
       <div class="progress">
        <div class="progress-bar" style="width:80%;">80%</div>
       </div>
       <p>Water</p>
       <div class="progress">
        <div class="progress-bar" style="width:75%;">75%</div>
       </div>
       <p>Clothes</p>
       <div class="progress">
        <div class="progress-bar" style="width:90%;">90%</div>
       </div>
       <p>Shelter</p>
       <div class="progress">
        <div class="progress-bar" style="width:85%;">85%</div>
       </div>
      </div>
    </div>
  </div>
</section>
<!--video-->
<div class="video-modal">
  <div class="video-content">
    <div class="close">
      <i class="fas fa-times"></i>
    </div>
      <video width="520" height="480" controls class="embed-responsive">
        <source src="video/impact.mp4" type="video/mp4">
      </video>
  </div>
</div>
<!--Team-->
<section id="team">
  <div class="container">
    <h1>Our Team</h1>
    <div class="row">
      <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
          <img src="images/p1.jpg" alt="" class="img-responsive" width="180px" height="180px">
          <ul>
            <a href="#"><li><i class="fab fa-facebook-f"></i></li> </a>
            <a href="#"><li><i class="fab fa-twitter"></i></li> </a>
            <a href="#"><li><i class="fab fa-instagram"></i></li> </a>
          </ul>
        </div>
        <h2>Michel Wilson</h2>
        <h3>Fonder / CEO</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
          <img src="images/p2.jpg" alt="" class="img-responsive" width="180px" height="180px">
          <ul>
            <a href="#"><li><i class="fab fa-facebook-f"></i></li> </a>
            <a href="#"><li><i class="fab fa-twitter"></i></li> </a>
            <a href="#"><li><i class="fab fa-instagram"></i></li> </a>
          </ul>
        </div>
        <h2>Mike Nelson</h2>
        <h3>CEO</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
          <img src="images/p3.jpg" alt="" class="img-responsive" width="180px" height="180px">
          <ul>
            <a href="#"><li><i class="fab fa-facebook-f"></i></li> </a>
            <a href="#"><li><i class="fab fa-twitter"></i></li> </a>
            <a href="#"><li><i class="fab fa-instagram"></i></li> </a>
          </ul>
        </div>
        <h2>Rainee Pum</h2>
        <h3>CEO</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
          <img src="images/p4.jpg" alt="" class="img-responsive" width="180px" height="180px">
          <ul>
            <a href="#"><li><i class="fab fa-facebook-f"></i></li> </a>
            <a href="#"><li><i class="fab fa-twitter"></i></li> </a>
            <a href="#"><li><i class="fab fa-instagram"></i></li> </a>
          </ul>
        </div>
        <h2>Jack Jr</h2>
        <h3>CEO</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</section>
<!--Events-->
<section class="events">
<div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h1 class="entry-title">Upcoming Events</h1>
                        </div><!-- .section-heading -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/event-1.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Jul 25, 2019 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/event-2.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Jul 25, 2019 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/event-3.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Jul 25, 2019 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h1 class="entry-title">Featured Cause</h1>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/featured-causes.jpg" alt="">
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Jul 25, 2019 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer mt-5">
                                    <a href="#" class="btn btn-primary">Donate Now</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .cause-content-wrap -->

                            <div class="fund-raised w-100">
                              <div class="progress">
                               <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                             </div>

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->
</section>
<section class="causes">
<div class="our-causes">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section-heading">
                       <h1 class="entry-title">Our Causes</h1>
                   </div><!-- .section-heading -->
               </div><!-- .col -->
           </div><!-- .row -->

           <div class="row">
               <div class="col-12">
                   <div class="swiper-container causes-slider causesSlider">
                       <div class="swiper-wrapper">
                           <div class="swiper-slide">
                               <div class="cause-wrap">
                                   <figure class="m-0">
                                       <img src="images/cause-1.jpg" alt="">

                                       <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                           <a href="#" class="btn btn-primary">Donate Now</a>
                                       </div><!-- .figure-overlay -->
                                   </figure>

                                   <div class="cause-content-wrap">
                                       <header class="entry-header d-flex flex-wrap align-items-center">
                                           <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                       </header><!-- .entry-header -->

                                       <div class="entry-content">
                                           <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                       </div><!-- .entry-content -->

                                       <div class="fund-raised w-100">
                                         <div class="progress">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                        </div>

                                           <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                               <div class="fund-raised-total mt-4">
                                                   Raised: $56 880
                                               </div><!-- .fund-raised-total -->

                                               <div class="fund-raised-goal mt-4">
                                                   Goal: $70 000
                                               </div><!-- .fund-raised-goal -->
                                           </div><!-- .fund-raised-details -->
                                       </div><!-- .fund-raised -->
                                   </div><!-- .cause-content-wrap -->
                               </div><!-- .cause-wrap -->
                           </div><!-- .swiper-slide -->

                           <div class="swiper-slide">
                               <div class="cause-wrap">
                                   <figure class="m-0">
                                       <img src="images/cause-2.jpg" alt="">

                                       <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                           <a href="#" class="btn btn-primary">Donate Now</a>
                                       </div><!-- .figure-overlay -->
                                   </figure>

                                   <div class="cause-content-wrap">
                                       <header class="entry-header d-flex flex-wrap align-items-center">
                                           <h3 class="entry-title w-100 m-0"><a href="#">Education for all</a></h3>
                                       </header><!-- .entry-header -->

                                       <div class="entry-content">
                                           <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                       </div><!-- .entry-content -->

                                       <div class="fund-raised w-100">
                                         <div class="progress">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                        </div>

                                           <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                               <div class="fund-raised-total mt-4">
                                                   Raised: $56 880
                                               </div><!-- .fund-raised-total -->

                                               <div class="fund-raised-goal mt-4">
                                                   Goal: $70 000
                                               </div><!-- .fund-raised-goal -->
                                           </div><!-- .fund-raised-details -->
                                       </div><!-- .fund-raised -->
                                   </div><!-- .cause-content-wrap -->
                               </div><!-- .cause-wrap -->
                           </div><!-- .swiper-slide -->

                           <div class="swiper-slide">
                               <div class="cause-wrap">
                                   <figure class="m-0">
                                       <img src="images/cause-3.jpg" alt="">

                                       <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                           <a href="#" class="btn btn-primary">Donate Now</a>
                                       </div><!-- .figure-overlay -->
                                   </figure>

                                   <div class="cause-content-wrap">
                                       <header class="entry-header d-flex flex-wrap align-items-center">
                                           <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                       </header><!-- .entry-header -->

                                       <div class="entry-content">
                                           <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                       </div><!-- .entry-content -->

                                       <div class="fund-raised w-100">
                                         <div class="progress">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                           <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                               <div class="fund-raised-total mt-4">
                                                   Raised: $56 880
                                               </div><!-- .fund-raised-total -->

                                               <div class="fund-raised-goal mt-4">
                                                   Goal: $70 000
                                               </div><!-- .fund-raised-goal -->
                                           </div><!-- .fund-raised-details -->
                                       </div><!-- .fund-raised -->
                                   </div><!-- .cause-content-wrap -->
                               </div><!-- .cause-wrap -->
                           </div><!-- .swiper-slide -->

                           <div class="swiper-slide">
                               <div class="cause-wrap">
                                   <figure class="m-0">
                                       <img src="images/cause-1.jpg" alt="">

                                       <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                           <a href="#" class="btn btn-primary">Donate Now</a>
                                       </div><!-- .figure-overlay -->
                                   </figure>

                                   <div class="cause-content-wrap">
                                       <header class="entry-header d-flex flex-wrap align-items-center">
                                           <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                       </header><!-- .entry-header -->

                                       <div class="entry-content">
                                           <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                       </div><!-- .entry-content -->

                                       <div class="fund-raised w-100">
                                         <div class="progress">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                           <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                               <div class="fund-raised-total mt-4">
                                                   Raised: $56 880
                                               </div><!-- .fund-raised-total -->

                                               <div class="fund-raised-goal mt-4">
                                                   Goal: $70 000
                                               </div><!-- .fund-raised-goal -->
                                           </div><!-- .fund-raised-details -->
                                       </div><!-- .fund-raised -->
                                   </div><!-- .cause-content-wrap -->
                               </div><!-- .cause-wrap -->
                           </div><!-- .swiper-slide -->

                           <div class="swiper-slide">
                               <div class="cause-wrap">
                                   <figure class="m-0">
                                       <img src="images/cause-2.jpg" alt="">

                                       <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                           <a href="#" class="btn btn-primary">Donate Now</a>
                                       </div><!-- .figure-overlay -->
                                   </figure>

                                   <div class="cause-content-wrap">
                                       <header class="entry-header d-flex flex-wrap align-items-center">
                                           <h3 class="entry-title w-100 m-0"><a href="#">Education for all</a></h3>
                                       </header><!-- .entry-header -->

                                       <div class="entry-content">
                                           <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                       </div><!-- .entry-content -->

                                       <div class="fund-raised w-100">
                                         <div class="progress">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                        </div>

                                           <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                               <div class="fund-raised-total mt-4">
                                                   Raised: $56 880
                                               </div><!-- .fund-raised-total -->

                                               <div class="fund-raised-goal mt-4">
                                                   Goal: $70 000
                                               </div><!-- .fund-raised-goal -->
                                           </div><!-- .fund-raised-details -->
                                       </div><!-- .fund-raised -->
                                   </div><!-- .cause-content-wrap -->
                               </div><!-- .cause-wrap -->
                           </div><!-- .swiper-slide -->

                           <div class="swiper-slide">
                               <div class="cause-wrap">
                                   <figure class="m-0">
                                       <img src="images/cause-3.jpg" alt="">

                                       <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                           <a href="#" class="btn btn-primary">Donate Now</a>
                                       </div><!-- .figure-overlay -->
                                   </figure>

                                   <div class="cause-content-wrap">
                                       <header class="entry-header d-flex flex-wrap align-items-center">
                                           <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                       </header><!-- .entry-header -->

                                       <div class="entry-content">
                                           <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                       </div><!-- .entry-content -->

                                       <div class="fund-raised w-100">
                                         <div class="progress">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>

                                           <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                               <div class="fund-raised-total mt-4">
                                                   Raised: $56 880
                                               </div><!-- .fund-raised-total -->

                                               <div class="fund-raised-goal mt-4">
                                                   Goal: $70 000
                                               </div><!-- .fund-raised-goal -->
                                           </div><!-- .fund-raised-details -->
                                       </div><!-- .fund-raised -->
                                   </div><!-- .cause-content-wrap -->
                               </div><!-- .cause-wrap -->
                           </div><!-- .swiper-slide -->
                       </div><!-- .swiper-wrapper -->

                   </div><!-- .swiper-container -->

                   <!-- Add Arrows -->
                   <div class="swiper-button-next flex justify-content-center align-items-center">
                       <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path></svg></span>
                   </div>

                   <div class="swiper-button-prev flex justify-content-center align-items-center">
                       <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg></span>
                   </div>
               </div><!-- .col -->
           </div><!-- .row -->
       </div><!-- .container -->
   </div><!-- .our-causes -->
</section>
<section class="limestone">
   <div class="home-page-limestone">
       <div class="container">
           <div class="row align-items-end">
               <div class="coL-12 col-lg-6">
                   <div class="section-heading">
                       <h1 class="entry-title">We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</h1>

                       <p class="mt-5">Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                   </div><!-- .section-heading -->
               </div><!-- .col -->

               <div class="col-12 col-lg-6">
                   <div class="milestones d-flex flex-wrap justify-content-between">
                       <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                           <div class="counter-box">
                               <div class="d-flex justify-content-center align-items-center">
                                   <img src="images/teamwork.png" alt="">
                               </div>

                               <div class="d-flex justify-content-center align-items-baseline">
                                <h2>320K</h2>
                               </div>

                               <h5 class="entry-title">Children helped</h5><!-- entry-title -->
                           </div><!-- counter-box -->
                       </div><!-- .col -->

                       <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                           <div class="counter-box">
                               <div class="d-flex justify-content-center align-items-center">
                                   <img src="images/donation.png" alt="">
                               </div>

                               <div class="d-flex justify-content-center align-items-baseline">
                                   <h2>120</h2>
                               </div>

                               <h5 class="entry-title">Water wells</h5><!-- entry-title -->
                           </div><!-- counter-box -->
                       </div><!-- .col -->

                       <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                           <div class="counter-box">
                               <div class="d-flex justify-content-center align-items-center">
                                   <img src="images/dove.png" alt="">
                               </div>

                               <div class="d-flex justify-content-center align-items-baseline">
                                   <h2>150K</h2>
                               </div>

                               <h5 class="entry-title">Volunteeres</h5><!-- entry-title -->
                           </div><!-- counter-box -->
                       </div><!-- .col -->
                   </div><!-- .milestones -->
               </div><!-- .col -->
           </div><!-- .row -->
       </div><!-- .container -->
   </div><!-- .our-causes -->
</section>
</main>


<?php
require "footer.php";
 ?>
