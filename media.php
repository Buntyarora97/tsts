
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php include('inc/head.php'); ?>

    <title>Media Coverage & News | Dr. Nagpal Skin & Hair Clinic</title>
    
    <meta name="description" content="Explore media coverage, articles, and news about Dr. Nagpal Skin & Hair Clinic. Stay updated on the latest skincare innovations and treatments."/>
    
    <meta name="keywords" content="media coverage, skincare news, dermatology articles, Dr. Nagpal clinic news, skincare innovations, aesthetic treatments, latest beauty trends"/>
    
    <meta name="author" content="Dr. Nagpal Skin & Hair Clinic"/>

    <!-- Open Graph (For Social Media Sharing) -->
    <meta property="og:title" content="Media Coverage & News | Dr. Nagpal Skin & Hair Clinic"/>
    <meta property="og:description" content="Read articles, news, and media features about Dr. Nagpal Skin & Hair Clinic. Get the latest updates on skincare advancements."/>
    <meta property="og:image" content="https://drnagpalskinhair.com/assets/img/media.jpg"/>
    <meta property="og:url" content="https://drnagpalskinhair.com/media.php"/>
    <meta property="og:type" content="website"/>

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Media Coverage & News | Dr. Nagpal Skin & Hair Clinic"/>
    <meta name="twitter:description" content="Stay updated with our latest media features, news articles, and skincare advancements."/>
    <meta name="twitter:image" content="https://drnagpalskinhair.com/assets/img/media.jpg"/>
</head>

<style>

.tp-breadcrumb-bg::before {
	opacity:0.81 !important;
}
.tp-section-title {
    font-size: 35px !important;
}
.tp-section p {
    line-height: 23px !important;
	margin-top:10px;
}
.pt-110 {
    padding-top: 50px;
}
.pb-80 {
    padding-bottom: 50px;
}
.tp-services-2-thumb > img {
	
}
.tp-services-2-thumb {
    position: relative;
}

.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50px; /* Adjust the size of the play button as needed */
    height: 50px;
	border:solid 1px lightgrey;
    border-radius: 50%;
    cursor: pointer;
}

.play-button::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-40%, -50%);
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 40px solid white; /* Adjust the color as needed */
    border-left: 20px solid transparent;
}

.video-popup-trigger {
    display: block;
    position: relative;
    overflow: hidden;
}

.video-popup-trigger img {
    width: 100%;
    height: auto;
    display: block;
}
@media screen and (max-width: 600px) {
	    .wraps {
            padding-top: 40px !important;
            padding-bottom: 90px !important;
        }        
        .wgk{
            line-height: 20px !important;
        }
        .services-area{
            padding-top:25px !important;
        }
	}
</style>
<body>


   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- header area start -->
  <?php include('inc/header.php'); ?>
   <!-- heafer-sticky-area-end -->

   
      <main>

               	  <div class=" text-center">
    <img src="assets/img/photos.jpg" class="img-fluid banner-img" alt="Nagpal Robotics Fellowship Banner">
</div>

<style>
    .banner-img {
        max-width: 100%; /* Ensures full responsiveness */
        height: auto; /* Maintains aspect ratio */
        border-radius: 8px; /* Smooth corners */
        margin-top: 30px;
        padding-top: 15px;

    }

    /* Mobile Specific Fix */
    @media (max-width: 576px) {
        .banner-img {
            width: 100%; /* Slight margin from edges */
            margin: 0 auto; /* Centers the image */
            display: block;
            padding-top: 15px;
        }
    }
</style>
         

         <!-- services-area-start -->
     <section class="services-area tp-services-2-wrap pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-section text-center mb-40">
                    <span><img src="assets/img/skin-new1.png" alt="" style="width:50px"></span>
                    <h3 class="tp-section-title">OUR PHOTO GALLERY</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <?php 
                // ✅ Database Connection Include
                include('connection.php');

                // ✅ Fetch Images from Database
                $sql = "SELECT * FROM tbimg WHERE imgtyp='Gallery' ORDER BY imgid DESC";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // ✅ Ensure Image Path is Correct
                        $imagePath = "admin/images/upload/gallery/" . htmlspecialchars($row['imgurl']);
                        
                        // ✅ Check if Image Exists
                        if (file_exists($imagePath)) {
            ?>
                        <div class="col-lg-4 col-md-6">				
                            <div class="tp-services-2 mb-30">
                                <div class="tp-services-2-thumb p-relative">
                                    <img src="<?php echo $imagePath; ?>" alt="Gallery Image">
                                </div>                    
                            </div>
                        </div>
            <?php 
                        } else {
                            echo "<p style='color: red;'>Image not found: " . $row['imgurl'] . "</p>";
                        }
                    }
                } else {
                    echo "<p style='text-align: center; color: gray;'>No images found in the gallery.</p>";
                }
            ?>
        </div>
    </div>
</section>

         <!-- services-area-end -->

        </main>
		<style>
        /* Style for the modal overlay */
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

        /* Style for the modal content */
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
      <!-- footer-area-start -->
      <?php include('inc/footer.php'); ?>
      <!-- footer-area-end -->
      

      <!-- JS here -->
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery.js"></script>
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