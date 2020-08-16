<?php
require "header.php";
 ?>

 <main>
   <section class="img-profile">

     <?php
     if (isset($_GET['login'])) {
       if ($_GET['login'] == "success") {
         echo '<div class="alert alert-success" role="alert">';
         echo "You have loged in with success!";
         echo "</div>";
       }
     }
     if (isset($_GET['upload'])) {
       if ($_GET['upload'] == "success") {
         echo '<div class="alert alert-success" role="alert">';
         echo "Your photo have been uploaded with success!";
         echo "</div>";
       }
     }
     if (isset($_GET['error'])) {
       if ($_GET['error'] == "file_to_big") {
         echo '<div class="alert alert-danger" role="alert">';
         echo "Your files is too big!";
         echo "</div>";
       }
       elseif ($_GET['error'] == "unexpected_error") {
         echo '<div class="alert alert-danger" role="alert">';
         echo "there was an error uploading your file!";
         echo "</div>";
       }
       elseif ($_GET['error'] == "wrong_type") {
         echo '<div class="alert alert-danger" role="alert">';
         echo "You can not upload files of this type!";
         echo "</div>";
       }
     }
     $idUser = $_SESSION['userid'];
     require 'php/dbh.inc.php';
      $sql = "SELECT * FROM users WHERE idusers='$idUser';";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
           $id = $row['idusers'];
           $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
           $resultImg = mysqli_query($conn, $sqlImg);
            if ($rowImg = mysqli_fetch_assoc($resultImg)) {
              echo "<div class='container'>";
                  if ($rowImg['status'] == 0) {
                    echo "<img src='uploads/profile".$id.".jpg' class='img-responsive img-res'>";
                  }else {
                    echo "<img src='uploads/profile-default.jpg' class='img-responsive img-res'>";
                  }
                  echo "<p class='info'>";
                  echo "welcome&nbsp;".$row['firstUsers']."&nbsp;".$row['lastUsers'];
                  echo "</p>";
              echo "</div>";
            }
         }
       }else {
         echo "<div class='alert alert-warning' role='alert'>";
         echo "Something went wrong!";
         echo "</div>";
       }
      ?>
      <div class="container">
        <form class="upload-form" action="php/uploads.inc.php" method="post" enctype="multipart/form-data">
          <label for="">Choose Photo
            <input type="file" name="file" value="">
          </label>
          <button type="submit" name="upload" class="btn btn-primary">UPLOAD</button>
          <button type="submit" name="logout" class="btn btn-primary" formaction="php/logout.inc.php" id="LogOut">LOGOUT</button>
        </form>
      </div>
   </section>
  <section class="section-notification notif">
      <div class="row">
        <div class="col-lg-8">
          <div class="card text-center">
            <div class="card-header" style="background-color:white;">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#about" role="tab" data-toggle="tab">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#activity" role="tab" data-toggle="tab">Activity</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#others" role="tab" data-toggle="tab">Others</a>
                  </li>
                </ul>
              </div>
              <div class="card-body" style="min-height: 350px;">
                <div class="tab-content">
                  <div class="tab-pane active" role="tabpanel" id="about">
                    <?php
                    $sql = "SELECT * FROM users WHERE idusers='$idUser';";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                       while ($row = mysqli_fetch_assoc($result)) {
                         $id = $row['idusers'];
                         $sqlArt = "SELECT * FROM article WHERE usersid='$id'";
                         $resultArt = mysqli_query($conn, $sqlArt);

                          if ($rowArt = mysqli_fetch_assoc($resultArt)) {

                            echo "<div class='container'>";
                                if ($rowArt['ok'] == 0) {
                                  echo "<h5 class='card-title'>".$rowArt['userArticle']."</h5>";
                                }else {
                                  echo "<form class='upload-form' action='php/article.inc.php' method='post'>";
                                  echo '<h5 class="card-title">Describe youself</h5>';
                                  echo "<p class='card-text'>Note: You can't change your description later.</p>";
                                  echo '<div class="form-group">';

                                  echo '<textarea name="aricle" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>';
                                  echo '</div>';
                                  echo '<button type="submit" name="save" class="btn btn-primary">SAVE</button>';
                                  echo "</form>";
                                }

                            echo "</div>";
                          }
                       }
                     }else {
                       echo "<div class='alert alert-warning' role='alert'>";
                       echo "Something went wrong!";
                       echo "</div>";
                     }
                     ?>

                  </div>
                  <div class="tab-pane fade" role="tabpanel" id="activity">
                    <h5 class="card-title">Your Activity</h5>
                    <h6>Nothing to show yet!</h6>
                  </div>
                  <div class="tab-pane fade" role="tabpanel" id="others">
                    <h5 class="card-title">Others</h5>
                    <h6>Nothing to show yet!</h6>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne" style="background-color: white;">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Food Topic
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Throughout Africa, as well as in Yemen, people are suffering from famine brought about by long-lasting drought. According to the United Nations High Commissioner for Refugees, South Sudan has over one million people facing starvation. Yemen has 19 million in need of humanitarian aid, and 17 million Yemenis lack reliable access to food. In Northern Nigeria alone, 7 million are facing the impact of famine. Many of the countries impacted by the drought and famine already host refugees and are seeing increasing spikes of internal displacement.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo" style="background-color: white;">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Water Topic
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Children in impoverished rural areas often travel long distances to collect water, which is frequently contaminated. Your gift allows us to:
                  Construct a deep borehole well at the church or center
                  Install a water storage unit, pump and other hardware
                  Provide children and families access to safe water
                  Reduce cases of waterborne illnesses
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree" style="background-color: white;">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Clothes Topic
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  I have a bad habit of buying clothes and never wearing them, or buying something specifically for one occasion and never wearing it again. As a result, I always seem to have a closet stuffed with clothing in great condition that I know I’ll never wear.
                  While I could sell on eBay or sell on Craigslist, I don’t have the patience for everything involved in online sales. I’d rather gather up all of my unwanted clothes and drop them off at a charity once a year. In addition to providing people in need with some very nice, gently used clothing, I also receive tax deductions for donations. So really, I still get something out of my unwanted clothes.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="related-section">
    <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This profile section is related to The Charity <i class="far fa-heart"></i> we would like you to know more about us.</p>
      <hr class="my-4">
      <p>We are organisation who helps childrens in need we provide them food, water, clothes, education and more.We have served many years and we have achieved many goals, want to know more about us click Learn more.</p>
      <p class="lead">
        <a class="btn btn-primary" href="#" role="button">Learn more</a>
      </p>
    </div>
  </section>
  <section>
    <h1 class="top">Top Donators</h1>
    <div class="swiper-container donatorSwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/Angelina.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title famous">Angelina Jolie</h5>
            <p class="card-text">Born on June 4, 1975 is an American actress, filmmaker, and humanitarian. The recipient of such accolades as an Academy Award and 3 Golden Globe Awards.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Top Donator</li>
            <li class="list-group-item">Monthly Donating</li>
            <li class="list-group-item">Over 2750$</li>
          </ul>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/rock.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title famous">Dwayne Douglas Johnson</h5>
            <p class="card-text">Born on May 2, 1972, also known by his ring name The Rock, is an American actor, producer, and semi-retired professional wrestler.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Top Donator</li>
            <li class="list-group-item">Monthly Donating</li>
            <li class="list-group-item">Over 2600$</li>
          </ul>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/Vin.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title famous">Vin Diesel</h5>
            <p class="card-text">Born on July 18, 1967, better known by his stage name Vin Diesel, is an American actor, producer, director and screenwriter.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Top Donator</li>
            <li class="list-group-item">Monthly Donating</li>
            <li class="list-group-item">Over 1950$</li>
          </ul>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/Summer.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title famous">Summer Quinn</h5>
            <p class="card-text">Quinn is a fictional character from the popular American television show Baywatch. She was portrayed by actress Nicole Eggert in the tv series.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Top Donator</li>
            <li class="list-group-item">Monthly Donating</li>
            <li class="list-group-item">Over 1750$</li>
          </ul>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/will.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title famous">Will Smith</h5>
            <p class="card-text">Born on September 25, 1968 in Philadelphia, Pennsylvania, to Caroline (Bright), a Philadelphia school board administrator, and Willard Smith., a U.S.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Top Donator</li>
            <li class="list-group-item">Monthly Donating</li>
            <li class="list-group-item">Over 1650$</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</section>

<section class="donate-area relative section-gap" id="donate">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 header-text">
							<h1 class="top">Donate Now</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							<div class="single-info">
								<h4 class="h4">Divided Evenly</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
							<div class="single-info">
								<h4 class="h4">Transperancy All the Way</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
							<div class="single-info">
								<h4 class="h4">Trustworthy</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
						</div>
						<div class="col-lg-6 contact-right">
              <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value=""
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value=""
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                  </div>
                  <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username"
                    aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Donation Type</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Per day</option>
                <option>Per week</option>
                <option>Per month</option>
              </select>
            </div>
            <div class="input-group">
              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" required>
              <div class="input-group-append">
                <span class="input-group-text">$</span>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">DONATE</button>
          </form>
					  		<p class="payment-method">
					  			We Accept :   <img src="images/payment.png" alt="" style="cursor: pointer;">
					  		</p>
						</div>
					</div>
				</div>
</section>
 </main>

 <?php
 require "footer.php";
  ?>
