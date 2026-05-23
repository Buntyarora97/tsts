	<style>
	.tp-header-bottom-main{
		border-radius:0px !important;
	}
	.main-menu ul li .tp-submenu > li {
		border-bottom: solid 1px #ebebeb57 !important;	
	}
	body{
	  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
	}
	.main-menu ul li:not(:last-child) {
		margin-right: 11px !important;
	}
	.tp-header-3 .main-menu ul > li > a {
		padding: 23px 0;
	}
	.tp-header-exgency {
		background: #231f20 !important;
	}
	.theme-bg {
		background-color: #231f20;
	}
	.tp-header-3 .tp-header-border {
		border-bottom: 1px solid #50504F;
	}
	.tp-header-exgency {
		padding: 10px 0 40px 0;
	}
	.tp-header-exgency-call .tp-header-exgency-icon span {
		    height: 42px;
			width: 42px;
			font-size: 18px;
			line-height: 46px;
	}
	.tp-header-exgency-call .tp-header-exgency-icon span {
    height: 55px;
    width: 55px;
    line-height: 62px;
    border-radius: 50%;
    background-color: rgb(244 130 31) !important;
    display: inline-block;
    text-align: center;
    color: #231f20;
    font-size: 24px;
}
	</style>
	<style>


.social-btn {
  display: flex;
  width: 170px;
  align-items: center;
  justify-content: space-between;
  padding-left: 30px;
  padding-right: 10px;
  padding-top: 5px;
  padding-bottom: 5px;
  border: 1px;
  border-bottom-right-radius: 30px;
  border-top-right-radius: 30px;
  margin-bottom: 5px;
  position: relative;
  left: -173px;
  transition: left 1s;
}
.social-btn:hover {
  left: -130px;
  transition: left 1s;
 
}
.social {
  position: fixed;
  top: 248px;
  left: 45px;
  z-index: 100000000000 !important;
}
.social a {
  text-decoration: none;
}

.color-telegram {
  background-color: #0084c6;
}
.color-instagram {
  background-color: #f62782;
}
.color-whatsapp {
  background-color: #24cc63;
}

.google-font {
  font-family: "Lato", sans-serif;
  font-size: 1.25rem;
}

.social-btn img {
  width: 40px;
}

.social-btn p {
  color: white;

  margin-top: 0px;
  margin-bottom: 0px;
}

.icons8-telegram-app {
  order: 2;
  display: inline-block;
  width: 40px;
  height: 40px;
  background: url("assets/img/facebook-removebg-preview.png")
    50% 50% no-repeat;
  background-size: 100%;
  margin-left:100px
}

