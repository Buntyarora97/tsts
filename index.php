<?php session_start();

function generateCaptchaCode($length = 6) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}
$newCaptcha = generateCaptchaCode();
$_SESSION["code"] = $newCaptcha;
//echo $newCaptcha;

?>
<!doctype html>
<html class="no-js" lang="zxx">
	<?php include ('inc/head.php'); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
	.tec-icon{
        width:64px;
        height:60px;
    }
	.tp-services-icon span {
		height: 63px !important;
		width: 63px !important;
		line-height: 63px;
	}
	.tp-btn-2 {
    background-color: #f4821f !important;
    color: var(--tp-common-white);
    display: inline-block;
    padding: 17px 36px;
    border: 0;
    line-height: 1;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
}
	.tp-testimonial-avatar-thumb::before, .tp-testimonial-avatar-thumb::after {
		background-color:  #f5821e;
	}
	.tp-testimonial-rating span {
		color: #f5821e;
		font-size: 14px;
	}
	.tp-project-2-button-prev span:hover, .tp-project-2-button-next span:hover {
		border-color: #f5821e;
	}
	.tp-project-2-button-prev span:hover i, .tp-project-2-button-next span:hover i {
		color:#f5821e;
	}
	.tp-testimonial-item::before {
		border:1px solid #f5821e; 
	}
	.tp-services-icon span{
		background-color: #f4821f !important;
		margin-bottom:5px !important;
	}
	.tp-team-social-wrap {
		    left: 27px;
			width:80%;
	}
	.tp-contact-form-input input, .tp-contact-form-input textarea {
		height: 44px !important ;
		margin-bottom: 13px !important ;
		border: solid 1px #d3d3d373 !important ;
		border-radius: 4px!important ;
	}
	a:link {
   
    text-decoration: none;
    background-color: transparent !important ;
}
	input::placeholder {
		font-size: 14px !important;
	}
	textarea::placeholder {
		font-size: 14px !important;
	}
	.tp-project-2-button-prev span, .tp-project-2-button-next span {
		height: 48px  !important;
		width: 48px  !important;
		line-height: 48px !important;
		border-radius: 5% !important;
	}
	.tp-services-3-item-2{
		    height: 390px !important; 
	}
	.tp-slider-active .swiper-slide-active .tp-slider-bg, .tp-slider-2-active .swiper-slide-active .tp-slider-bg, .tp-slider-3-active .swiper-slide-active .tp-slider-bg {
		transform: none !important;
	}
	.tp-slider-2-shape-1 {
		position: absolute;
		right: 0;
		top: 9% !important;
	}
	.tp-section.text-p p::before {
		display:none !important;		
	}
	.tp-section.text-p p{
		padding-left:0px !important;
		text-align:justify;
		font-weight:normal !important;
	}
	.tp-section p {
		font-size: 16px !important;
		line-height: 27px;
	}
	.tp-section-title {
		font-size: 33px !important;
	}
	#loading{
		display:none!important;
	}
	.tp-slider-bg {
		position: absolute;
		top: 0;
		left: 0;
		height: 78% !important;
	}
	.tp-slider-item {
		height: 675px !important;
	}
	.main-menu ul li:hover > .tp-submenu {
		visibility: visible;
		opacity: 1;
		transform: scale(1);
		text-align: left !important;
	}
	.tp-section span {
	      animation: spin-2 2495ms forwards infinite alternate;
		  transform-origin: center bottom !important;
	}
	
	
	</style>
	<style>
		.tp-product-details-tab-nav .nav-tabs .nav-link.active, .tp-product-details-tab-nav .nav-tabs .nav-link:hover{
			background: #f4821f !important;
			color: white !important;
			padding: 10px;
		}
		.tp-services-3-content {
			position: absolute;
			bottom: -20px;
			left: 36px;
			right: 36px;
			border-radius: 7px;
			opacity: 0.89;
			background: #f4821f !important;
			box-shadow: 0px 8px 15px 0px rgba(0, 0, 0, 0.07);
			padding: 30px;
			padding-top: 0;
			text-align: center;
			opacity: 0;
			visibility: hidden;
			-webkit-transition: all 0.3s 0s ease-out;
			-moz-transition: all 0.3s 0s ease-out;
			-ms-transition: all 0.3s 0s ease-out;
			-o-transition: all 0.3s 0s ease-out;
			transition: all 0.3s 0s ease-out;
		}
		.tp-services-3-icon span {
			color: #000000 !important;
		}
		.tp-services-3-info-icon span{
			background-color: #f4821f !important;
		}
		.tp-btn {
			display: inline-block;
			font-weight: 500;
			font-size: 16px;
			background-color: #f4821f;
			padding: 17px 42px;
			color: var(--tp-common-white);
			border: 1px solid #f4821f;
		}
		.tp-about-3-info-icon span {
			color: #f4821f;
			font-size: 56px;
		}
		.tp-about-list ul li i {
			margin-right: 5px;
			color: #f5821f;
		}
		.tp-section.text-p p::before {
			position: absolute;
			content: "";
			left: 0;
			top: 50%;
			transform: translateY(-50%);
			height: calc(100% - 18px);
			width: 2px;
			background-color: #f5821f;
		}
		.tp-section-subtitle {
			color: #f5821f;
		}
		.tp-section.fs-48.tp-section p::before {			
			background-color:#f5821f;;
		}
		.tp-footer-widget-content-list-item i {
			color: #f5821f;;
		}
		.tp-footer-copyright span {
			margin-bottom: 0;
			color: #F5821E ;
		}
		.tp-footer-social a {
			display: inline-block;
			background-color: #F5821E ;
			color:black;
		}
		.tp-footer-social a:hover {
			color: #000000;
			background-color: #ffffff;
		}
		.titl{
			  font-size: 35px !important;
		}
		.tp-slider-title {
			font-size: 50px !important;
		   
		}
		.titl{
			font-size:40px !important;
		}
        
		 @media screen and (max-width: 600px) {           
            .tp-slider-title {
                font-size: 23px !important;
            }
		.tp-slider-bg {
			position: absolute;
			top: 0;
			left: 0;
			height: 50% !important;
		}
		.tp-slider-item {
			height: 93px !important;
			padding-bottom:50px !important;
		}
		.shpe{
			height:200px !important;
		}
		.tp-slider-title {
			font-size: 20px !important;
		    line-height: 10px; 
		}
		.titl{
			  font-size: 15px !important;
			  margin-bottom:10px !important;
		}
		.tp-slider-wrap {
			margin-top:-150px !important;
		 }
		 .tp-slider-bg {		
			height: 80% !important;
		}
		.tp-btn-2 {
			padding:13px 22px !important;
			    font-size: 13px;
		}
        .tp-intro-thumb{
               margin-top: 114px !important; 
        }
        
         @media screen and (max-width: 600px){
        .social-btn:hover {
            left: 260px  !important; 
        }
        .social-btn {
           left: 300px!important;
        }
        .icons8-telegram-app {
            margin-left: -19px !important;
            width: 20px !important;
            background-size: 70% !important;
         
        }
         .icons8-instagram {
            margin-left: -19px!important;
            width: 20px !important;
           background-size: 70% !important;
         
        }
        .icons8-whatsapp {
            margin-left: -19px!important;
            width: 20px !important;
            background-size: 70% !important;
         
        }
        .social-btn {
            border-radius: 23px!important;
        }
        .icons8-telegram-app {
            height: 35px !important;
        }
        .icons8-instagram {
            height: 35px !important;
        }
        .icons8-whatsapp {
            height: 35px !important;
        }
        .abts{
            margin-top:-42px !important;
            margin-bottom:0px !important;
        }
        .teca{
            margin-top:13px !important; 
        }sheet
        .med{
            margin-bottom:10px !important;
        }
        .weare{
            margin-bottom:0px !important;
        }
        .tp-main-menu-mobile ul li {
            width: 83% !important;
         }      
	</style>

	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Lato&amp;display=swap'>
    <link rel="canonical" href="https://codepen.io/sinasoltani164/pen/gOXdgjB">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

   <body>
   
      
	 <?php include('inc/header.php'); ?>   
       
      <main>
    
         
         <!-- slider-area-start -->
          <section class="slider-area">
            <div class="swiper-container">
               <div class="tp-slider-active">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide tp-slider-item">
                        <div class="tp-slider-bg" data-background="assets/img/slider/slider1.jpg" style="    background-position: right;"></div>
                        <div class="container">
                           <div class="row">
                               <div class="col-xxl-7 col-xl-9">
                                 <div class="tp-slider-wrap">
                                    <h4 class="tp-slider-title" style="margin-bottom:10px;text-transform: none;">Best Skin/Hair Clinic </h4>
									   <span class="tp-slider-sub-title titl" style="font-size: 31px;margin-bottom:30px;text-transform: none;">in the City </span>
                                    <div class="tp-slider-btn">
                                       <a class="tp-btn-2" id="appointmentButton">Appointment</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-slider-shape">
                           <div class="tp-slider-shape-1"><img class="shpe" src="assets/img/slider/shape/slider-shape-1.png" alt="shape"style="    height: 520px;"></div>
                           <div class="tp-slider-shape-2"><img class="shpe"  src="assets/img/slider/shape/slider-shape-2.png" alt="shape"style="height: 520px;"></div>
                        </div>
                     </div>
                     <div class="swiper-slide tp-slider-item">
                        <div class="tp-slider-bg"  data-background="assets/img/slider/slider2.jpg" style="    background-position: right;"></div>
                        <div class="container">
                           <div class="row">
								<div class="col-xxl-7 col-xl-9">
                                 <div class="tp-slider-wrap">
                                    <h4 class="tp-slider-title" style="margin-bottom:10px;    text-transform: none;">World's Most Advanced  </h4>
									   <span class="tp-slider-sub-title titl" style=" text-transform: none;font-size: 31px ;margin-bottom:30px">Technologies Under One Roof</span>
                                    <div class="tp-slider-btn">
                                       <a class="tp-btn-2" id="appointmentButton">Appointment</a>
                                    </div>
                                 </div>
								</div>
                           </div>
                        </div>
                        <div class="tp-slider-shape">
                           <div class="tp-slider-shape-1"><img class="shpe"  src="assets/img/slider/shape/slider-shape-1.png" alt="shape"style="    height: 520px;"></div>
                           <div class="tp-slider-shape-2"><img class="shpe"  src="assets/img/slider/shape/slider-shape-2.png" alt="shape"style="height: 520px;"></div>
                        </div>
                     </div>
                     <div class="swiper-slide tp-slider-item">
                        <div class="tp-slider-bg"  data-background="assets/img/slider/slide3.jpg" style="height: 520px;background-position: right"> </div>
                        <div class="container">
                           <div class="row">
								<div class="col-xxl-7 col-xl-9">
                                 <div class="tp-slider-wrap">
                                    <h4 class="tp-slider-title" style="margin-bottom:10px;    text-transform: none;">Punjab's Best Cosmetologist</h4>
									   <span class="tp-slider-sub-title titl" style="font-size: 35px;margin-bottom: 12px;text-transform: none;">Award by Punjab Govt.</span><br>
                                          <span class="tp-slider-sub-title" style="font-size:15px;color:white;margin-bottom:20px">Dr. T.S. Nagpal </span>
										<div class="tp-slider-btn" style="margin-top:10px">
										   <a class="tp-btn-2" id="appointmentButton">Appointment</a>
										</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-slider-shape">
                           <div class="tp-slider-shape-1"><img class="shpe"  src="assets/img/slider/shape/slider-shape-1.png" alt="shape"style="    height: 520px;"></div>
                           <div class="tp-slider-shape-2"><img class="shpe"  src="assets/img/slider/shape/slider-shape-2.png" alt="shape"style="height: 520px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        
        
<!--        <section class="slider-section p-5">-->
<!--  <div id="imageSlider" class="carousel slide" data-bs-ride="carousel">-->
<!--    <div class="carousel-inner">-->
      <!-- Slide 1 -->
<!--      <div class="carousel-item active">-->
<!--        <img src="assets/img/About.jpg" class="d-block w-100" alt="Slide 1" style="height:500px; object-fit:cover;">-->
<!--      </div>-->
      <!-- Slide 2 -->
<!--      <div class="carousel-item">-->
<!--        <img src="assets/img/blog.jpg" class="d-block w-100" alt="Slide 2" style="height:500px; object-fit:cover;">-->
<!--      </div>-->
      <!-- Slide 3 -->
<!--      <div class="carousel-item">-->
<!--        <img src="assets/img/" class="d-block w-100" alt="Slide 3" style="height:500px; object-fit:cover;">-->
<!--      </div>-->
<!--    </div>-->

    <!-- Controls -->
<!--    <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">-->
<!--      <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--      <span class="visually-hidden">Previous</span>-->
<!--    </button>-->
<!--    <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">-->
<!--      <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--      <span class="visually-hidden">Next</span>-->
<!--    </button>-->
<!--  </div>-->
<!--</section>-->

<!-- Bootstrap CSS -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">-->
<!-- Bootstrap JS -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>-->


        
		 <style>      
			.modal-overlay {
				display: none;
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background-color: rgba(0, 0, 0, 0.7);
				z-index: 100000000000000000 !important;
				align-items: center;
				justify-content: center;
			}
			.modal-content {
				background-color: #fff;
				padding: 20px;
				max-width: 600px;
				text-align: center;
			}
			.modal-overlay {
				
			}
			.tp-intro-thumb span {
				position: absolute;
				bottom: -19px;
				left: 38px;
				height: 236px;
				width: 486px;
				background:#f5821f;
			}
		</style>
		
		<div class="modal-overlay" id="appointmentModal">			
			<div class="modal-content" style="padding:0px">
				<div class="modal-header text-center" Style="display: inline !important;">
					<a data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
					<h3 class="modal-title" style="margin-top: 13px;">Appointment Form <button id="closeAppointmentButton" style="    float: right; padding: 0px 11px;font-size:16px"><i class="fa fa-close"></i></button></h3>
				</div>						
				<hr>
				<h4>Meet our Experts</h4>
				<p>Let's Appointment With our Experts Who always Try to Solve Your Problem.	</p>	
			<?php
session_start(); // Start session at the top

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connection.php');

if (isset($_POST['btn'])) {
    if (isset($_SESSION["code"]) && $_SESSION["code"] == $_POST["captcha"]) {
        $enqnam = mysqli_real_escape_string($con, $_POST['enqnam']);
        $enqmob = mysqli_real_escape_string($con, $_POST['enqmob']);
        $enqeml = mysqli_real_escape_string($con, $_POST['enqeml']);
        $enqdat = mysqli_real_escape_string($con, $_POST['enqdat']);
        $enqmsg = mysqli_real_escape_string($con, $_POST['enqmsg']);
        $today = date("F j, Y");
        $mail_to = 'nagpalhospital@gmail.com';
        
        $subject = 'Appointment Request from ' . $enqnam;
        $body_message = "Appointment Request:\n";
        $body_message .= "Name: $enqnam\n";
        $body_message .= "Mobile: $enqmob\n";
        $body_message .= "Appointment Date: $enqdat\n";
        $body_message .= "E-mail: $enqeml\n";
        $body_message .= "Message: $enqmsg\n";

        $headers = "From: $enqeml\r\nReply-To: $enqeml\r\n";

        if (mail($mail_to, $subject, $body_message, $headers)) {
            $query = "INSERT INTO tbenq (enqnam, enqmob, enqeml, enqsub, enqmsg, enqdat, enqtyp) 
                      VALUES ('$enqnam', '$enqmob', '$enqeml', '-', '$enqmsg', '$enqdat', 'Appointment')";

            if (mysqli_query($con, $query)) {
                echo "<script>alert('Message Sent Successfully'); window.location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Database Error: " . mysqli_error($con) . "');</script>";
            }
        } else {
            echo "<script>alert('Email sending failed');</script>";
        }
    } else {
        echo "<script>alert('Wrong CAPTCHA Entered'); window.location.href = 'contact.php';</script>";
    }
}
?>

				   <form method="post" id="appointment_form" name="appointment_form" style="padding: 4px 22px;">
						<div class="row">
							<div class="col-lg-6">
								<div class="tp-contact-form-input">								
									<input type="text" name="enqnam"  placeholder="Your Name*">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="tp-contact-form-input">								
									<input type="email" name="enqeml" id="enqeml"  placeholder="Email Address*">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="tp-contact-form-input">								
									<input type="date" name="enqdat" id="enqdat" placeholder="Enter Date*" style="width: 100%;">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="tp-contact-form-input">								
									<input type="text" name="enqmob" id="enqmob" placeholder="Email Phone*">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="tp-contact-form-input">
									<textarea name="enqmsg" id="enqmsg" placeholder="Enter Your Message here" style="height: 90px !important;"></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="tp-contact-form-input">  
									<span id="captchaCode" Style="position: initial;  background: url(bj1.jpg);   padding: 9px 25px;   color: honeydew;font-size: 15px;    margin-bottom: 20px;"> <?php echo $_SESSION["code"]; ?>  </span> <button id="refreshCaptchaButton" class="btn"><i Style="font-size: 20px;" class="fa fa-refresh"></i></button>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="tp-contact-form-input">
										<input id="captcha1" name="captcha" type="text" placeholder="Enter Image Text"  class="form-control" style="border-radius: 0px">
									</div>
								</div>
							</div>
							<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
							<script>
							$(document).ready(function() {
								$("#refreshCaptchaButton").click(function(event) {
									event.preventDefault(); // Prevent the default button behavior
									$.ajax({
										url: "refreshCaptcha.php",
										type: "GET",
										success: function(newCaptcha) {
											// Update the displayed CAPTCHA code with the new one
											$("#captchaCode").text(newCaptcha);
										}
									});
								});
							});
							</script>
							<div class="tp-contact-form-submit">
								<button class="tp-btn" name="btn" style="padding: 11px 34px;margin-top:20px;margin-bottom:20px"><i class="fa-light fa-paper-plane"></i> Submit</button>
							</div>
						</div>
					</form>            
			</div>
		</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const appointmentButtons = document.querySelectorAll('.tp-btn-2'); // Select all buttons
        const appointmentModal = document.getElementById('appointmentModal');
        const closeAppointmentButton = document.getElementById('closeAppointmentButton');

        // Har button ke liye event listener lagao
        appointmentButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                appointmentModal.style.display = 'flex';
            });
        });

        // Modal close button
        closeAppointmentButton.addEventListener('click', function () {
            appointmentModal.style.display = 'none';
        });

        // Modal ko background pe click karne par close karne ka feature
        appointmentModal.addEventListener('click', function (event) {
            if (event.target === appointmentModal) {
                appointmentModal.style.display = 'none';
            }
        });
    });
