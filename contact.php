<?php session_start();
if (isset($_POST['submit'])) {
    if ($_SESSION["code"] == $_POST["captcha"]) {
        include('admin/connection.php');
        $to = "nagpalhospital@gmail.com";

        if (!empty($_POST['realemail'])) {
            die('Message Sent');
        } else {
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $name = htmlentities($_POST['name']);
            $phone = mysqli_real_escape_string($con, $_POST['phone']);
            $phone = htmlentities($_POST['phone']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $email = htmlentities($_POST['email']);
            $subjectmsg = mysqli_real_escape_string($con, $_POST['subject']);
            $subjectmsg = htmlentities($_POST['subject']);
            $msg = mysqli_real_escape_string($con, $_POST['message']);
            $msg = htmlentities($_POST['message']);
            date_default_timezone_set("Asia/Kolkata");
            $enqdate = " Date: " . date('d/m/y') . " Time:" . date("h:i:sa");
            $headers = "From:" . $email;
            $subject = "Contact Message from www.drnagpalskinhair.com";
            $message = "Dear Admin
    " . $name . " with Email Id " . $email . "
    Mobile No :" . $phone . "
    Subject of Sender : " . $subjectmsg . "
    Sent a message : " . $msg . "";
            if (mail($to, $subject, $message, $headers)) {
                echo "<script> alert('Message sent successfully')</script>";
                $s =   mysqli_query($con, "insert into tbenq (enqid,enqmob,enqnam,enqeml,enqsub,enqmsg,enqdat,enqtyp) values(NULL,'$phone','$name','$email','$subjectmsg','$msg','$enqdate','Contact')");
            } else {
                echo "<script> alert('Some Error')</script>";
                $s =   mysqli_query($con, "insert into tbenq (enqid,enqmob,enqnam,enqeml,enqsub,enqmsg,enqdat,enqtyp) values(NULL,'$phone','$name','$email','$subjectmsg','$msg','$enqdate','Contact')");
                if ($s) {
                    "";
                } else {
                    echo mysqli_error($con);
                }
            }
        }
    } else {
        //  die("Wrong TEXT Entered");
        echo "<script> alert('Wrong TEXT Entered');</script>";
        echo '<script>window.location.href = "contact.php";</script>';
    }
}


function generateCaptchaCode($length = 6)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}
$newCaptcha = generateCaptchaCode();
$_SESSION["code"] = $newCaptcha;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Data Output in the <head> Section -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Dr.TS Nagpal Bathinda | +91 99140 32355</title>
    <meta name="description" content="Contact Dr. Nagpal's Skin Clinic & Cosmetology Centre in Bathinda for expert dermatology and cosmetology services. Call +91 99140 32355 or email nagpalhospital@gmail.com.">
    <meta name="keywords" content="contact, Dr. Nagpal, skin clinic, cosmetology, Bathinda, dermatology">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://www.drnagpalskinhair.com/contact.php">

    <!-- Google Ads Scripts -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7528823209630874" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4634952667489126" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8784628306757291" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7268268022600682" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6592315227782803" crossorigin="anonymous"></script>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/flaticon_mycollection.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<?php include('inc/head.php'); ?>