.icons8-instagram {
  order: 2;
  display: inline-block;
  width: 40px;
  height: 40px;
  background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCAxNiAxNiIKc3R5bGU9IiBmaWxsOiNmZmZmZmY7Ij48cGF0aCBkPSJNIDQuNzczNDM4IDEgQyAyLjY5NTMxMyAxIDEgMi42OTUzMTMgMSA0Ljc3MzQzOCBMIDEgMTAuMjMwNDY5IEMgMSAxMi4zMDQ2ODggMi42OTUzMTMgMTQgNC43NzM0MzggMTQgTCAxMC4yMzA0NjkgMTQgQyAxMi4zMDQ2ODggMTQgMTQgMTIuMzA0Njg4IDE0IDEwLjIyNjU2MyBMIDE0IDQuNzczNDM4IEMgMTQgMi42OTUzMTMgMTIuMzA0Njg4IDEgMTAuMjI2NTYzIDEgWiBNIDQuNzczNDM4IDIgTCAxMC4yMjY1NjMgMiBDIDExLjc2NTYyNSAyIDEzIDMuMjM0Mzc1IDEzIDQuNzczNDM4IEwgMTMgMTAuMjI2NTYzIEMgMTMgMTEuNzY1NjI1IDExLjc2NTYyNSAxMyAxMC4yMzA0NjkgMTMgTCA0Ljc3MzQzOCAxMyBDIDMuMjM0Mzc1IDEzIDIgMTEuNzY1NjI1IDIgMTAuMjMwNDY5IEwgMiA0Ljc3MzQzOCBDIDIgMy4yMzQzNzUgMy4yMzQzNzUgMiA0Ljc3MzQzOCAyIFogTSAxMS41IDMgQyAxMS4yMjI2NTYgMyAxMSAzLjIyMjY1NiAxMSAzLjUgQyAxMSAzLjc3NzM0NCAxMS4yMjI2NTYgNCAxMS41IDQgQyAxMS43NzczNDQgNCAxMiAzLjc3NzM0NCAxMiAzLjUgQyAxMiAzLjIyMjY1NiAxMS43NzczNDQgMyAxMS41IDMgWiBNIDcuNSA0IEMgNS41NzQyMTkgNCA0IDUuNTc0MjE5IDQgNy41IEMgNCA5LjQyNTc4MSA1LjU3NDIxOSAxMSA3LjUgMTEgQyA5LjQyNTc4MSAxMSAxMSA5LjQyNTc4MSAxMSA3LjUgQyAxMSA1LjU3NDIxOSA5LjQyNTc4MSA0IDcuNSA0IFogTSA3LjUgNSBDIDguODg2NzE5IDUgMTAgNi4xMTMyODEgMTAgNy41IEMgMTAgOC44ODY3MTkgOC44ODY3MTkgMTAgNy41IDEwIEMgNi4xMTMyODEgMTAgNSA4Ljg4NjcxOSA1IDcuNSBDIDUgNi4xMTMyODEgNi4xMTMyODEgNSA3LjUgNSBaIj48L3BhdGg+PC9zdmc+")
    50% 50% no-repeat;
  background-size: 100%;
  margin-left:100px
}

