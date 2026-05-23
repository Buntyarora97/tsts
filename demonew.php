<!doctype html>
<html class="no-js" lang="zxx">



<?php include('inc/head.php'); ?>

<body>

  <?php include('inc/header.php'); ?>
   <!-- offcanvas area start -->
   <div class="offcanvas__area">
      <div class="offcanvas__wrapper">
         <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
               <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
                  <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
               </svg>
            </button>
         </div>
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo logo">
                  <a href="index.html">
                     <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
            </div>
            <div class="tp-main-menu-mobile"></div>
            <div class="offcanvas__btn">
               <a href="contact.html" class="tp-btn">Getting Started <i class="fa-regular fa-chevron-right"></i></a>
            </div>
            <div class="side-info-contact">
               <span>we are here</span>
               <p>1489 Langley Ave <br> Grand Forks Afb, North.</p>
            </div>
            <div class="side-info-social">
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
               <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- offcanvas area end -->

   <!-- header-search -->
   <div class="tpsearchbar tp-sidebar-area tp-search-area">
      <button class="tpsearchbar__close"><i class="fa-sharp fa-regular fa-xmark"></i></button>
      <div class="search-wrap text-center">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6 col-md-10 pt-100 pb-100">
                  <h2 class="tpsearchbar__title">What Are You Looking For?</h2>
                  <div class="tpsearchbar__form">
                     <form action="#">
                        <input type="text" name="search" placeholder="Search Product...">
                        <button class="tpsearchbar__search-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="search-body-overlay"></div>
   <!-- header-search-end -->

      <main>

         <!-- breadcrumb-area-start -->
         <section class="breadcrumb-area tp-breadcrumb-bg breadcrumb-wrap" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="tp-breadcrumb text-center">
                        <div class="tp-breadcrumb-link mb-10">
                           <span class="tp-breadcrumb-link-active"><a href="index.html">Home</a></span>
                           <span> \ Service Details</span>
                        </div>
                        <h2 class="tp-breadcrumb-title">Service Details</h2>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb-area-end -->

         <!-- sercices-area-start -->
       
		<section class="services-area pt-115 pb-0">
<div class="container">
   <div class="row">
      <div class="col-lg-4">
         <div class="tp-services-details-wrap mb-40">
            <div class="tp-services-details-services mb-50">
               <div class="tp-services-details-services-wrap">
                  <a href="#hair-removal" class="tab-link active"> Hair Removal <i class="fa-light fa-arrow-right"></i></a>
                  <a href="#permanent-hair-removal" class="tab-link"> Permanent Hair Removal <i class="fa-light fa-arrow-right"></i></a>
               </div>
            </div>                       
         </div>
      </div>
      <div class="col-lg-8">
         <div class="tp-services-details-wrapper">
            <div class="tab-content">
               <div id="hair-removal" class="tab-pane active">
                  <img src="assets/img/treatment/laserremoval-banner.jpg" alt="" style="width: 100%;">
                  <h3 style="margin-top: 10px; text-align: center">Hair Fall Treatment</h3>
                  <p style="text-align: justify">Nowadays, hair fall is a natural phenomenon. Growth and development of the hair is a clinical process, and when the hair attains full maturity, its length and thickness fall out naturally and is replaced by the new hair, and this process goes on. The main problem occurs when the follicles fall out at a very rapid rate, which may result in complete baldness or irregular patches. In medical terminology, this is known as Alopecia. There are various factors that contribute towards hair fall. Today it is one of the common problems both in men as well as women. Stress, hectic work schedules, use of cosmetic products, frequent use of color, pollution, exposure to the sun, bad eating habits, etc. are a few among many that affect the health of our hairs. But don't worry, hair treatments are possible and will surely help you regain your precious hair back and maintain their health as well.</p>
               </div>
               <div id="permanent-hair-removal" class="tab-pane">
                  <img src="assets/img/treatment/laserremoval-banner.jpg" alt="" style="width: 100%;">
                  <h3 style="margin-top: 10px; text-align: center">Permanent Hair Removal</h3>
                  <p style="text-align: justify">Are you fed up by the unwanted hair over your body? The unwanted hair seeks the attention of the person talking to you, and thus, all your makeup and efforts go in vain. There are various methods to remove these hairs like Waxing and Tweezing, but when you talk about lifelong results, then all treatments go in vain. The Laser Hair Removal treatment is the most optimal and single last permanent solution.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
		</section>





			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script>
			$(document).ready(function() {
			   $(".tab-link").click(function(event) {
				  event.preventDefault();
				  $(".tab-pane").hide();
				  $($(this).attr("href")).show();
			   });
			   
			   // Show the first tab by default
			   $("#disability-tab").show();
			});
			</script>


         <!-- sercices-area-end -->

         <!-- social-media-area-start -->
         <div class="social-media-area mt-65 fix">
            <div class="container-fluid">
               <div class="tp-social-media-wrap">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="swiper-container tp-social-active tp-social-media-wrapper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide tp-social-media-item">
                                 <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span> Facebook</a>
                              </div>
                              <div class="swiper-slide tp-social-media-item">
                                 <a href="#"><span><i class="fa-brands fa-twitter"></i></span> Twitter</a>
                              </div>
                              <div class="swiper-slide tp-social-media-item">
                                 <a href="#"><span><i class="fa-brands fa-instagram"></i></span> Instagram</a>
                              </div>
                              <div class="swiper-slide tp-social-media-item">
                                 <a href="#"><span><i class="fa-brands fa-youtube"></i></span> Youtube</a>
                              </div>
                              <div class="swiper-slide tp-social-media-item">
                                 <a href="#"><span><i class="fa-brands fa-whatsapp"></i></span> Whatsapp</a>
                              </div>
                              <div class="swiper-slide tp-social-media-item">
                                 <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span> Linkdin</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- social-media-area-end -->

      </main>

      <!-- footer-area-start -->
     <?php include ('inc/footer.php'); ?>
      <!-- footer-area-end -->
      

      <!-- JS here -->
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery.js"></script>
      <script src="assets/js/vendor/waypoints.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/range-slider.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/purecounter.js"></script>
      <script src="assets/js/countdown.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/main.js"></script>
   </body>

<!-- Mirrored from template.wphix.com/ncare-prv/ncare/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2023 06:42:45 GMT -->
</html>