<style>
    .contact-info {
        display: inline-block;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    .contact-info-icon {
        margin-bottom: 5px;
    }

    .contact-info-item {
        background: #231f20;
        padding: 15px 0px;
    }

    .contact-page-sec .contact-page-form h2 {
        color: #071c34;
        text-transform: capitalize;
        font-size: 22px;
        font-weight: 700;
    }

    .contact-page-form .col-md-6.col-sm-6.col-xs-12 {
        padding-left: 0;
    }

    .contact-page-form.contact-form input {
        margin-bottom: 5px;
    }

    .contact-page-form.contact-form textarea {
        height: 110px;
    }

    .contact-page-form.contact-form input[type="submit"] {
        background: #071c34;
        width: 150px;
        border-color: #071c34;
    }

    .contact-info-icon i {
        font-size: 38px;
        color: #fda40b;
    }

    .contact-info-text p {
        margin-bottom: 0px;
    }

    .contact-info-text h2 {
        color: #fff;
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .contact-info-text span {
        color: #999999;
        font-size: 16px;
        font-weight: ;
        display: inline-block;
        width: 100%;
    }

    .contact-page-form input {
        background: #f9f9f9 none repeat scroll 0 0;
        border: 1px solid #eeeeee;
        margin-bottom: 20px;
        padding: 12px 16px;
        width: 100%;
        border-radius: 4px;
        height: 45px;
    }

    .contact-page-form .message-input {
        display: inline-block;
        width: 100%;
        padding-left: 0;
    }

    .single-input-field textarea {
        background: #f9f9f9 none repeat scroll 0 0;
        border: 1px solid #f9f9f9;
        width: 100%;
        height: 97px;
        padding: 12px 16px;
        border-radius: 4px;
        margin-bottom: 5px;
    }

    .single-input-fieldsbtn input[type="submit"] {
        background: #f4821f none repeat scroll 0 0;
        color: #fff;
        display: inline-block;
        font-weight: 600;
        padding: 10px 0;
        text-transform: capitalize;
        width: 150px;
        margin-top: 20px;
        font-size: 16px;
    }

    .single-input-fieldsbtn input[type="submit"]:hover {
        background: #231f20;
        transition: all 0.4s ease-in-out 0s;
        border-color: #231f20
    }

    .single-input-field h4 {
        color: #464646;
        text-transform: capitalize;
        font-size: 14px;
    }

    .contact-page-form {
        display: inline-block;
        width: 100%;
        margin-top: 30px;
    }

    .contact-page-map {
        margin-top: 36px;
    }

    .contact-page-form form {
        padding: 20px 15px 0;
    }

    .pt-110 {
        padding-top: 70px;
    }

    .mb-45 {
        margin-bottom: 13px !important;
    }

    .tp-contact-form-input textarea {
        height: 120px !important;
        resize: none;
    }

    .tp-btn {
        background-color: #f4821f;
        padding: 12px 32px;
        border: solid 1px #f4821f;
    }

    @media screen and (max-width: 600px) {
        .wraps {
            padding-top: 40px !important;
            padding-bottom: 90px !important;
        }

        .wgk {
            line-height: 20px !important;
        }

        .Surg {
            margin-bottom: 20px !important;
        }
    }
</style>

<body>
    <?php include('inc/header.php'); ?>
    <!-- heafer-sticky-area-end -->


    </div>
    <!-- header-search-end -->

    <main>

        <div class=" text-center">
            <img src="assets/img/contact.jpg" class="img-fluid banner-img" alt="Nagpal Robotics Fellowship Banner">
        </div>

        <style>
            .banner-img {
                max-width: 100%;
                /* Ensures full responsiveness */
                height: auto;
                /* Maintains aspect ratio */
                border-radius: 8px;
                /* Smooth corners */
                margin-top: 30px;
                padding-top: 15px;

            }

            /* Mobile Specific Fix */
            @media (max-width: 576px) {
                .banner-img {
                    width: 100%;
                    /* Slight margin from edges */
                    margin: 0 auto;
                    /* Centers the image */
                    display: block;
                    padding-top: 15px;
                }
            }
        </style>
        <!-- contact-area-start -->
        <section class="contact-area mt-5 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marked"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>address</h2>
                                    <span>Mall Road, Bathinda </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>E-mail</h2>
                                    <span><a href="mailto:nagpalhospital@gmail.com">nagpalhospital@gmail.com</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>Phone</h2>
                                    <span><a href="tel:+91 99140 32355">+91 99140 32355</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-page-form" method="post">
                            <h2>Get in Touch</h2>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Your Name" name="name""/>
                </div>
              </div>  
              <div class=" col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-input-field">
                                                <input type="email" placeholder="E-mail" name="email" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-input-field">
                                                <input type="text" placeholder="Phone Number" name="phone" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-input-field">
                                                <input type="text" placeholder="Subject" name="subject" />
                                            </div>
                                        </div>
                                        <div class="col-md-12 message-input">
                                            <div class="single-input-field">
                                                <textarea placeholder="Write Your Message" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="captchaCode" Style="position: initial;  background: url(bj1.jpg);   padding: 9px 25px;   color: honeydew;font-size: 15px;    margin-bottom: 20px;"> <?php echo $_SESSION["code"]; ?> </span> <button id="refreshCaptchaButton" class="btn"><i Style="font-size: 20px;" class="fa fa-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="captcha1" name="captcha" type="text" placeholder="Enter Image Text" class="form-control" style="border-radius: 0px;margin-top:5px">
                                            </div>
                                        </div>
                                        <div class="single-input-fieldsbtn">
                                            <input type="submit" name="submit" value="Submit" />
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-page-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.8657843756773!2d74.93978827471402!3d30.21237791059608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3917330d25d9b059%3A0x22a4808a4bec789e!2sNagpal&#39;s%20Skin%20Clinic%20%26%20Cosmetology%20Centre!5e0!3m2!1sen!2sin!4v1699948149933!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </section>
        <!-- contact-area-end -->

        <!-- map-area-start ->
		<div class="map-area">
			<div class="tp-map-wrap">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d86191.93772878274!2d-74.0035734357229!3d40.73233839995004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1690807533861!5m2!1sen!2sbd"
					width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<!-- map-area-enmd -->

    </main>

    <!-- footer-area-start -->
    <?php include('inc/footer.php'); ?>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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


<!-- Mirrored from template.wphix.com/ncare-prv/ncare/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2023 06:42:54 GMT -->

</html>