.icons8-whatsapp {
  order: 2;
  display: inline-block;
  width: 20px;
  height: 40px;
  background: url("assets/img/google-icon-removebg-preview.png")
  50% 50% no-repeat;
  background-size: 100%;
  margin-left:100px
}
.tp-header-top {
    padding: 0px 0 0px 0 !important;
}
.topbar .content {
    width: 100%;
    overflow: hidden;   
    animation: scrollText 17s linear infinite;
}
@keyframes scrollText {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
.main-content {
    margin-top: 30px; /* Adjust this margin to avoid content overlapping */
}
.tp-header-logo{
	text-align: center;
    display: table-cell;
    vertical-align: middle;
    float: left;
    height: 120px;
    line-height: 125px;
    position: absolute;
    top: 0;
    z-index: 111;
    background-color: #f4821f;
    padding: 0 0px;
}
</style>
      <!-- header area start -->
      <header>
         <div class="tp-header-area tp-header-3">
            <div class="tp-header-border">
               <div class="tp-header-top theme-bg d-none d-lg-block">
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-12 col-lg-5">
                           <div class="tp-header-top-social text-md-end">                              
								<div class="topbar">
									<div class="content">
										<p style="margin-top: 11px;line-height:14px;color:#e4e4e4;margin-bottom:11px">This is the scrolling content. Scroll to see more text.</p>
									</div>
								</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-header-exgency theme-bg">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-3 col-6">
                        <div class="tp-header-logo">
                           <a href="index.php"><img src="assets/img/logo/logonew.png" alt="logo"></a>
                        </div>
                     </div>
					 <div class="col-xl-3 col-6">
                    
                     </div>
                     <div class="col-xl-3 d-none d-xl-block">
                        <div class="tp-header-exgency-wrap d-flex align-items-center ml-70" style="margin-left: 63px;">                          
                           <div class="tp-header-exgency-item d-flex align-items-center">						   
                              <div class="tp-header-exgency-icon">
                                 <span style="height: 42px; width: 42px;line-height: 45px; border-radius: 50%;
								background-color: rgb(244 130 31);  display: inline-block;text-align: center;   color: var(--tp-common-white);font-size: 18px;"><img src="assets/img/map.png" style="    width: 40px;"></span>
                              </div>
                              <div class="tp-header-exgency-content"> 														  
                                 <a href="https://template.wphix.com/cdn-cgi/l/email-protection#b4dad1d1d0dcd1d8c4f4d7dbd9c4d5dacd9ad7dbd9"><span class="__cf_email__" data-cfemail="b5dbd0d0d1ddd0d9c5f5d6dad8c5d4dbcc9bd6dad8">Mall Road,Bathinda</span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                    <div class="col-xl-3 col-6">
                        <div class="tp-header-exgency-call d-none d-xl-block">
                           <div class="tp-header-exgency-item d-flex align-items-center justify-content-lg-end">
                              <div class="tp-header-exgency-icon">
                                 <span><i class="fa-solid fa-phone-volume"></i></span>
                              </div>
                              <div class="tp-header-exgency-content">                               
                                 <a href="tel:+91 99140 32355">+91 99140 32355</a>
                              </div>
                           </div>
                        </div>
                        <div class="offcanvas-btn text-end d-xl-none ml-30">
                           <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-header-bottom d-none d-xl-block">
               <div class="container-fluid" style="padding:0px !important;">
                  <div class="tp-header-bottom-main">
                     <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                           <div class="tp-header-2-main d-flex align-items-center justify-content-xl-between justify-content-end">
                              <div class="main-menu d-none d-xl-block">
                                 <nav id="mobile-menu" class="tp-main-menu-content">
                                    <ul>
                                       <li class="has-dropdown tp-header-box"><a href="index.php">Home</a>
                                       </li>
                                       <li class="has-dropdown">
                                          <a href="about.php">About Us</a>
                                       </li>
									   <li class="has-dropdown">
                                          <a href="service.php">Hair Treatment</a>
                                          <ul class="tp-submenu" style="width: 260px;">
                                             <li><a href="service.php">Hair Removal Treatment</a></li>
                                             <li><a href="service-details.php"> Permanent Hair Removal</a></li>
                                          </ul>
                                       </li> 
									   <li class="has-dropdown">
                                          <a href="service.php">Skin Care</a>
                                          <ul class="tp-submenu" style="width: 249px;">
                                             <li><a href="service.php">Wrinkles Treatment</a></li>
                                             <li><a href="service-details.php">Warts Removal</a></li>
                                             <li><a href="service-details.php">De-Pigmentation Treatment</a></li>
                                             <li><a href="service-details.php">Keloid Treatment</a></li>
                                             <li><a href="service-details.php">Dark Circle Removal</a></li>
                                             <li><a href="service-details.php">Skin Re-surfacing </a></li>
                                             <li><a href="service-details.php">Acne Star Treatment </a></li>
                                             <li><a href="service-details.php">Tattoo Removal</a></li>
                                             <li><a href="service-details.php">Scar Treatment</a></li>
                                             <li><a href="service-details.php">Xanthelasma Treatment</a></li>
                                             <li><a href="service-details.php">Burns Treatment</a></li>
                                          </ul>
                                       </li>
									    <li class="has-dropdown">
                                          <a href="service.php">Technologies</a>
                                          <ul class="tp-submenu">
                                             <li><a href="service.php">Helios 2</a></li>
                                             <li><a href="service-details.php">Fractional CO2</a></li>
                                             <li><a href="service-details.php">Hifu</a></li>
                                             <li><a href="service-details.php">IPL</a></li>
                                             <li><a href="service-details.php">Diode Laser</a></li>
                                             <li><a href="service-details.php">Yag Laser</a></li>
                                          </ul>
                                       </li> 
                                       <li class="has-dropdown">
                                          <a href="service.php">Service</a>
                                          <ul class="tp-submenu">
                                             <li><a href="service.php">Services</a></li>
                                             <li><a href="service-details.php">Services Details</a></li>
                                          </ul>
                                       </li>  
									   <li class="has-dropdown">
                                          <a href="about.php">Varicose Veins</a>
                                       </li>
									   <li class="has-dropdown">
                                          <a href="about.php">Media</a>
                                       </li>									  
                                       <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                 </nav>
                              </div>
                            
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- header-sticky-area -->
      <div id="header-sticky" class="tp-header-sticky theme-bg-2">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div  class="tp-header-bottom ">
                     <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-4 col-md-3 col-8">
                           <div class="logo">
                              <a href="index.php">
                                 <img data-width="115" src="assets/img/logo/logo2.png" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="col-xl-10 col-lg-8 col-md-9 col-4">
                           <div class="tp-header-2-main d-flex align-items-center justify-content-xl-between justify-content-end">
                              <div class="main-menu d-none d-xl-block">
                                 <nav class="tp-main-menu-content">
                                    <ul>
                                       <li class="has-dropdown tp-header-box"><a href="index.php">Home</a>
                                       </li>
                                       <li class="has-dropdown">
                                          <a href="about.php">About Us</a>
                                       </li>
									   <li class="has-dropdown">
                                          <a href="service.php">Hair Treatment</a>
                                          <ul class="tp-submenu" style="width: 260px;">
                                             <li><a href="service.php">Hair Removal Treatment</a></li>
                                             <li><a href="service-details.php"> Permanent Hair Removal</a></li>
                                          </ul>
                                       </li> 
									   <li class="has-dropdown">
                                          <a href="service.php">Skin Care</a>
                                          <ul class="tp-submenu" style="width: 249px;">
                                             <li><a href="service.php">Wrinkles Treatment</a></li>
                                             <li><a href="service-details.php">Warts Removal</a></li>
                                             <li><a href="service-details.php">De-Pigmentation Treatment</a></li>
                                             <li><a href="service-details.php">Keloid Treatment</a></li>
                                             <li><a href="service-details.php">Dark Circle Removal</a></li>
                                             <li><a href="service-details.php">Skin Re-surfacing </a></li>
                                             <li><a href="service-details.php">Acne Star Treatment </a></li>
                                             <li><a href="service-details.php">Tattoo Removal</a></li>
                                             <li><a href="service-details.php">Scar Treatment</a></li>
                                             <li><a href="service-details.php">Xanthelasma Treatment</a></li>
                                             <li><a href="service-details.php">Burns Treatment</a></li>
                                          </ul>
                                       </li>
									    <li class="has-dropdown">
                                          <a href="service.php">Technologies</a>
                                          <ul class="tp-submenu">
                                             <li><a href="service.php">Helios 2</a></li>
                                             <li><a href="service-details.php">Fractional CO2</a></li>
                                             <li><a href="service-details.php">Hifu</a></li>
                                             <li><a href="service-details.php">IPL</a></li>
                                             <li><a href="service-details.php">Diode Laser</a></li>
                                             <li><a href="service-details.php">Yag Laser</a></li>
                                          </ul>
                                       </li> 
                                       <li class="has-dropdown">
                                          <a href="service.php">Service</a>
                                          <ul class="tp-submenu">
                                             <li><a href="service.php">Services</a></li>
                                             <li><a href="service-details.php">Services Details</a></li>
                                          </ul>
                                       </li>  
									   <li class="has-dropdown">
                                          <a href="about.php">Varicose Veins</a>
                                       </li>
									   <li class="has-dropdown">
                                          <a href="about.php">Media</a>
                                       </li>									  
                                       <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                 </nav>
                              </div>
                          
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  
	  <div class="social">
		  <a href="#">
			<div class="social-btn color-telegram">
			  <div class="icons8-telegram-app"></div>			  
			</div>
		  </a>
		  <a href="#">
			<div class="social-btn color-instagram">
			  <div class="icons8-instagram"></div>			 
			</div>
		  </a>
		  <a href="#">
			<div class="social-btn color-whatsapp">
			  <div class="icons8-whatsapp"></div>			 
			</div>
		  </a>
		</div>
      <!-- heafer-sticky-area-end -->