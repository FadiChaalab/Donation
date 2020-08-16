<?php
require "header.php";
 ?>
 <main class="single-page portfolio">
     <div class="page-header">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <h1>Portfolio</h1>
                 </div><!-- .col -->
             </div><!-- .row -->
         </div><!-- .container -->
     </div><!-- .page-header -->

    <div class="portfolio-wrap">
        <div class="container">
          <div class="swiper-container gallerySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide s3"><img src="images/10.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/4.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/7.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/12.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/16.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/9.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/11.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/12.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/13.jpg" alt="" class="img-responsive"></div>
              <div class="swiper-slide s3"><img src="images/14.jpg" alt="" class="img-responsive"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
              <div class="gallery">
                <a href="images/10.jpg" data-lightbox="gallery" data-title="Childrens"><img src="images/10 - small.jpg" alt="" class="img-responsive"></a>
                <a href="images/4.jpg" data-lightbox="gallery" data-title="Water"><img src="images/4 - small.jpg" alt="" class="img-responsive"></a>
                <a href="images/7.jpg" data-lightbox="gallery" data-title="Happyness"><img src="images/7 - small.jpg" alt="" class="img-responsive"></a>
                <a href="images/12.jpg" data-lightbox="gallery" data-title="Smile"><img src="images/12 - small.jpg" alt="" class="img-responsive"></a>
                <a href="images/16.jpg" data-lightbox="gallery" data-title="Charity"><img src="images/16 - small.jpg" alt="" class="img-responsive"></a>
                <a href="images/9.jpg" data-lightbox="gallery" data-title="Team"><img src="images/9 - small.jpg" alt="" class="img-responsive"></a>
                <a href="images/13.jpg" data-lightbox="gallery" data-title="Hope"><img src="images/13 - small.jpg" alt="" class="img-responsive"></a>
                <a href="images/15.jpg" data-lightbox="gallery" data-title="Education"><img src="images/15 - small.jpg" alt="" class="img-responsive"></a>
              </div>




            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-72">
                    <a href="#" class="btn btn-primary">Load More</a>
                </div>
            </div>
        </div>
    </div>
</main>
  <?php
    require "footer.php";
  ?>
