<!doctype html>
<html class="no-js" lang="zxx">


<?php include ('inc/head.php'); ?>
<style>
        /* Style the tab content */
        .tabs-content {
            display: none;
        }
    </style>
<body>

 <?php include ('inc/header.php'); ?>

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
                              <a href="javascript:void(0);" onclick="openTab('tab1')">Disablity Old Care <i class="fa-light fa-arrow-right"></i></a>
                              <a href="javascript:void(0);" onclick="openTab('tab2')">Domestic Assistance <i class="fa-light fa-arrow-right"></i></a>
                              <a href="javascript:void(0);" onclick="openTab('tab3')">Community Nursing <i class="fa-light fa-arrow-right"></i></a>
                              <a href="javascript:void(0);" onclick="openTab('tab4')">Alliaed Healthcare <i class="fa-light fa-arrow-right"></i></a>
                              <a href="javascript:void(0);" onclick="openTab('tab5')">Disability Housing plan <i class="fa-light fa-arrow-right"></i></a>
                              <a href="javascript:void(0);" onclick="openTab('tab6')">Physical Activites <i class="fa-light fa-arrow-right"></i></a>
                           </div>
                        </div>
                        <div class="tp-services-details-contact tp-services-details-contact-bg text-center" data-background="assets/img/services/service-details-side-bg-1.jpg"> 
                           <div class="tp-services-details-contact-icon">
                              <span><i class="flaticon-phone-call"></i></span>
                           </div>
                           <h4 class="tp-services-details-contact-title">Looking for <br> help from NDIS Provider?</h4>
                           <div class="tp-services-details-contact-phone">
                              <span>Call anytime</span>
                              <a href="tel:0124356">+(2) 871 382 023</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="tp-services-details-wrapper">
					   <div class="tabs-content" id="tab1" style="display: block;">
                        <div class="tp-services-details-main-thumb mb-30 w-img">
                           <img src="assets/img/services/service-deails-bg-1.jpg" alt="">
                        </div>
                        <h4 class="tp-services-details-title mb-20">Learn about the NDIS test in Tasmania</h4>
                        <p>Since joining Bili in 2009, Matilda has helped turn the company from a group of bright technology mi
                           working with startups into a global Digital Product Engineering Services leader helping Fortune 500
                           companies on their innovation agenda. In Matilda`s time as President and CEO of company, the comp
                           experienced explosive growth in size and revenue – all while developing a culture that fosters engag
                           employees around innovation.
                        </p>
                        <h4 class="tp-services-details-title-two mt-35 mb-15">Eligibility checklist :</h4>
                        <p>If you are aged between 7 and 65, a local area coordinator can help you to understand the NDIS
                           apply and connect with other government and community supports. If you have a child aged under
                           7, an early childhood partner can provide supports to children before they apply, and let families know
                           if the NDIS is right for their child.
                        </p>
                        <div class="tp-services-details-requ mt-40 mb-40">
                           <h4 class="tp-services-details-title-two mb-20">Age requirements :</h4>
                           <h5 class="tp-services-details-question mb-15">Question 1: Are you aged between 7 and 65?</h5>
                           <p>Yes. Go to the next question.</p>
                           <p>No. I have a child aged under 7. Find out more about <a href="contact.html">Help for children under 7.</a></p>
                           <p>No. I'm over 65. You must be under 65 to access the NDIS. You may be able to access other</p>
                        </div>
                      
                       </div>
                      <div class="tabs-content" id="tab2">
                        <h4 class="tp-services-details-title mb-20">Tab 2 Content</h4>
                       <div class="tp-services-details-main-thumb mb-30 w-img">
                           <img src="assets/img/services/service-deails-bg-1.jpg" alt="">
                        </div>
                        <h4 class="tp-services-details-title mb-20">Learn about the NDIS test in Tasmania</h4>
                        <p>Since joining Bili in 2009, Matilda has helped turn the company from a group of bright technology mi
                           working with startups into a global Digital Product Engineering Services leader helping Fortune 500
                           companies on their innovation agenda. In Matilda`s time as President and CEO of company, the comp
                           experienced explosive growth in size and revenue – all while developing a culture that fosters engag
                           employees around innovation.
                        </p>
                        <h4 class="tp-services-details-title-two mt-35 mb-15">Eligibility checklist :</h4>
                        <p>If you are aged between 7 and 65, a local area coordinator can help you to understand the NDIS
                           apply and connect with other government and community supports. If you have a child aged under
                           7, an early childhood partner can provide supports to children before they apply, and let families know
                           if the NDIS is right for their child.
                        </p>
                        <div class="tp-services-details-requ mt-40 mb-40">
                           <h4 class="tp-services-details-title-two mb-20">Age requirements :</h4>
                           <h5 class="tp-services-details-question mb-15">Question 1: Are you aged between 7 and 65?</h5>
                           <p>Yes. Go to the next question.</p>
                           <p>No. I have a child aged under 7. Find out more about <a href="contact.html">Help for children under 7.</a></p>
                           <p>No. I'm over 65. You must be under 65 to access the NDIS. You may be able to access other</p>
                        </div>
                       </div>
                      <div class="tabs-content" id="tab3">
                        <h4 class="tp-services-details-title mb-20">Tab 3 Content</h4>
                       <div class="tp-services-details-main-thumb mb-30 w-img">
                           <img src="assets/img/services/service-deails-bg-1.jpg" alt="">
                        </div>
                        <h4 class="tp-services-details-title mb-20">Learn about the NDIS test in Tasmania</h4>
                        <p>Since joining Bili in 2009, Matilda has helped turn the company from a group of bright technology mi
                           working with startups into a global Digital Product Engineering Services leader helping Fortune 500
                           companies on their innovation agenda. In Matilda`s time as President and CEO of company, the comp
                           experienced explosive growth in size and revenue – all while developing a culture that fosters engag
                           employees around innovation.
                        </p>
                        <h4 class="tp-services-details-title-two mt-35 mb-15">Eligibility checklist :</h4>
                        <p>If you are aged between 7 and 65, a local area coordinator can help you to understand the NDIS
                           apply and connect with other government and community supports. If you have a child aged under
                           7, an early childhood partner can provide supports to children before they apply, and let families know
                           if the NDIS is right for their child.
                        </p>
                        <div class="tp-services-details-requ mt-40 mb-40">
                           <h4 class="tp-services-details-title-two mb-20">Age requirements :</h4>
                           <h5 class="tp-services-details-question mb-15">Question 1: Are you aged between 7 and 65?</h5>
                           <p>Yes. Go to the next question.</p>
                           <p>No. I have a child aged under 7. Find out more about <a href="contact.html">Help for children under 7.</a></p>
                           <p>No. I'm over 65. You must be under 65 to access the NDIS. You may be able to access other</p>
                        </div>
                       </div>
					   <div class="tabs-content" id="tab4">
                        <h4 class="tp-services-details-title mb-20">Tab 4 Content</h4>
                       <div class="tp-services-details-main-thumb mb-30 w-img">
                           <img src="assets/img/services/service-deails-bg-1.jpg" alt="">
                        </div>
                        <h4 class="tp-services-details-title mb-20">Learn about the NDIS test in Tasmania</h4>
                        <p>Since joining Bili in 2009, Matilda has helped turn the company from a group of bright technology mi
                           working with startups into a global Digital Product Engineering Services leader helping Fortune 500
                           companies on their innovation agenda. In Matilda`s time as President and CEO of company, the comp
                           experienced explosive growth in size and revenue – all while developing a culture that fosters engag
                           employees around innovation.
                        </p>
                        <h4 class="tp-services-details-title-two mt-35 mb-15">Eligibility checklist :</h4>
                        <p>If you are aged between 7 and 65, a local area coordinator can help you to understand the NDIS
                           apply and connect with other government and community supports. If you have a child aged under
                           7, an early childhood partner can provide supports to children before they apply, and let families know
                           if the NDIS is right for their child.
                        </p>
                        <div class="tp-services-details-requ mt-40 mb-40">
                           <h4 class="tp-services-details-title-two mb-20">Age requirements :</h4>
                           <h5 class="tp-services-details-question mb-15">Question 1: Are you aged between 7 and 65?</h5>
                           <p>Yes. Go to the next question.</p>
                           <p>No. I have a child aged under 7. Find out more about <a href="contact.html">Help for children under 7.</a></p>
                           <p>No. I'm over 65. You must be under 65 to access the NDIS. You may be able to access other</p>
                        </div>
                       </div>
					   
					    <div class="tabs-content" id="tab5">
                        <h4 class="tp-services-details-title mb-20">Tab 5 Content</h4>
                       <div class="tp-services-details-main-thumb mb-30 w-img">
                           <img src="assets/img/services/service-deails-bg-1.jpg" alt="">
                        </div>
                        <h4 class="tp-services-details-title mb-20">Learn about the NDIS test in Tasmania</h4>
                        <p>Since joining Bili in 2009, Matilda has helped turn the company from a group of bright technology mi
                           working with startups into a global Digital Product Engineering Services leader helping Fortune 500
                           companies on their innovation agenda. In Matilda`s time as President and CEO of company, the comp
                           experienced explosive growth in size and revenue – all while developing a culture that fosters engag
                           employees around innovation.
                        </p>
                        <h4 class="tp-services-details-title-two mt-35 mb-15">Eligibility checklist :</h4>
                        <p>If you are aged between 7 and 65, a local area coordinator can help you to understand the NDIS
                           apply and connect with other government and community supports. If you have a child aged under
                           7, an early childhood partner can provide supports to children before they apply, and let families know
                           if the NDIS is right for their child.
                        </p>
                        <div class="tp-services-details-requ mt-40 mb-40">
                           <h4 class="tp-services-details-title-two mb-20">Age requirements :</h4>
                           <h5 class="tp-services-details-question mb-15">Question 1: Are you aged between 7 and 65?</h5>
                           <p>Yes. Go to the next question.</p>
                           <p>No. I have a child aged under 7. Find out more about <a href="contact.html">Help for children under 7.</a></p>
                           <p>No. I'm over 65. You must be under 65 to access the NDIS. You may be able to access other</p>
                        </div>
                       </div>
					   <div class="tabs-content" id="tab6">
                        <h4 class="tp-services-details-title mb-20">Tab 6 Content</h4>
                       <div class="tp-services-details-main-thumb mb-30 w-img">
                           <img src="assets/img/services/service-deails-bg-1.jpg" alt="">
                        </div>
                        <h4 class="tp-services-details-title mb-20">Learn about the NDIS test in Tasmania</h4>
                        <p>Since joining Bili in 2009, Matilda has helped turn the company from a group of bright technology mi
                           working with startups into a global Digital Product Engineering Services leader helping Fortune 500
                           companies on their innovation agenda. In Matilda`s time as President and CEO of company, the comp
                           experienced explosive growth in size and revenue – all while developing a culture that fosters engag
                           employees around innovation.
                        </p>
                        <h4 class="tp-services-details-title-two mt-35 mb-15">Eligibility checklist :</h4>
                        <p>If you are aged between 7 and 65, a local area coordinator can help you to understand the NDIS
                           apply and connect with other government and community supports. If you have a child aged under
                           7, an early childhood partner can provide supports to children before they apply, and let families know
                           if the NDIS is right for their child.
                        </p>
                        <div class="tp-services-details-requ mt-40 mb-40">
                           <h4 class="tp-services-details-title-two mb-20">Age requirements :</h4>
                           <h5 class="tp-services-details-question mb-15">Question 1: Are you aged between 7 and 65?</h5>
                           <p>Yes. Go to the next question.</p>
                           <p>No. I have a child aged under 7. Find out more about <a href="contact.html">Help for children under 7.</a></p>
                           <p>No. I'm over 65. You must be under 65 to access the NDIS. You may be able to access other</p>
                        </div>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
		 
		 
		 
         <!-- sercices-area-end -->
		<script>			
			function openTab(tabName) {
				var i, tabContent;
				tabContent = document.getElementsByClassName("tabs-content");
				for (i = 0; i < tabContent.length; i++) {
					tabContent[i].style.display = "none";
				}
				document.getElementById(tabName).style.display = "block";
			}
		</script>
		
		<div class="tp-product-details-bottom pb-140">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="tp-product-details-tab-nav tp-tab">
                           <nav>
                              <div class="nav nav-tabs justify-content-center p-relative tp-product-tab" id="navPresentationTab" role="tablist">
                                 <button class="nav-link" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="false" tabindex="-1">Description</button>
                                 <button class="nav-link active" id="nav-addInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-addInfo" type="button" role="tab" aria-controls="nav-addInfo" aria-selected="true">Additional information</button>
                                 <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false" tabindex="-1">Reviews (2)</button>

                                 <span id="productTabMarker" class="tp-product-details-tab-line" style="left: 445px; display: block; width: 222px;"></span>
                              </div>
                              </nav>  
                              <div class="tab-content" id="navPresentationTabContent">
                              <div class="tab-pane fade" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                                 <div class="tp-product-details-desc-wrapper pt-80">
                                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortor</p>
                                    <p>We have covered many special events such as fireworks, fairs, parades, races, walks, awards ceremonies, fashion shows, sporting events, and even a memorial service.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur</p>
                                 </div>
                              </div>
                              <div class="tab-pane fade active show" id="nav-addInfo" role="tabpanel" aria-labelledby="nav-addInfo-tab" tabindex="0">
                                 
                                 <div class="tp-product-details-additional-info ">
                                    <div class="row justify-content-center">
                                       <div class="col-xl-10">
                                          <table>
                                             <tbody>
                                                <tr>
                                                   <td>Color</td>
                                                   <td>Gray, Dark gray, Mystic black</td>
                                                </tr>
                                                <tr>
                                                   <td>Graphics Coprocessor</td>
                                                   <td>Exynos 9611, Octa Core (4x2.3GHz + 4x1.7GHz)</td>
                                                </tr>
                                                <tr>
                                                   <td>Wireless Type</td>
                                                   <td>802.11a/b/g/n/ac, Bluetooth</td>
                                                </tr>
                                                <tr>
                                                   <td>Average (in hours)</td>
                                                   <td>08 Hours</td>
                                                </tr>
                                                <tr>
                                                   <td>Series</td>
                                                   <td>Black Galaxy Lite</td>
                                                </tr>
                                                <tr>
                                                   <td>Item model number</td>
                                                   <td>SM-P6102ZAEXOR</td>
                                                </tr>
                                                <tr>
                                                   <td>Hardware Platform</td>
                                                   <td>Fluid back</td>
                                                </tr>
                                                <tr>
                                                   <td>Operating System</td>
                                                   <td>Wooden</td>
                                                </tr>
                                                <tr>
                                                   <td>Product Dimensions</td>
                                                   <td>0.28 x 6.07 x 9.63 inches</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                                 <div class="tp-product-details-review-wrapper pt-60">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="tp-product-details-review-statics">
                                             <!-- number -->
                                             <div class="tp-product-details-review-number d-inline-block mb-50">
                                                <h3 class="tp-product-details-review-number-title">Customer reviews</h3>
                                                <div class="tp-product-details-review-summery d-flex align-items-center">
                                                   <div class="tp-product-details-review-summery-value">
                                                      <span>4.5</span>
                                                   </div>
                                                   <div class="tp-product-details-review-summery-rating d-flex align-items-center">
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <p>(36 Reviews)</p>
                                                   </div>
                                                </div>
                                                <div class="tp-product-details-review-rating-list">
                                                   <!-- single item -->
                                                   <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                                      <span>5 Start</span>
                                                      <div class="tp-product-details-review-rating-bar">
                                                         <span class="tp-product-details-review-rating-bar-inner" data-width="82%" style="width: 82%;"></span>
                                                      </div>
                                                      <div class="tp-product-details-review-rating-percent">
                                                         <span>82%</span>
                                                      </div>
                                                   </div> <!-- end single item -->
                                                   
                                                   <!-- single item -->
                                                   <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                                      <span>4 Start</span>
                                                      <div class="tp-product-details-review-rating-bar">
                                                         <span class="tp-product-details-review-rating-bar-inner" data-width="30%" style="width: 30%;"></span>
                                                      </div>
                                                      <div class="tp-product-details-review-rating-percent">
                                                         <span>30%</span>
                                                      </div>
                                                   </div> <!-- end single item -->
      
                                                   <!-- single item -->
                                                   <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                                      <span>3 Start</span>
                                                      <div class="tp-product-details-review-rating-bar">
                                                         <span class="tp-product-details-review-rating-bar-inner" data-width="15%" style="width: 15%;"></span>
                                                      </div>
                                                      <div class="tp-product-details-review-rating-percent">
                                                         <span>15%</span>
                                                      </div>
                                                   </div> <!-- end single item -->
      
                                                   <!-- single item -->
                                                   <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                                      <span>2 Start</span>
                                                      <div class="tp-product-details-review-rating-bar">
                                                         <span class="tp-product-details-review-rating-bar-inner" data-width="6%" style="width: 6%;"></span>
                                                      </div>
                                                      <div class="tp-product-details-review-rating-percent">
                                                         <span>6%</span>
                                                      </div>
                                                   </div> <!-- end single item -->
      
                                                   <!-- single item -->
                                                   <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                                      <span>1 Start</span>
                                                      <div class="tp-product-details-review-rating-bar">
                                                         <span class="tp-product-details-review-rating-bar-inner" data-width="10%" style="width: 10%;"></span>
                                                      </div>
                                                      <div class="tp-product-details-review-rating-percent">
                                                         <span>10%</span>
                                                      </div>
                                                   </div> <!-- end single item -->
                                                </div>
                                             </div>
      
                                             <!-- reviews -->
                                             <div class="tp-product-details-review-list pr-110">
                                                <h3 class="tp-product-details-review-title">Rating &amp; Review</h3>
                                                <div class="tp-product-details-review-avater d-flex align-items-start">
                                                   <div class="tp-product-details-review-avater-thumb">
                                                      <a href="#">
                                                         <img src="assets/img/users/user-3.jpg" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="tp-product-details-review-avater-content">
                                                      <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                      </div>
                                                      <h3 class="tp-product-details-review-avater-title">Eleanor Fant</h3>
                                                      <span class="tp-product-details-review-avater-meta">06 March, 2023 </span>
      
                                                      <div class="tp-product-details-review-avater-comment">
                                                         <p>Designed very similarly to the nearly double priced Galaxy tab S6, with the only removal being.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-product-details-review-avater d-flex align-items-start">
                                                   <div class="tp-product-details-review-avater-thumb">
                                                      <a href="#">
                                                         <img src="assets/img/users/user-2.jpg" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="tp-product-details-review-avater-content">
                                                      <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                         <span><i class="fa-solid fa-star"></i></span>
                                                      </div>
                                                      <h3 class="tp-product-details-review-avater-title">Matiour Rahman</h3>
                                                      <span class="tp-product-details-review-avater-meta">06 March, 2023 </span>
      
                                                      <div class="tp-product-details-review-avater-comment">
                                                         <p>This review is for the Samsung Tab S6 Lite, 64gb wifi in blue. purchased this product performed.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div> <!-- end col -->
                                       <div class="col-lg-6">
                                          <div class="tp-product-details-review-form">
                                             <h3 class="tp-product-details-review-form-title">Review this product</h3>
                                             <p>Your email address will not be published. Required fields are marked *</p>
                                             <form action="#">
                                                <div class="tp-product-details-review-form-rating d-flex align-items-center">
                                                   <p>Your Rating :</p>
                                                   <div class="tp-product-details-review-form-rating-icon d-flex align-items-center">
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                      <span><i class="fa-solid fa-star"></i></span>
                                                   </div>
                                                </div>
                                                <div class="tp-product-details-review-input-wrapper">
                                                   <div class="tp-product-details-review-input-box">
                                                      <div class="tp-product-details-review-input">
                                                         <textarea id="msg" name="msg" placeholder="Write your review here..."></textarea>
                                                      </div>
                                                      <div class="tp-product-details-review-input-title">
                                                         <label for="msg">Your Name</label>
                                                      </div>
                                                   </div>
                                                   <div class="tp-product-details-review-input-box">
                                                      <div class="tp-product-details-review-input">
                                                         <input name="name" id="name" type="text" placeholder="Matiour Rahman">
                                                      </div>
                                                      <div class="tp-product-details-review-input-title">
                                                         <label for="name">Your Name</label>
                                                      </div>
                                                   </div>
                                                   <div class="tp-product-details-review-input-box">
                                                      <div class="tp-product-details-review-input">
                                                         <input name="email" id="email" type="email" placeholder="ncare@mail.com">
                                                      </div>
                                                      <div class="tp-product-details-review-input-title">
                                                         <label for="email">Your Email</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-product-details-review-suggetions mb-20">
                                                   <div class="tp-product-details-review-remeber">
                                                      <input id="remeber" type="checkbox">
                                                      <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                                   </div>
                                                </div>
                                                <div class="tp-product-details-review-btn-wrapper">
                                                   <button class="tp-product-details-review-btn">Submit</button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              </div>                                                
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			
			
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