</script>
        
         <section class="about-area tp-about-3 abt mt-110 " style="margin-top:-40px">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tp-about-2-wrap mb-50">
						<div class="tp-intro-thumb " style="margin-top:110px">
                           <img src="assets/img/about-us.jpg" alt="About-Us" style="border:solid 1px #d3d3d363">
                           <span ></span>                        
                        </div>
                      
                       
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="tp-about-2-wrapper weare  mb-50">
                        <div class="tp-section text-p mb-35 abts" style="margin-top: 10px;">
                          <span><img src="assets/img/skin-new1.png" alt="" style="width:60px"></span>
                           <h1 class="tp-section-title" style="font-weight:bold;margin-bottom: 10px;">WHO WE ARE</h1>
                           
                           <p>Welcome to Dr. T.S. Nagpal Cosmetic Surgery Clinic, where your journey to a more confident and beautiful you begins. Dr. T.S. Nagpal, Our esteemed cosmetic surgeon, is dedicated to enhancing your natural beauty and helping you achieve the look you've always dreamed of. Dr. T.S. Nagpal is a board-certified cosmetic surgeon with 20 years of experience. Known for their precision and expertise, Dr. T.S. Nagpal has performed countless successful treatments and  surgeries, earning the trust and admiration of patients from all walks of life. Dr. T.S. Nagpal is known for bringing the world's most advanced technologies to punjab, setting a new standard in treatment options.</p>
                        </div>
                     
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about-area-end -->
		 <!-- services-area-start -->
         <section class="services-area tp-services-3 pb-80" style="">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-section text-center" style="margin-top: 15px;margin-bottom: 25px">
                        <span><img src="assets/img/skin-new1.png" alt="" style="width:66px"></span>                        
                        <h3 class="tp-section-title">Our Departments</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="tp-services-3-item">
                        <div class="tp-services-3-thumb p-relative">
                           <div class="fix p-relative">
                              <img src="assets/img/de-skin.jpg" alt="">
                              <div class="tp-services-3-content">
                                 <div class="tp-services-3-icon">
                                   <span style="line-height: 76px;"><img src="image/laser-s1.png" style="width:50px"></span>
                                 </div>
                                 <!--<h4 class="tp-services-3-title"><a href="service-details.php">Home Aged Care</a></h4>-->
                                 <p>World's best technologies meet the best cosmetologist of Punjab under one roof </p>
                                <!-- <a class="tp-services-btn" href="service-details.php">Explore More <i class="fa-regular fa-arrow-right-long"></i></a>-->
                              </div>
                           </div>
                          <div class="tp-services-3-info">
                              <div class="tp-services-3-info-icon">
                                <span style="line-height: 66px;"><img src="image/skin-img.png" style="width:60px"></span>
                              </div>
                              <h4 class="tp-services-3-info-title">Skin clinic</h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="tp-services-3-item">
                        <div class="tp-services-3-thumb p-relative">
                           <div class="fix p-relative">
                              <img src="assets/img/de-surgery.jpg" alt="">
                              <div class="tp-services-3-content">
                                 <div class="tp-services-3-icon">
                                    <span style="line-height: 76px;"><img src="image/laser-sur-1.png" style="width:50px"></span>
                                 </div>
                                <!-- <h4 class="tp-services-3-title"><a href="service-details.php">Surgical Laser Treatments</a></h4>-->
                                 <p>All laser treatments for Piles, Hernia, Appendix & stone removals</p>
                                 <!--<a class="tp-services-btn" href="service-details.php">Explore More <i class="fa-regular fa-arrow-right-long"></i></a>-->
                              </div>
                           </div>
							<div class="tp-services-3-info">
                              <div class="tp-services-3-info-icon">
                                 <span style="line-height: 72px;"><img src="image/tec-lsr.png" style="width:53px"></span>
                              </div>
                              <h4 class="tp-services-3-info-title">Laser Surgery Clinic </h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="tp-services-3-item">
                        <div class="tp-services-3-thumb p-relative">
                           <div class="fix p-relative">
                              <img src="assets/img/de-hair.jpg" alt="">
                              <div class="tp-services-3-content">
                                 <div class="tp-services-3-icon">
                                    <span style="line-height: 76px;"><img src="image/hair-1.png" style="width:50px"></span>
                                 </div>
                                 <!--<h4 class="tp-services-3-title"><a href="service-details.php">Advanced Cosmetology </a></h4>-->
                                 <p>All Skin/Hair treatments by Punjab's best cosmetologist by advanced techniques</p>
                              
                                <!-- <a class="tp-services-btn" href="service-details.php">Explore More <i class="fa-regular fa-arrow-right-long"></i></a>-->
                              </div>
                           </div>
							<div class="tp-services-3-info">
                              <div class="tp-services-3-info-icon">
                                 <span style="line-height: 76px;"><img src="image/hairclinic.png" style="width:50px"></span>
                              </div>
                              <h4 class="tp-services-3-info-title">Hair Clinic </h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-services-3-shape-1">
               <img src="assets/img/shape/services-3-shape-1.png" alt="">
            </div>
         </section>
         <!-- services-area-end -->

		 <!-- event-area-start -->
         <section class="event-area tp-event-3-bg tp-event-2-bg cta-area tp-cta-3-bg" data-background="assets/img/slider/slider-3.jpg" style=" background-image:url('assets/img/slider/slider-3.jpg');padding-top: 19px;padding-bottom: 100px;">
            <div class="fix">
               <div class="container">
                  <div class="row align-items-end">
                     <div class="col-lg-6">
                        <div class="tp-section mb-30" style="margin-bottom: 15px;">
                           <span><img src="assets/img/skin-new1.png" alt="" style="width:50px"></span>                          
                           <h3 class="tp-section-title lastest">OUR TREATMENTS</h3>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="tp-event-2-arrow d-flex align-items-center justify-content-lg-end mb-60" style="margin-bottom: 12px;">
                           <div class="tp-event-2-button-prev">
                              <span><i class="fa-solid fa-arrow-left"></i></span>
                           </div>
                           <div class="tp-event-2-button-next ml-30">
                              <span><i class="fa-solid fa-arrow-right"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="swiper-container tp-event-3-active">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="tp-event-2">
                                   <div class="tp-event-2-thumb">
                                       <img src="assets/img/Wrinkles-Treatment.jpg" alt="Wrinkles-Treatment" style="height: 245px;">
                                       <div class="tp-event-2-date">
                                          <span>17</span>
                                          <p>April</p>
                                       </div>
                                    </div>
                                    
                                 </div>
								 <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px">
                                        <h4 class="tp-event-2-title"><a href="/wrinkles-treatment-bathinda.php">Wrinkles Treatment</a></h4>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tp-event-2">
                                    <div class="tp-event-2-thumb">
                                       <img src="assets/img/Warts-Removal.jpg" alt="Warts Treatment" style="height: 245px;">
                                       <div class="tp-event-2-date">
                                          <span>17</span>
                                          <p>April</p>
                                       </div>
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px;">
                                       <h4 class="tp-event-2-title"><a href="/warts-removal-bathinda.php">Warts Treatment</a></h4>
										
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tp-event-2">
                                   <div class="tp-event-2-thumb">
                                       <img src="assets/img/De-p.jpg" alt="De-Pigmentation" style="height: 245px;">
                                       <div class="tp-event-2-date">
                                          <span>17</span>
                                          <p>April</p>
                                       </div>
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px;">
                                       <h4 class="tp-event-2-title"><a href="/depigmentation-treatment-bathinda.php">De-Pigmentation</a></h4>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tp-event-2">
                                   <div class="tp-event-2-thumb">
                                       <img src="assets/img/Mole-Removal.jpg" alt="Mole Removal" style="height: 245px;">
                                       <div class="tp-event-2-date">
                                          <span>17</span>
                                          <p>April</p>
                                       </div>
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px;">
                                       <h4 class="tp-event-2-title"><a href="/mole-removal-bathinda.php">Mole Removal</a></h4>
                                    </div>
                                 </div>
                              </div>
							  <div class="swiper-slide">
                                 <div class="tp-event-2">
                                    <div class="tp-event-2-thumb">
                                       <img src="assets/img/Dark-Circles.jpg" alt="Dark Circle Removal" style="height: 245px;">
                                       <div class="tp-event-2-date">
                                          <span>17</span>
                                          <p>April</p>
                                       </div>
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px;">
                                       <h4 class="tp-event-2-title"><a href="/dark-circles-removal-bathinda.php">Dark Circle Removal</a></h4>

                                    </div>
                                 </div>
                              </div>
							  <div class="swiper-slide">
                                 <div class="tp-event-2">
                                    <div class="tp-event-2-thumb">
                                       <img src="assets/img/Acne-Scar.jpg" alt="Acne Treatment" style="height: 245px;">
                                       <div class="tp-event-2-date">
                                          <span>17</span>
                                          <p>April</p>
                                       </div>
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px">
                                       <h4 class="tp-event-2-title"><a href="/acne-scar-treatment-Bathinda.php">Acne Treatment</a></h4>
									
                                    </div>
                                 </div>
                              </div>
							   <div class="swiper-slide">
                                 <div class="tp-event-2">
                                    <div class="tp-event-2-thumb">
                                       <img src="assets/img/Skin-Re-Surfacing.jpg" alt="Skin Resurfacing" style="height: 245px;">
                                       <div class="tp-event-2-date">
                                          <span>17</span>
                                          <p>April</p>
                                       </div>
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px;">
                                       <h4 class="tp-event-2-title"><a href="/skin-resurfacing-bathinda.php">Skin Resurfacing</a></h4>
										
                                    </div>
                                 </div>
                              </div>
							  <div class="swiper-slide">
                                 <div class="tp-event-2">
                                    <div class="tp-event-2-thumb">
                                       <img src="assets/img/Keloid-Treatment.jpg" alt="Keloid Treatment" style="height: 245px;">
                                       <div class="tp-event-2-date">
                                          <span>17</span>
                                          <p>April</p>
                                       </div>
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px;">
                                       <h4 class="tp-event-2-title"><a href="/keloid-treatment-bathinda.php">Keloid Treatment</a></h4>
										
                                    </div>
                                 </div>
                              </div>
							  <div class="swiper-slide">
                                 <div class="tp-event-2">
                                    <div class="tp-event-2-thumb">
                                       <img src="assets/img/Scar-Treatment.jpg" alt="Scar Treatment" style="height: 245px;">
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px;">
                                       <h4 class="tp-event-2-title"><a href="/scar-treatment-bathinda.php">Scar Treatment</a></h4>
                                    </div>
                                 </div>
                              </div>
							  <div class="swiper-slide">
                                 <div class="tp-event-2">
                                    <div class="tp-event-2-thumb">
                                       <img src="assets/img/laser.jpg" alt="Laser Hair Removal" style="height: 245px;">
                                    </div>
                                    <div class="tp-event-2-content" style="padding: 12px 30px 17px 37px;">
                                       <h4 class="tp-event-2-title"><a href="/laser-hair-removal-bathinda.php">Laser Hair Removal</a></h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			 <div class="tp-cta-3-shape">
               <div class="tp-cta-3-shape-1">
                  <img src="assets/img/shape/cta-3-shape-1.png">
               </div>
               <div class="tp-cta-3-shape-2">
                  <img src="assets/img/shape/cta-3-shape-2.png">
               </div>
            </div>
         </section>
		 
		
		
		
        
		
         
			<style>
			.tp-event-2-bg:before {
				position: absolute;
				top: 0px;
				left: 0px;
				width: 100%;
				height: 100%;
				content: '';
				background: rgba(0, 0, 0, 0.9);
			}
			.lastest{
				color:white !important;
				font-size:30px !important;
			}
			.tp-event-2-date::before {
				display:none !important;
			}
			.tp-event-2-date {
				top: 0px !important;
				left: 130px !important;
				display:none !important;
			}
			.tp-event-2-thumb {
			    border: 1px solid #5c5c5c;
				height: 320px;				
			}
			.tp-event-2-content {
				text-align:center !important;
			}
			.tp-event-2-title {
				font-size: 20px !important;
			}
			.tp-event-2-thumb {
				border: 1px solid #5c5c5c;				
				padding: 17px;
			}
			.tp-event-3-active {
				margin-right: -39px;
			}
			.tp-event-2-button-prev span, .tp-event-2-button-next span {
				border: 1px solid rgb(255 255 255 / 28%) !important;
				height: 48px;
				width: 48px;
				line-height: 48px;
				border-radius:5%;
			}
			.tp-event-2-button-prev span i, .tp-event-2-button-next span i {
				color: #fff !important; 
			}
			
		 </style>
        
		
			
         <!-- services-area-start -->
         <section class="services-area tp-services-3-wrap pt-110 pb-80 mt-80" style="padding-top: 10px;margin-top:10px;padding-bottom: 65px;">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tp-section mb-30" style="margin-bottom: 0px;">
                        <span><img src="assets/img/skin-new1.png" alt="" style="width:60px"></span>
                        
                        <h3 class="tp-section-title">Technologies</h3>
						<h5 class="tp-section-subtitle">We Have</h5>
                     </div>
                  </div>
				  <div class="col-lg-6">
                     <div class="tp-event-2-arrow d-flex align-items-center justify-content-lg-end mb-60 teca" style="margin-top: 58px;margin-bottom: 15px;">
                        <div class="tp-event-2-button-prev">
                           <span style="border: 1px solid rgb(20 20 20 / 28%) !important;"><i style="color: #0c0c0c !important;" class="fa-solid fa-arrow-left"></i></span>
                        </div>
                        <div class="tp-event-2-button-next ml-30">
                           <span style="border: 1px solid rgb(20 20 20 / 28%) !important;"><i style="color: #0c0c0c !important;" class="fa-solid fa-arrow-right"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
			   <div class="swiper-container tp-event-2-active">
                        <div class="swiper-wrapper">
					<div class="swiper-slide">                 
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                           <img src="assets/img/ENEKAPRO1.jpg" alt="" style="height:250px;width:100%">
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
							<h5 class="tp-services-title"><a href="/eneka-pro.php">Eneka Pro </a></h5>
                              <p>ENEKA PRO AESTHETIC Is A High Power Diode Laser Platform With 7 Handpieces Of Different Wavelengths And Spot Sizes  </p>
							  
                              <a class="tp-services-btn" href="/eneka-pro.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/eneka-pro.php">Eneka Pro</a></h5>
                        </div>
                     </div>                  
                  </div>

                 <div class="swiper-slide">
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                           <img src="assets/img/SECRET-RF1.jpg" alt="" style="height:250px;width:100%">
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
							<h5 class="tp-services-title"><a href="/Secret-rf.php">Secret-RF</a></h5>
                              <p>Secret ,Micro Needle Fractional Rf System In The Best US FDA Approved Tecnology Skin Lifting , Tightening And Rejuvenation   </p>
							  
                              <a class="tp-services-btn" href="/Secret-rf.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/Secret-rf.php">Secret-RF</a></h5>
                        </div>
                     </div>
                  
                  </div>

                 <div class="swiper-slide">
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                           <img src="assets/img/apolloo.jpg" alt="" style="height:250px;width:100%">
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
							<h5 class="tp-services-title"><a href="/apollo-duet.php">Apollo Duet </a></h5>
                              <p>Apollo Duet is a cutting-edge facial skincare system, uniquely combining three leading cosmetic technologies </p>
							  
                              <a class="tp-services-btn" href="/apollo-duet.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/apollo-duet.php">Apollo Duet</a></h5>
                        </div>
                     </div>
                  
                  </div>


                           <div class="swiper-slide">
                 
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                          <!-- <img src="assets/img/Luminous-Light.jpg" alt="Luminous-Light" style="height:250px;width:100%">-->
                          <img src="assets/img/Sheer.jpg" alt="Luminous-Light" style="height:250px;width:100%">
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
							<h5 class="tp-services-title"><a href="/laminous-light-sheer-duet.php">Luminous LightSheer Duet </a></h5>
                              <p>The LightSheer’s dual heads enables permanent hair reduction from all areas of the body </p>
							  
                              <a class="tp-services-btn" href="/laminous-light-sheer-duet.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/laminous-light-sheer-duet.php">Luminous LightSheer Duet</a></h5>
                        </div>
                     </div>
                  
                  </div>
				   <div class="swiper-slide">
                 
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                           <img src="assets/img/HeliosIII.jpg" alt="HeliosIII" style="height:250px">
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h6 class="tp-services-title"><a href="/helios-three.php">Helios III Q-Switched Nd:YAG</a></h6>
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
                              <h5 class="tp-services-title"><a href="/helios-three.php"> Q-Switched Nd:YAG</a></h5>
                              <p>Q-switched Nd:YAG Laser is a non-ablative pigment laser that targets the excess pigment in the skin.  </p>
                              <a class="tp-services-btn" href="/helios-three.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     </div>
                 
                  </div>
				   <div class="swiper-slide">                 
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                            <img src="assets/img/Fractional-CO2.jpg" alt="Fractional-CO2" style="height:250px">
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/fractional-co2.php">Frational co2</a></h5>
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                             <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
                              <h5 class="tp-services-title"><a href="/fractional-co2.php">Frational co2</a></h5>
                              <p>Fractional CO2 laser removes damaged skin layers, addressing issues like wrinkles, fine lines, age spots, and scars.</p>
                              <a class="tp-services-btn" href="/fractional-co2.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     
                  </div>
                  </div>
				  <div class="swiper-slide">                 
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                            <img src="assets/img/HIFU-n.jpg" alt="HIFU" style="height:250px">
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/hifu.php">Hifu</a></h5>
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
                              <h5 class="tp-services-title"><a href="/hifu.php">Hifu</a></h5>
                              <p>HIFU can be used to tighten and lift sagging skin on the face and neck</p>
                              <a class="tp-services-btn" href="/hifu.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     
                  </div>
                  </div>
				   <div class="swiper-slide">                 
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                            <img src="assets/img/Hifem.jpg" alt="Hifem" style="height:250px">
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/hifem.php">Hifem Laser </a></h5>
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
                              <h5 class="tp-services-title"><a href="/hifem.php">Hifem Laser </a></h5>
                              <p>This machine uses non-invasive High-Intensity Focused electromagnetic (HIFEM) energy to stimulate muscle contractions. </p>
                              <a class="tp-services-btn" href="/hifem.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     
                  </div>
                  </div>
				  <div class="swiper-slide">                 
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                            <img src="assets/img/Hydra-facialnew.jpg" alt="Hydra-facial" style="height:250px">
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/hydrafacial.php">Hydra Facial</a></h5>
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
                              <h5 class="tp-services-title"><a href="/hydrafacial.php">Hydra Facial</a></h5>
                              <p>HydraFacial is a non-invasive skincare treatment that uses a machine to exfoliate, clean and extract , leaving it refreshed and rejuvenated</p>
                             
                              <a class="tp-services-btn" href="/hydrafacial.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     
                  </div>
                  </div>
				   <div class="swiper-slide">                 
                     <div class="tp-services-item mb-40" style="padding: 10px;border: solid 1px lightgrey;">
                        <div class="tp-services-thumb">
                            <img src="assets/img/treatment/OxyGeneo.jpg" alt="OxyGeneo" style="height:250px">
                        </div>
                        <div class="tp-services-info d-flex align-items-center" Style="bottom: -39px;">
                           <div class="tp-services-icon">
                              <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <h5 class="tp-services-title"><a href="/oxygeneo-facial.php">OxyGeneo Facial</a></h5>
                        </div>
                        <div class="tp-services-info-hover d-flex">
                           <div class="tp-services-icon">
                            <span><img src="assets/img/icon/machine1.png" class="tec-icon" alt="services-icon"></span>
                           </div>
                           <div class="tp-services-content">
                              <h5 class="tp-services-title"><a href="/oxygeneo-facial.php">OxyGeneo Facial</a></h5>
                              <p>Oxygeneo delivers superior skin nourishment and oxygenation together with clinically proven anti-aging results.</p>
                              <a class="tp-services-btn" href="/oxygeneo-facial.php">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     
                  </div>
                  </div>
               </div>
               </div>
               </div>
			   
            
            </div>
          
        
         </section>
         <!-- services-area-end -->
		
		
		 <!-- brand-area-start -->
         <div class="brand-area tp-event-3-bg tp-event-2-bg cta-area tp-cta-3-bg" data-background="assets/img/slider/slider-3.jpg" style="padding-top: 25px; padding-bottom: 90px;background-position: top;">
            <div class="container">
               <div class="tp-brand-border" style="margin-top: 20px;border-top:none;">
                  <div class="row align-items-center">
                     <div class="col-lg-3 col-md-4">
                        <div class="tp-brand-wrap">
                           <h6 style="font-weight:bold;line-height:30px;font-size:30px;color:white">OUR GALLERY</h6>
                        </div>
                     </div>
                     <div class="col-lg-9 col-md-8">
                        <div class="swiper-container tp-brand-active">
                           <div class="swiper-wrapper align-items-center">						   
								 <?php 
									 include('connection.php');
									 $counter = 0;
									 $sql="select * from tbimg where imgtyp='Gallery' order by imgid desc";
									  $r=mysqli_query($con,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								     ?>
								  <div class="swiper-slide tp-brand-item">
									 <img style="width:100%;padding-right:10px" src="admin/images/upload/gallery/<?php echo $row['imgurl'];?>" alt="Gallery-img">
								  </div>
								 <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
                                          <a href="/media.php" class="btn btn-primary" style="color:#f58320" role="button">Go to Gallery</a>
               </div>
            </div>
         </div>
         <!-- brand-area-end -->
			<style>
			.theme-gk:before {
				position: absolute;
				top: 0px;
				left: 0px;
				width: 100%;
				height: 100%;
				content: '';
				background: rgba(0, 0, 0, 0.9);
			}
			</style>
			 <section class="project-area pt-110 pb-80" style=" padding-top:50px;">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-lg-8">
                     <div class="tp-section med mb-35">
                       
                        <h3 class="tp-section-title pb-15">Media</h3>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="tp-project-2-arrow d-flex align-items-center justify-content-lg-end mb-65" style="    margin-bottom: 45px;">
                        <div class="tp-project-2-button-prev">
                           <span><i class="fa-solid fa-arrow-left"></i></span>
                        </div>
                        <div class="tp-project-2-button-next ml-30">
                           <span><i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="swiper-container tp-project-2-active">
                        <div class="swiper-wrapper">
						<?php 				
						include('admin/connection.php');
						$counter = 0;
						$sql = "select * from tblink where linktype='Video Gallery'  ORDER BY linkid DESC";
						$r = mysqli_query($con, $sql);
						while ($row = mysqli_fetch_array($r)) {
							$url = $row['linkurl'];
							$break = explode('/', $url);
							$code = $break[count($break) - 1];
							$code;
						?>
						<div class="swiper-slide">
							<a  class="video-popup-trigger" data-video-url="<?php echo $url; ?>">
								<div class="tp-project-2">
									<div class="tp-project-2-thumb">
										<iframe width="100%" height="210" src="<?php echo $row ['linkurl']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
									</div>
								</div>
							</a>
						</div>
						<?php } ?>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- team-area->
		   <section class="testimonial-area tp-testimonial-bg pt-95 pb-80" style="padding-top: 20px;">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-section text-center mb-25">
                        <span><img src="assets/img/skin-new1.png" alt="" style="width:70px"></span>
                        
                        <h3 class="tp-section-title">PATIENT'S REVIEW</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="swiper-container tp-testimonial-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="tp-testimonial-item">
                                 <div class="tp-testimonial-rating mb-10">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                 </div>
                                 <div class="tp-testimonial-content">
                                    <p>One of the best doctor of our Punjab state.Dr.Nagpal is awesome personality in this field.He is so polite and dedicated towards his work.</p>
                                 </div>
                                 <div class="tp-testimonial-avatar d-flex align-items-center">
                                    <div class="tp-testimonial-avatar-thumb">
                                       <img src="assets/img/default-girl2.png" alt="">
                                    </div>
                                    <div class="tp-testimonial-avatar-info">
                                       <h4 class="tp-testimonial-avatar-title">Minakshi Thapar</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                         
                           <div class="swiper-slide">
                              <div class="tp-testimonial-item">
                                 <div class="tp-testimonial-rating mb-10">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                 </div>
                                 <div class="tp-testimonial-content">
                                    <p>Dr. Nagpal 's skin clinic and cosmetology centre is ornamented with latest hi-tech equipments and highly qualified and professional team.</p>
                                 </div>
                                 <div class="tp-testimonial-avatar d-flex align-items-center">
                                    <div class="tp-testimonial-avatar-thumb">
                                       <img src="assets/img/default-men2.png" alt="">
                                    </div>
                                    <div class="tp-testimonial-avatar-info">
                                       <h4 class="tp-testimonial-avatar-title">Razda Goyal</h4>
                                      
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
		<!--  team area-->
      </main>
		<style>
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            max-width: 50%;
            text-align: center;
        }
		</style>
	<div class="modal-overlay" id="videoModal">
        <div class="modal-content">
            <iframe id="videoFrame" width="100%" height="360" src="" frameborder="0" allowfullscreen></iframe>
            <button id="closeButton">Close</button>
        </div>
    </div>

    <script>
        const videoThumbnails = document.querySelectorAll('.video-popup-trigger');
        const videoModal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        const closeButton = document.getElementById('closeButton');

        videoThumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function (e) {
                e.preventDefault();
                const videoUrl = this.getAttribute('data-video-url');
                videoFrame.src = videoUrl;
                videoModal.style.display = 'flex';
            });
        });

        closeButton.addEventListener('click', function () {
            videoFrame.src = '';
            videoModal.style.display = 'none';
        });
    </script>
	<script>
		$(document).ready(function() {		
			$("#reload").click(function() {			
				$("img#img").remove();
				var id = Math.random();
				$('<img id="img" src="captcha13.php?id='+id+'"/>').appendTo("#imgdiv");
				 id ='';
			});
		});
	</script>
      <!-- footer-area-start -->
      <?php include('inc/footer.php'); ?>
      <!-- footer-area-end -->
      

      <!-- JS here -->
      <!--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
	  <script src="assets/js/vendor/jquery.js"></script>
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


</html>