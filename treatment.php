<!doctype html>
<html class="no-js" lang="zxx">


<?php include ('inc/head.php'); ?>
<style>       
	.tabs-content {
		display: none;
	}	
	.tp-product-details-tab-nav .nav-tabs {
		padding-bottom: 30px;
		border-bottom: 1px solid #E0E2E3;
	}
	.tp-product-details-tab-nav .nav-tabs .nav-link:hover {
		color: var(--tp-common-black);
		background: #051a53 !important;
		color:white;
	}
	.tp-product-details-tab-nav .nav-tabs .nav-link.active, .tp-product-details-tab-nav .nav-tabs .nav-link:hover {
		color:black;
		background-color: #eee !important;
	}
	.tp-services-details-services-wrap a active{
		
	}
	.tp-about-list ul li {
		list-style: none;
		color: var(--tp-text-body);
		font-size: 14px;
		font-weight: 500;
		text-transform: capitalize;
		display: flex;
		margin-bottom: 0px;
	}
	p{
		text-align:justify !important;
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
                  <a href="index.php">
                     <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
            </div>
            <div class="tp-main-menu-mobile"></div>
            <div class="offcanvas__btn">
               <a href="contact.php" class="tp-btn">Getting Started <i class="fa-regular fa-chevron-right"></i></a>
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
                           <span class="tp-breadcrumb-link-active"><a href="index.php">Home</a></span>
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
   <div class="tp-product-details-bottom pb-140">
               <div class="container">
                       <div class="row">
        <div class="col-xl-12">
            <div class="tp-product-details-tab-nav tp-tab">
                <nav>
                    <ul class="nav nav-tabs justify-content-center p-relative tp-product-tab" id="navPresentationTab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description"
                                role="tab" aria-controls="nav-description" aria-selected="true" style="background: #051a53 !important;color:white !important;padding:10px">Skin Care Treatments</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="nav-addInfo-tab" data-toggle="tab" href="#nav-addInfo" role="tab"
                                aria-controls="nav-addInfo" aria-selected="false" style="padding:10px;color:#69696a">Technologies</a>
                        </li>
                    </ul>
                </nav>
                <div class="tab-content" id="navPresentationTabContent">
                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                        aria-labelledby="nav-description-tab">
                        <div class="row">
                            <div class="col-md-4">
								<div class="tp-services-details-wrap mb-40">
									<div class="tp-services-details-services mb-50">
										<div class="tp-services-details-services-wrap">
											<div class="nav flex-column " id="subTabs1" role="tablist">
												<a class="nav-link active" id="subTab1" data-toggle="tab" href="#subTabContent1" role="tab"
													aria-controls="subTabContent1" aria-selected="true"> Wrinkles Treatment  <i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab2" data-toggle="tab" href="#subTabContent2" role="tab"
													aria-controls="subTabContent2" aria-selected="false"> Warts Removal <i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab3" data-toggle="tab" href="#subTabContent3" role="tab"
													aria-controls="subTabContent3" aria-selected="false">De Pigmentation Treatment <i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab4" data-toggle="tab" href="#subTabContent4" role="tab"
													aria-controls="subTabContent4" aria-selected="false">Keloid Treatment <i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab5" data-toggle="tab" href="#subTabContent5" role="tab"
													aria-controls="subTabContent5" aria-selected="false"> Mole Removal Treatment<i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab6" data-toggle="tab" href="#subTabContent6" role="tab"
													aria-controls="subTabContent6" aria-selected="false">Dark Circle Removal<i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab7" data-toggle="tab" href="#subTabContent7" role="tab"
													aria-controls="subTabContent7" aria-selected="false">Skin Re-surfacing<i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab8" data-toggle="tab" href="#subTabContent8" role="tab"
													aria-controls="subTabContent8" aria-selected="false">  Acne Scar Treatment<i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab9" data-toggle="tab" href="#subTabContent9" role="tab"
													aria-controls="subTabContent9" aria-selected="false"> Permanent Tattoo Removal<i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab10" data-toggle="tab" href="#subTabContent10" role="tab"
													aria-controls="subTabContent10" aria-selected="false">  Scar Treatment<i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab11" data-toggle="tab" href="#subTabContent11" role="tab"
													aria-controls="subTabContent11" aria-selected="false">  Xanthelasma Removal Treatment<i class="fa-light fa-arrow-right"></i></a>
													
												<a class="nav-link" id="subTab12" data-toggle="tab" href="#subTabContent12" role="tab"
													aria-controls="subTabContent12" aria-selected="false">  Burns Treatment<i class="fa-light fa-arrow-right"></i></a>
											</div>								
										</div>
									</div>
								</div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content" id="subTabsContent1">								
                                    <div class="tab-pane fade show active" id="subTabContent1" role="tabpanel"
                                        aria-labelledby="subTab1">
                                        <!-- Content for Sub Tab 1 of Tab 1 -->
                                       <div class="tp-services-details-wrapper">
									   <div class="tabs-content" id="tab1" style="display: block;">
										<div class="tp-services-details-main-thumb mb-30 w-img">
										   <img src="assets/img/treatment/wrinkles.jpg" alt="">
										</div>
										<h4 class="tp-services-details-title mb-20">Anti-Wrinkles Treatment</h4>
										<p>Wrinkles are the most irritating problem nowadays. Many of youngsters are suffering from it.
										Laser skin resurfacing is a proven way to help reduce wrinkles, age spots, acne scars, and other blemishes as well as tighten skin and balance tone. But precisely because lasers can do so much, and vary widely in how they act on your skin, it is hard to know where to start when researching treatment—even the most perfunctory search reveals a slew of competing devices and methods.
										</p>
										<h5>Benefits of non-surgical anti-wrinkle treatment can include:</h5>
										<div class="tp-about-list mb-30">
										  <ul>
											   <li><i class="fa-solid fa-circle-check"></i> NDIS and bushfire and emergency support</li>
											   <li><i class="fa-solid fa-circle-check"></i> Compliance and Enforcement actions</li>
											   <li><i class="fa-solid fa-circle-check"></i> Becoming a registered provider Today</li>
										   </ul>
										</div>
										<h5>There are various types of injection available to reduce the appearance of fine lines and wrinkles, however the most common procedures include:</h5>
										<div class="tp-about-list mb-30">
										  <ul>
											    <li style="display: inline-block;"><i class="fa-solid fa-circle"></i><strong> Muscle Relaxants (botox)</strong> - Muscle relaxing injections use the botulinum toxin to block nerve impulses which cause muscle contraction. This temporary treatment is very popular as relaxants block the nerve impulses that cause muscle contraction providing the appearance of smoother skin.</li>
											    <li style="display: inline-block;"><i class="fa-solid fa-circle"></i><strong> Dermal Fillers</strong> - Fillers work by plumping out wrinkles and laughter lines in the face. Fillers are a non-surgical treatment frequently used for smile lines.<br><br>
												We are one of the best cosmetic centers in Bathinda for your wrinkle treatment. We provide best treatment for all your skin problems.</li>
											 
										   </ul>
										</div>
									
									  
									   </div>
									  <div class="tabs-content" id="tab2">
										<h4 class="tp-services-details-title mb-20">Tab 2 Content</h4>
									   <div class="tp-services-details-main-thumb mb-30 w-img">
										   <img src="assets/img/treatment/Warts.jpg" alt="">
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
										
									   </div>
									  <div class="tabs-content" id="tab3">
										<h4 class="tp-services-details-title mb-20">Tab 3 Content</h4>
									   <div class="tp-services-details-main-thumb mb-30 w-img">
										   <img src="assets/img/video/video-thumb-1.jpg" alt="">
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
							<div class="tab-pane fade" id="subTabContent2" role="tabpanel" aria-labelledby="subTab2">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/Warts.jpg" alt="">
								   <h4 class="tp-services-details-title mb-20">Laser Treatment For Warts</h4>
										<p>Most of us have had a wart on a part of our body at some time in our lives. Warts are one of the most common infections caused by a microscopic virus that infects the skin.Most warts are harmless and can disappear on their own without a warts removal treatment. However, warts on parts of the body that are bumped or touched frequently can be painful and cause bleeding. Warts can also be embarrassing if they occur on the face or appear in noticeable clusters on the hands and feet.
										</p>
										<p>
										Warts removal is a safe, effective and relatively painless procedure that can be used on even the most sensitive body parts. Laser warts removal can also be used to prevent warts from reoccurring.
										</p>
										<p>
										Laser warts removal involves targeting the wart with a laser; the laser passes through the upper layer of the skin called the epidermis and targets the tiny blood vessels that feed the wart near the dermis, the middle layer of skin. Laser warts removal kills the blood vessels feeding the wart, effectively starving it until it dries up and falls off. The laser kills only the wart infected area and leaves the surrounding tissue unharmed and undamaged.
										</p>
								</div>
							</div>
							
							<div class="tab-pane fade" id="subTabContent3" role="tabpanel" aria-labelledby="subTab3">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/depigmentation.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">De-Pigmentation</h4>
										<p>In patients with vitiligo, sometimes the greatest part of the skin has already lost its melanocytes. The remaining pigmented patches can be removed by using strong bleaching creams, but many adverse events have been reported with this treatment. A new depigmentation therapy could be treatment with a Fluby laser.
										</p>
										<p>
										Before treatment, the patients filled out a questionnaire about their vitiligo history. Eight patients with remaining pigmentation of the arms, hands, and face were treated once with a Ruby laser. Patients were monitored for developing regimentation during the 9 months after treatment.
										</p>
										<p>
										We are providing this treatment with successful results. We are At Dr. Nagpal cosmetic centre providing this treatment under proper guidance of skin specialist Dr. T.S. Nagpal.
										</p>
								</div>
							</div>
							
							<div class="tab-pane fade" id="subTabContent4" role="tabpanel" aria-labelledby="subTab4">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/keloid.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Keloid Treatment</h4>
								   <h5>What is a Keloid scar?</h5>
										<p>Keloids (keloidal scar) are expansion or overgrowth of fibrous scar tissue extended beyond the spot of an original wound. Keloids often form within a scar tissue caused by burns, surgical incision, chemical injuries, insect bite, pimples, scratch, wounds, accidents, body piercing and acne. Usually keloids occur at the site of an injury but sometimes it appears suddenly on the skin.

										Keloids can be very resistant to treatment. Treatment options can involve any of the following
										<div class="tp-about-list mb-30">
										  <ul>
											    <li><i class="fa-solid fa-circle"></i>Steroid treatment</li>
											    <li><i class="fa-solid fa-circle"></i>Excision</li>
											    <li><i class="fa-solid fa-circle"></i>Radiation</li>
											 
										   </ul>
										</div>
									
										</p>
										<p>
										Treating keloids from a very initial stage onwards is very important to forbid the growth of keloids into a more complicated case. But a complete solution to keloids is still a miracle to modern science.
										</p>
										<p>
										At Dr. nagpal Hospital we are providing best keloids laser treatment. We have a qualified skin specialist for this treatment.
										</p>
								</div>
							</div>
							<div class="tab-pane fade" id="subTabContent5" role="tabpanel" aria-labelledby="subTab5">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/mole.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Mole Removal</h4>
								 
										<p>Smaller, non-cancerous moles that don’t protrude above the surface of the skin may also be removed with a laser treatment. This treatment uses intense bursts of light radiation to break down the mole cells in the skin. This method usually takes two or three treatments to remove the mole completely. While excision and cutting are the more common and recommended methods of removing moles, laser removal can be useful for harder to reach areas, such as on the face or ears, and can be helpful for removing multiple moles at the same time.

										With new advances in surgery and laser treatments most moles are easy to remove without pain and leave minimal if any scarring. We use the best techniques for mole removal surgery and laser to ensure the best outcomes possible at our cosmetic center in Bathinda. At Dr. Nagpal cosmetic center we provide best laser treatment for all type of mole removable. We are one of the best centers for all your skin treatment.										
									
										</p>									
								</div>
							</div>
							<div class="tab-pane fade" id="subTabContent6" role="tabpanel" aria-labelledby="subTab6">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/dark.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Dark Circles Removal</h4>
								 
										<p>It is the dark discoloration of the skin surrounding the eye. The skin under the eyes is thin and more transparent. Therefore, blood vessels can be seen more clearly. As skin transmits blue light better, the blood vessels under the eye give a bluish and brownish appearance. These are known as dark eye circles.
										<h5>Fractional CO2 Laser Treatment for Dark Under-Eye Circles</h5>
										<p>	Dark circles beneath the eyes can make you appear old and tired. You may have tried all kinds of creams and treatments in hopes that lightening the skin beneath your eyes would eliminate your dark circles. Unfortunately, dark circles beneath the eyes aren’t caused by the color of the skin, but by blood vessels that become more visible as the skin thins with age. Through the use of the Fractional CO2 laser treatment for dark circles, you can reveal a more youthful and rested you!
										<br>										
									We are providing this advanced treatment for dark circle removable in Bathinda.
										</p>									
								</div>
							</div>
							
							<div class="tab-pane fade" id="subTabContent7" role="tabpanel" aria-labelledby="subTab7">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/resurfacing.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Skin Re-Surfacing</h4>
									<h5>What Is Laser Skin Resurfacing?</h5>
										<p>Laser skin resurfacing is a popular cosmetic procedure that can help rejuvenate the skin and reduce the effects of the sun, aging, and some facial skin disorders. Treatments are safe, effective, and convenient. Also, the cost of cosmetic laser skin resurfacing is minimal compared to many other treatment options. Cosmetic laser skin resurfacing is a method for diminishing the appearance of imperfections on the skin’s surface. During the laser skin resurfacing procedure a laser is used to dissolve the molecular bonds of the damaged skin cells layer by layer until a smoother, more uniform skin appearance is achieved. We are best laser cosmetic center in bathinda which provides laser skin re-surfacing.
										
										<h5>Techniques Used</h5>
										<p>	DFractional CO2 - Fractional CO2 renews the skin’s surface, giving you a refreshed, youthful glow and a feeling of renewed confidence.....<a href="demo1.php#subTabContent41" style="color:blue">Read More </a>
										</p>									
								</div>
							</div>
							<div class="tab-pane fade" id="subTabContent8" role="tabpanel" aria-labelledby="subTab8">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/Acne.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Acne Scar Treatment</h4>
								 
										<p>Acne scars our beauty permanently. Acne is a common problem suffered by many people mostly in their teenage and early adult life. Laser treatment for scar removal is one of the best and most effective methods of scar reduction.The treatment requires only half an hour of sitting during which the laser is focused deep in the skin to remove the scars from inside out. It’s only temporary side effects like redness or irritation go away to show a scar free skin again. During the treatment, short pulses of micro fine laser are targeted to reach deep into the skin’s sub-layers, removing scars and old damaged skin to support a building of new tissue, collagen and elastin. The new skin tissue matches the surrounding skin to remove visible scars and pigmentation. Laser acne treatment is quick, non-invasive with little or no downtime and excellent scar removal outcomes.Dr. Nagpal cosmetic center providing best acne scars laser treatment in Bathinda.
										</p>									
								</div>
							</div>
							
							<div class="tab-pane fade" id="subTabContent9" role="tabpanel" aria-labelledby="subTab9">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/tatoo.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Permanent Tattoo Removal</h4>
								 
										<p>Laser tattoo removal is an advanced treatment designed to completely eliminate tattoos, without leaving scars or unpigmented areas of skin behind. The laser can remove even the most stubborn tattoos containing very dark lines and stubborn blue and green inks. It uses powerful laser light pulses to shatter underlying inks into microscopic particles that the immune system can naturally remove from the body.
										
										<p>	Some people say that the procedure feels similar to getting a tattoo, but for a much shorter duration. Cooling anesthetic can also be provided to reduce discomfort. Unlike other tattoo removal methods, laser method is safe and will not burn or damage your skin.
										<p>	The advanced laser directs quick impulses of light directly into the color of the tattoo, breaking down the ink and pigment into much smaller particles, which are naturally removed through the body’s lymphatic system.
										</p>									
								</div>
							</div>
							
							<div class="tab-pane fade" id="subTabContent10" role="tabpanel" aria-labelledby="subTab10">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/scar.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Acne Scar Treatment</h4>
								 
										<p>Acne scars our beauty permanently. Acne is a common problem suffered by many people mostly in their teenage and early adult life. Laser treatment for scar removal is one of the best and most effective methods of scar reduction.The treatment requires only half an hour of sitting during which the laser is focused deep in the skin to remove the scars from inside out. It’s only temporary side effects like redness or irritation go away to show a scar free skin again. During the treatment, short pulses of micro fine laser are targeted to reach deep into the skin’s sub-layers, removing scars and old damaged skin to support a building of new tissue, collagen and elastin. The new skin tissue matches the surrounding skin to remove visible scars and pigmentation. Laser acne treatment is quick, non-invasive with little or no downtime and excellent scar removal outcomes.Dr. Nagpal cosmetic center providing best acne scars laser treatment in Bathinda.
										</p>									
								</div>
							</div>
							<div class="tab-pane fade" id="subTabContent11" role="tabpanel" aria-labelledby="subTab11">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/xanthesma.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Xanthelasma Removal</h4>
									<h5>What is Xanthelasma?</h5>
										<p>Xanthelasma removal is the treatment of yellow cholesterol deposits found under the eyes. Modern Xanthelasma treatment uses laser or radio frequency. The removal of xanthelasma can be performed in a number of ways;
										</p>	
										<p>Surgical excision – direct surgical excision is a viable method of removal, however, it tends to leave scars. Furthermore, due to the recurrent nature of xanthelasma, further surgical resections may be required. As there is a finite amount of skin that can be excised without causing problems, the number of surgeries performed may be limited.
										Resurfacing with an Erbium or Carbon dioxide laser – these lasers can be used to ablate (vapourise) xanthelasma.
										without causing much heat energy transfer to the surrounding skin. This is more suitable for larger xanthelasma lesions
										</p>
										<p>Dr. Nagpal Cosmetic Laser Center doctors are experts in modern, non-surgical solutions to Xanthelasma. All Treatment is offered at our center.
										</p>
								</div>
							</div>
							<div class="tab-pane fade" id="subTabContent12" role="tabpanel" aria-labelledby="subTab12">
								<!-- Content for Sub Tab 2 of Tab 1 -->
								<div class="tp-services-details-main-thumb mb-30 w-img">
								   <img src="assets/img/treatment/burns.jpg" alt="">
								   
								   <h4 class="tp-services-details-title mb-20 mt-20">Burns Treatment</h4>
									<h5>Diagnosis</h5>
										<p>Burns are complex skin problems that require high levels of care and expertise. Each specific burn case is assessed with great detail in order to determine the laser treatment that is most appropriate for your needs. Fractional resurfacing laser treatments can be used to improve a variety of skin conditions. To improve burns, the laser creates thousands of tiny microthermal zones deep in the skin. The skin then starts to repair itself by pushing out the old, damaged skin and replacing it with new, fresh skin. Each treatment stimulates the regeneration of deeper collagen and elastin tissue, while resurfacing about 20% of the skin’s surface. Your body’s own natural healing process accelerates the production of new collagen and healthy skin cells. We are best cosmetic center which provide burns laser treatment in Bathinda pioneer with sophisticated technology.
										</p>	
									
								</div>
							</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-addInfo" role="tabpanel" aria-labelledby="nav-addInfo-tab">
						<div class="row">
							<div class="col-md-4">
								<div class="tp-services-details-wrap mb-40">
									<div class="tp-services-details-services mb-50">
										<div class="tp-services-details-services-wrap">
											<div class="nav flex-column" id="subTabs2" role="tablist">
												<a class="nav-link active" id="subTab31" data-toggle="tab" href="#subTabContent31" role="tab"
													aria-controls="subTabContent31" aria-selected="true">Helios 2<i class="fa-light fa-arrow-right"></i></a>
												<a class="nav-link" id="subTab41" data-toggle="tab" href="#subTabContent41" role="tab"
													aria-controls="subTabContent41" aria-selected="false">Fractional CO2<i class="fa-light fa-arrow-right"></i></a>
												<a class="nav-link" id="subTab51" data-toggle="tab" href="#subTabContent51" role="tab"
													aria-controls="subTabContent51" aria-selected="false">HIFU<i class="fa-light fa-arrow-right"></i></a>
												<a class="nav-link" id="subTab61" data-toggle="tab" href="#subTabContent61" role="tab"
													aria-controls="subTabContent61" aria-selected="false">IPL<i class="fa-light fa-arrow-right"></i></a>
												<a class="nav-link" id="subTab71" data-toggle="tab" href="#subTabContent71" role="tab"
													aria-controls="subTabContent71" aria-selected="false">Diode<i class="fa-light fa-arrow-right"></i></a>
												<a class="nav-link" id="subTab82" data-toggle="tab" href="#subTabContent82" role="tab"
													aria-controls="subTabContent82" aria-selected="false">Yag Laser<i class="fa-light fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="tab-content" id="subTabContent">
									<div class="tab-pane fade show active" id="subTabContent31" role="tabpanel" aria-labelledby="subTab31">
										<!-- Content for Sub Tab 1 of Tab 2 -->
										<p style="margin-top:30px">Advance solution for all your skin & hair problems HELIOS II first time in Punjab. Now you can remove years from your appearance.
										The HELIOS II laser represents a new standard for the treatment of pigmented lesions. The HELIOS II is an Nd: YAG Q-Switch fractional laser.Nd:YAG is short for neodymium-doped yttrium garnet. The HELIOS II targets chromospheres or melanin and is used extensively to target pigment and pigmented lesions in the skin. Since its debut, HELIOS II has set a new benchmark for all Q-Switch Nd:YAG lasers with its patented technologies. The Helios II is the latest, upgraded Q-switch Nd-Yag laser from Laseroptek. Helios II is able to selectively destroy melanin deep inside the dermis to effectively treat severe pigmentation such as ABNOM 9 Acquired Bilateral Naevus- Of- Ota like Macule), freckles, and blemishes from trauma or acne without damaging tissues by shortening laser exposure on the skin.</p>
								  
										<h3>Technology</h3>
										<p>HELIOS II system is a Frequency doubled Q-switched Nd:YAG with a Free-Running Pulse Mode.
										Its innovative and unique Micro fractional Hand Piece which contains a Diffractive Optical Element "DOE" (patented) allows, among others, procedures for toning the skin through micro-columns without generating heat and consequently prevents the formation of pigmentary disorders characteristic of other Nd : YAG lasers which applies treatment techniques using high doses of energy. It is extremely versatile and you can select two pulse types, Q-switched or free-running.

										At our cosmetic laser centre we are providing best treatments in bathinda.We have advanced machines and qualified doctors at our hospital. Apart from this we have years of experience in skin care. Book an appointment now and look beautiful as you want.</p>
										<h3>We are Offering </h3>
										<div class="tp-about-list mb-30">								
											<ul>
											   <li><i class="fa-solid fa-circle-check"></i>Reduction of pigmentation & black spots</li>
											   <li><i class="fa-solid fa-circle-check"></i>Dark circles & puffy eyes reduction</li>
											   <li><i class="fa-solid fa-circle-check"></i>Skin tightening & rejuvenation</li>
											   <li><i class="fa-solid fa-circle-check"></i>Fine hair reduction</li>
											   <li><i class="fa-solid fa-circle-check"></i>Tattoo removal</li>
											   <li><i class="fa-solid fa-circle-check"></i>Acne ( pimples) / acne scars</li>
											   <li><i class="fa-solid fa-circle-check"></i>Dark lips/ sun spots Rx</li>
											   <li><i class="fa-solid fa-circle-check"></i>Instant skin glow</li>
											   <li><i class="fa-solid fa-circle-check"></i>Melasma</li>
											   <li><i class="fa-solid fa-circle-check"></i>Freckles Rx</li>
											   <li><i class="fa-solid fa-circle-check"></i>Open pores reduction</li>
											   <li><i class="fa-solid fa-circle-check"></i>Mole & nerves of ota Rx</li>
											</ul>
										</div>
									</div>
									<div class="tab-pane fade" id="subTabContent41" role="tabpanel" aria-labelledby="subTab41">
										<!-- Content for Sub Tab 2 of Tab 2 -->
									  <div class="tp-services-details-main-thumb mb-30 w-img">
									   <img src="assets/img/treatment/fractionaltr.jpg" alt="">
										<p style="margin-top:20px">The term fractional CO2 laser resurfacing actually refers to two different types of laser skin resurfacing procedures, ablative and non-ablative. Both treatments are highly effective anti-aging procedures, and they can be used to correct mild to severe skin problems ranging from dark spots to deep wrinkles. Fractional CO2 renews the skin’s surface, giving you a refreshed, youthful glow and a feeling of renewed confidence.
										</p>	
										<h3>Technology</h3>
										<p>Using the latest laser technologies and applications, ablative and non-ablative skin resurfacing can deliver dramatic results</p>
										<p>Improvements and treatment to the deeper portions of the skin is possible unlike traditional laser technologies with only superficial benefits. It is therefore able to stimulate the formation of new collagen in the deeper layers resulting in deeper rejuvenation effects and treat stubborn skin conditions (such as deep scars and pigmentation) that were impossible with traditional non-ablative technologies. Most excitingly, immediate tightening of treated skin can be observed immediately after one session.

										Other benefits include improvements in skin texture and pigmentation. It can smoothen and even out skin imperfections and reduce pore size in the long run. It can even be effective on actinic keratoses (pre-cancerous cells that may be invisible to the naked eye), rendering it an effective way to prevent formation of these cancerous lesions on the predisposed individual.</p>
										<h5>Benifits </h5>
										<div class="tp-about-list mb-30">								
											<ul>
											   <li><i class="fa-solid fa-circle-check"></i>Reduction of pigmentation</li>
											   <li><i class="fa-solid fa-circle-check"></i>Skin smoothing & rejuvenation</li>
											   <li><i class="fa-solid fa-circle-check"></i>Anti wrinkle Rx</li>
											   <li><i class="fa-solid fa-circle-check"></i>Skin resurfacing</li>
											   <li><i class="fa-solid fa-circle-check"></i>Acne or surgical scars</li>
											   <li><i class="fa-solid fa-circle-check"></i>Anti tanning Rx</li>
											   <li><i class="fa-solid fa-circle-check"></i>Burn scars & keloid Rx</li>						
											</ul>
										</div>
									</div>
									</div>
									<div class="tab-pane fade" id="subTabContent51" role="tabpanel" aria-labelledby="subTab51">
										<!-- Content for Sub Tab 2 of Tab 2 -->
									  <div class="tp-services-details-main-thumb mb-30 w-img">
										<img src="assets/img/treatment/depigmentation.jpg" alt="">
										<p style="margin-top:20px">High-intensity focused ultrasound (HIFU) lifts and tightens skin for a non-surgical face lift and neck lift. Since its release in 2012, Ulthera (Ultherapy) has been quickly growing in popularity with experts worldwide as an advanced HIFU device.

										Ulthera or Ultherapy is one of the most popular and highly developed systems available. Non-invasive ultrasound energy generates low levels of heat in the targeted skin. This stimulates the cells for collagen production and tissue rejuvenation.</p>
										<p>With just one treatment, HIFU pushes mature skin to start working hard again</p>
										<h5>TECHNOLOGY </h5>
										<div class="tp-about-list mb-30">								
										<p>High-intensity focused ultrasound (HIFU) lifts and tightens skin for a non-surgical face lift and neck lift. Since its release in 2012, Ulthera (Ultherapy) has been quickly growing in popularity with experts worldwide as an advanced HIFU device. Ulthera or Ultherapy is one of the most popular and highly developed systems available. Non-invasive ultrasound energy generates low levels of heat in the targeted skin. This stimulates the cells for collagen production and tissue rejuvenation. With just one treatment, HIFU pushes mature skin to start working hard again.</p>
										<h5>Advantages of HIFU : </h5>
										<div class="tp-about-list mb-30">								
											<ul>
											   <li><i class="fa-solid fa-circle-check"></i>Reduction of pigmentation</li>
											   <li><i class="fa-solid fa-circle-check"></i>Skin smoothing & rejuvenation</li>
											   <li><i class="fa-solid fa-circle-check"></i>Anti wrinkle Rx</li>
											   <li><i class="fa-solid fa-circle-check"></i>Skin resurfacing</li>
											   <li><i class="fa-solid fa-circle-check"></i>Acne or surgical scars</li>
											   <li><i class="fa-solid fa-circle-check"></i>Anti tanning Rx</li>
											   <li><i class="fa-solid fa-circle-check"></i>Burn scars & keloid Rx</li>						
											</ul>
										</div>
										<h5>Skin Tightening </h5>
										<p>High Intensity Focused Ultrasound (HIFU) directly delivers heat energy to skin and subcutaneous tissue that can stimulate and renew the skin's collagen and thus consequently improving the texture and reducing sagging of the skin. It literally achieves the results of a facelift or a body lifts without any invasive surgery or injections, moreover, an added bonus of this procedure is that there is no downtime.

										This technique can be applied to the face as well as the whole body, and also, it works equally well for people of all skin colors, in contrast to that of lasers and the intense pulse lights.</p>
										</div>
									</div>
									</div>
									<div class="tab-pane fade" id="subTabContent61" role="tabpanel" aria-labelledby="subTab61">
										<!-- Content for Sub Tab 2 of Tab 2 -->
									  <div class="tp-services-details-main-thumb mb-30 w-img">
										<img src="assets/img/treatment/ipl.jpg" alt="">
										<p style="margin-top:20px">IPL stands for intense pulsed light, and it is a form of light therapy, used for various dermatological procedures including hair removal. As with all light based treatments, IPL works by emitting a wavelength into the skin, which in the case of hair removal targets pigment
										<h3>TECHNOLOGY</h3>
										<p>
										Hair removal has come a long way since its humble IPL beginnings. The good news is that we now have a far more effective hair removal offering available to us in the form of lasers – a growing and sophisticated area of the treatment industry, at Dr. Nagpal cosmetic center Bathinda. IPL’s are NOT lasers. The machines produce a broad spectrum of wavelengths (like a light bulb) and cannot be focused to a concentrated beam. Because a range of different wavelengths are dispersed at a variety of depths only some of these will be effective for hair reduction.</p>
										<h5>What does the procedure involve? </h5>
										<div class="tp-about-list mb-30">								
										<p>Prior to the procedure your specialist practitioner should explain the process to you and clearly define your expectations of the treatment. They should be able to tell you whether or not the results you are looking for will be achievable using this method. It is important that the correct diagnosis has been made by your doctor prior to treatment.<br>
										IPL treatments are normally straightforward. Make sure the technician has been properly trained and is experienced in IPL therapy.

										</p>										
										<div class="tp-about-list mb-30">								
											<ul>
											   <li><i class="fa-solid fa-circle-check"></i>Avoid sun exposure in the days and weeks before and after treatment.</li>
											   <li><i class="fa-solid fa-circle-check"></i>A topical anaesthetic may be applied to the area but is not usually necessary.</li>
											   <li><i class="fa-solid fa-circle-check"></i>Cold gel is applied to the area being treated. IPL devices often have integrated cooling systems.</li>
											   <li><i class="fa-solid fa-circle-check"></i>The smooth, glass surface of the IPL treatment head is applied to the skin, delivering precise pulses of light to the area being treated.</li>
											   <li><i class="fa-solid fa-circle-check"></i>Treatment sessions usually last about 20 minutes. A course of 4-6 sessions every 3-6 weeks may be needed to achieve desired results.</li>
											   <li><i class="fa-solid fa-circle-check"></i>Most patients can return to work immediately after treatment.</li>											 
											</ul>
										</div>
										
										
										</div>
									</div>
									</div>
									
									<div class="tab-pane fade" id="subTabContent71" role="tabpanel" aria-labelledby="subTab71">
										<!-- Content for Sub Tab 2 of Tab 2 -->
									  <div class="tp-services-details-main-thumb mb-30 w-img">
										<img src="assets/img/treatment/diode.jpg" alt="">
										<h3 style="margin-top:15px">What Are Diode Lasers?</h3>
										<p style="margin-top:20px">A diode laser uses semiconductor technology that produces coherent projection of light in the visible to infrared range. It uses a light beam with a narrow spectrum to target specific chromophores in the skin. Compared to other laser systems such as the Ruby and Alexandrite, the 800nm diode laser wavelength offers the deepest penetration levels and superior melanin absorption. These unique characteristics make the diode laser the most suitable technology for laser hair removal enabling safe and effective treatment of all skin and hair types, in all body areas.
										<h3>How Does A Diode Laser Work?</h3>
										Diode lasers use the principle of selective photothermolysis (abbreviated SPTL) to target specific chromophores in the skin, usually melanin or blood. The lasers damage the chromophores by selectively heating them while leaving surrounding tissue unharmed. When treating unwanted hair, for example, the melanin in the hair follicles is targeted and damaged which results in the disruption of hair growth and regeneration. A diode laser can be complemented by cooling technology, or other pain reducing methods which improve treatment efficacy and patient comfort.</p>
										
									
									</div>
									
									
									</div>
									<div class="tab-pane fade" id="subTabContent82" role="tabpanel" aria-labelledby="subTab82">
										<!-- Content for Sub Tab 2 of Tab 2 -->
									  <div class="tp-services-details-main-thumb mb-30 w-img">
										<img src="assets/img/treatment/ndyag.jpg" alt="">
										<h3 style="margin-top:15px">What is neodynium YAG laser?</h3>
										<div class="tp-about-list mb-30">								
											<ul style="text-align: justify;">
											   <li><i class="fa-solid fa-circle-check"></i>Nd: YAG (neodymium-doped yttrium aluminium garnet) is a crystal that is used as a laser medium for solid-state lasers..</li>
											   <li><i class="fa-solid fa-circle-check"></i>The triply ionised neodymium [Nd(III)] dopant (ie a substance added in minute amounts to another pure substance to alter its conductivity), typically replaces a small fraction of the yttrium ions in the host crystal structure, since the two ions are of similar size.</li>
											   <li><i class="fa-solid fa-circle-check"></i>The neodymium ion provides the laser activity in the crystal.</li>
											   <li><i class="fa-solid fa-circle-check"></i>Nd:YAG laser has a wavelength of 1064 nm and has the capability to reach deeper layers of skin tissue than other types of lasers.</li>
											   <li><i class="fa-solid fa-circle-check"></i>In Q-switched mode, Nd:YAG produces 2 wavelengths, one in the infrared range (1064 nm) and a second beam of 532 nm wavelength which is useful for superficial skin lesions. Q-switching refers to the technique of making the laser produce a high intensity beam in very short pulses</li>
											 										 
											</ul>
										</div>
										<h3 style="margin-top:15px">How Does A Diode Laser Work?</h3>
										<p style="text-align:justify">Diode lasers use the principle of selective photothermolysis (abbreviated SPTL) to target specific chromophores in the skin, usually melanin or blood. The lasers damage the chromophores by selectively heating them while leaving surrounding tissue unharmed. When treating unwanted hair, for example, the melanin in the hair follicles is targeted and damaged which results in the disruption of hair growth and regeneration. A diode laser can be complemented by cooling technology, or other pain reducing methods which improve treatment efficacy and patient comfort.</p>
									
									</div>
									
									
									</div>
							</div>
						</div>
					</div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            </div>
</div>



</section>

<script>
    function openTab(tabName) {
        var tabs = document.querySelectorAll('.tab-content');
        tabs.forEach(function (tab) {
            tab.style.display = 'none';
        });

        var selectedTab = document.getElementById(tabName);
        if (selectedTab) {
            selectedTab.style.display = 'block';
        }
    }
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

<!-- Mirrored from template.wphix.com/ncare-prv/ncare/service-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2023 06:42:45 GMT -->
</html>