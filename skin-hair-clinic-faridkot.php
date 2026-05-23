<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('inc/head.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin and Hair Clinic in Faridkot | Mob 99140 32355</title>
    <meta name="description" content="Looking for the best skin and hair treatments in Faridkot? Dr. P.S. Nagpal Clinic offers advanced skincare, hair restoration, laser treatments, and more. Call 99140 32355." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
       /* Updated Hero/Banner Section */
.banner-section {
    width: 100%;
    margin-top: 0;
padding-top: 15px; 
overflow: hidden;
    position: relative;
    top: 0;
}

/* Ensure the banner image takes full width */
.banner-image {
    width: 100%;
    height: auto;
    display: block;
}

/* Fix for header overlap issue */
header {
    position: relative; /* Ensure header doesn’t overlap the banner */
    z-index: 10;
}

/* Adjust for different screen sizes */
@media (max-width: 768px) {
    .banner-image {
        height: auto;
        min-height: 200px;
        object-fit: contain;
    }
}

        
        /* Rest of your existing CSS remains the same */
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        .service-card {
            transition: 0.3s;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        /* WhatsApp Icon */
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .whatsapp-icon:hover {
            transform: scale(1.1);
        }
        
        .whatsapp-img {
            width: 40px;
            height: 40px;
        }
        
        /* Contact Link */
        .contact-link {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #f58320;
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            z-index: 1000;
        }
        
        @media (max-width: 576px) {
            .contact-link {
                padding: 10px 15px;
                font-size: 14px;
                bottom: 15px;
                left: 15px;
            }
        }
        
        .contact-link:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* About Section */
        .about-section {
            background: #f9f9f9;
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 32px;
            font-weight: bold;
            color: #222;
            text-transform: uppercase;
        }
        
        @media (max-width: 768px) {
            .section-title {
                font-size: 28px;
            }
        }
        
        .section-title span {
            color: #f58320;
        }
        
        .sub-title {
            font-size: 24px;
            font-weight: 600;
            color: #444;
            margin-bottom: 15px;
        }
        
        @media (max-width: 768px) {
            .sub-title {
                font-size: 20px;
            }
        }
        
        .about-text {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        @media (max-width: 768px) {
            .about-text {
                font-size: 16px;
            }
        }
        
        .btn-custom {
            background-color: #f58320;
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        
        .btn-custom:hover {
            background-color: #d47218;
            transform: scale(1.05);
            color: #fff;
        }
        
        /* Why Choose Us Section */
        .choose-card {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease-in-out;
            height: 100%;
            margin-bottom: 20px;
        }
        
        .choose-card i {
            font-size: 40px;
            color: #f58320;
            margin-bottom: 10px;
        }
        
        .choose-card h4 {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        
        .choose-card p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }
        
        .choose-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        
        /* Skin Care Section */
        .skin-care-section {
            background: linear-gradient(135deg, #fdfdfd, #f9f9f9);
            padding: 60px 0;
        }
        
        .care-box {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
            transition: 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
            border: 2px solid #f58320;
            height: 100%;
        }
        
        .care-img-wrapper {
            width: 200px;
            height: 200px;
            margin: auto;
            margin-bottom: 15px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #f58320;
        }
        
        @media (max-width: 768px) {
            .care-img-wrapper {
                width: 150px;
                height: 150px;
            }
        }
        
        .care-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .care-box h4 {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        
        .care-box p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }
        
        .care-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            background: #fff7f0;
        }
        
        /* Before After Section */
        .before-after-section {
            background: #f9f9f9;
            padding: 60px 0;
        }
        
        .before-after-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
            height: 100%;
        }
        
        .before-after-card h4 {
            font-size: 20px;
            color: #f58320;
            margin-bottom: 15px;
        }
        
        .before-after-images {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .before-img, .after-img {
            width: 48%;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease-in-out;
        }
        
        .before-img:hover, .after-img:hover {
            transform: scale(1.05);
        }
        
        /* Hair Restoration Section */
        .hair-restoration-section {
            background: linear-gradient(135deg, #fdfdfd, #f9f9f9);
            padding: 60px 0;
            overflow: hidden;
        }
        
        .treatment-box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
            transition: 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .treatment-box i {
            font-size: 40px;
            color: #f58320;
            margin-bottom: 10px;
        }
        
        .treatment-box h4 {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        
        .treatment-box p {
            font-size: 16px;
            color: #555;
        }
        
        .treatment-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        
        .slider-nav {
            text-align: center;
            margin-top: 20px;
        }
        
        .nav-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #f58320;
            color: white;
            border: none;
            cursor: pointer;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .nav-button:hover {
            background-color: #d7711b;
        }
        
        /* Technology Section */
        .technology-section {
            background: #f9f9f9;
            padding: 60px 0;
        }
        
        .timeline-item {
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            margin-bottom: 20px;
            height: 100%;
        }
        
        .timeline-item:hover {
            transform: translateY(-5px);
        }
        
        .timeline-icon {
            font-size: 40px;
            color: #f58320;
            margin-bottom: 15px;
        }
        
        .timeline-content h4 {
            font-size: 22px;
            font-weight: bold;
            color: #222;
            margin-bottom: 5px;
        }
        
        .timeline-content p {
            font-size: 16px;
            color: #555;
        }
        
        /* Patient Approach Section */
        .patient-approach {
            background: #f9f9f9;
            padding: 60px 0;
        }
        
        .step {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: 0.3s;
            margin-bottom: 20px;
            height: 100%;
        }
        
        .step:hover {
            transform: translateY(-5px);
        }
        
        .step-number {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            background: #f58320;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .step-content h4 {
            font-size: 20px;
            font-weight: bold;
            color: #222;
            margin-top: 30px;
        }
        
        .step-content p {
            font-size: 16px;
            color: #555;
        }
        
        /* FAQ Section */
        .faq-section {
            background: #f9f9f9;
            padding: 60px 0;
        }
        
        .faq-list {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .faq-item {
            margin-bottom: 10px;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .faq-question {
            width: 100%;
            text-align: left;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            background: #f58320;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        
        .faq-question:hover {
            background: #e06c00;
        }
        
        .faq-answer {
            display: none;
            padding: 15px;
            background: white;
            font-size: 16px;
            color: #555;
            border-left: 4px solid #f58320;
        }
        
        .faq-item.active .faq-answer {
            display: block;
        }
        
        /* Dr. Nagpal CTA Section */
        .drnagpal-cta {
            position: relative;
            overflow: hidden;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 60px 0;
        }
        
        .drnagpal-cta:before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background-color: rgba(245, 131, 32, 0.05);
            border-radius: 50%;
        }
        
        .drnagpal-cta .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .contact-info-box {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border-left: 4px solid #f58320;
            height: 100%;
        }
        
        .contact-info-box li {
            padding: 5px 0;
        }
        
        .contact-info-box a:hover {
            color: #f58320 !important;
            text-decoration: underline !important;
        }
    </style>
</head>
<body>
    <?php include('inc/header.php'); ?>
    
    <!-- Banner Section (replacing Hero Section) -->
    <div class="banner-section ">
        <img src="assets/img/gallery/Final.jpg" alt="Dr. Nagpal's Skin & Hair Clinic" class="banner-image">
    </div>

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/919914032355" class="whatsapp-icon" aria-label="Chat on WhatsApp">
        <img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png" alt="WhatsApp" class="whatsapp-img">
    </a>

    <!-- Contact Link -->
    <a href="contact.php" class="contact-link" aria-label="Book Appointment">
        <div class="contact-icon">
            <i class="fas fa-phone"></i>
        </div>
        <span class="contact-text">Book your appointment</span>
    </a>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-content text-center">
                        <h2 class="section-title">
                            Welcome to <span>Dr. Nagpal's Skin & Hair Clinic</span>
                        </h2>
                        <h3 class="sub-title">
                            Faridkot Premier Skin and Hair Care Destination
                        </h3>
                        <p class="about-text">
                            Are you struggling with chronic skin problems or hair concerns that affect your confidence? 
                            At Dr. Nagpal's Skin & Hair Clinic, we are committed to providing advanced, personalized, and 
                            result-driven dermatological care. With a legacy of transforming lives through innovative 
                            treatments and compassionate care, we pride ourselves on being the leading skin and hair 
                            clinic in Faridkot.
                        </p>
                        <p class="about-text">
                            Our clinic specializes in addressing a wide range of skin and hair conditions, ensuring every 
                            patient leaves with healthier skin, stronger hair, and renewed self-esteem.
                        </p>
                    </div>
                    <div class="button-container text-center">
                        <a href="/about.php" class="btn btn-custom mt-4">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rest of your HTML content remains the same -->
    <!-- Dr. Nagpal CTA Section -->
    <section class="drnagpal-cta py-5" style="background-color: white; color: #333;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-3" style="font-weight: 700; color: #f58320;">Your Skin Transformation Starts Here</h3>
                    <p class="mb-4" style="font-size: 1.1rem;">
                        Trusted by thousands in Bathinda, Dr. Nagpal Skin & Hair Clinic offers advanced treatments 
                        using cutting-edge technologies like Eneka Pro Diode Laser and Secret RF.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="tel:+919914032355" class="btn px-4 py-2" style="background-color: #f58320; color: white; font-weight: 600;">
                            <i class="fas fa-phone me-2"></i> Call Now
                        </a>
                        <a href="contact.php" class="btn px-4 py-2" style="background-color: #333; color: white; font-weight: 600;">
                            <i class="fas fa-calendar me-2"></i> Book Appointment
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info-box p-4">
                        <h5 style="color: #f58320; margin-bottom: 15px;"><i class="fas fa-info-circle me-2"></i>Contact Details</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-phone-alt me-2" style="color: #f58320;"></i>
                                <a href="tel:+919914032355" style="color: #333; text-decoration: none;">+91 99140 32355</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-envelope me-2" style="color: #f58320;"></i>
                                <a href="mailto:nagpalhospital@gmail.com" style="color: #333; text-decoration: none;">nagpalhospital@gmail.com</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-map-marker-alt me-2" style="color: #f58320;"></i>
                                <span>Mall Road, Bathinda, Punjab</span>
                            </li>
                            <li class="mt-3">
                                <a href="https://wa.me/919914032355" target="_blank" class="btn btn-sm" style="background-color: #25D366; color: white;">
                                    <i class="fab fa-whatsapp me-2"></i> Chat on WhatsApp
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <div class="container my-5">
        <h2 class="section-title text-center mb-4 d-flex justify-content-center">
            Why Choose Dr. Nagpal's Skin & Hair Clinic?
        </h2>
        
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="choose-card">
                    <i class="fas fa-user-md"></i>
                    <h4>Expertise You Can Trust</h4>
                    <p>"Led by Dr. Nagpal, a renowned dermatologist, our clinic blends medical expertise with a patient-centered approach."</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="choose-card">
                    <i class="fas fa-laptop-medical"></i>
                    <h4>Advanced Treatments & Technology</h4>
                    <p>"We use FDA-approved technology for safe, effective results, including advanced laser treatments, skin care, and hair restoration."</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="choose-card">
                    <i class="fas fa-heart"></i>
                    <h4>Holistic & Personalized Care</h4>
                    <p>Every patient is unique. Our treatments are customized to suit your specific condition, lifestyle, and goals for optimal results.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="choose-card">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h4>Transparent & Affordable Services</h4>
                    <p>No hidden costs or false guarantees—just honest consultations and affordable pricing for quality dermatological care.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Comprehensive Skin Care Solutions Section -->
    <section class="skin-care-section py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title mb-4">Comprehensive Skin Care Solutions</h2>
                <p class="sub-text">At Dr. Nagpal's Clinic, we provide advanced dermatological treatments to restore and enhance your skin's health.</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="care-box">
                        <div class="care-img-wrapper">
                            <img src="assets/img/gallery/face2.jpg" alt="Acne Treatment" class="care-img">
                        </div>
                        <h4>Acne & Scar Management</h4>
                        <p>Effective solutions including chemical peels, laser therapy, and medicated treatments to clear stubborn acne and scars.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="care-box">
                        <div class="care-img-wrapper">
                            <img src="assets/img/gallery/face.jpg" alt="Pigmentation Treatment" class="care-img">
                        </div>
                        <h4>Pigmentation & Dark Spots</h4>
                        <p>Advanced Q-Switch lasers and skin treatments to reduce melasma, sunspots, and uneven skin tone.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="care-box">
                        <div class="care-img-wrapper">
                            <img src="assets/img/gallery/hand1.jpg" alt="Eczema Treatment" class="care-img">
                        </div>
                        <h4>Eczema, Psoriasis & Allergies</h4>
                        <p>Customized plans using medicated creams, lifestyle guidance, and skin barrier repair techniques.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="care-box">
                        <div class="care-img-wrapper">
                            <img src="assets/img/gallery/imgface.jpg" alt="Anti Aging Treatment" class="care-img">
                        </div>
                        <h4>Anti-Aging & Glow Enhancement</h4>
                        <p>Rejuvenate your skin with Botox, fillers, hydrafacials, and collagen-stimulating treatments.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="care-box">
                        <div class="care-img-wrapper">
                            <img src="assets/img/gallery/hand.jpg" alt="Fungal Infection Treatment" class="care-img">
                        </div>
                        <h4>Fungal Infections & Warts</h4>
                        <p>Safe, fast, and effective treatments to eliminate fungal infections and warts with minimal discomfort.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before & After Section -->
    <section class="before-after-section py-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2 class="section-title mb-4">Before & After Transformations</h2>
            </div>
            <p class="text-center mb-5">See the incredible results of our advanced skin and hair treatments.</p>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="before-after-card">
                        <h4>Laser Hair Removal</h4>
                        <div class="before-after-images">
                            <img src="assets/img/gallery/post_6.jpg" alt="Before Treatment" class="before-img">
                            <img src="assets/img/gallery/post_6.jpg" alt="After Treatment" class="after-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="before-after-card">
                        <h4>Acne Scar Treatment</h4>
                        <div class="before-after-images">
                            <img src="assets/img/gallery/after.avif" alt="Before Treatment" class="before-img">
                            <img src="assets/img/gallery/post_2.jpg" alt="After Treatment" class="after-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="before-after-card">
                        <h4>Growth Factor Concentrate</h4>
                        <div class="before-after-images">
                            <img src="assets/img/gallery/post_4.jpg" alt="Before Treatment" class="before-img">
                            <img src="assets/img/gallery/post_7.jpg" alt="After Treatment" class="after-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="before-after-card">
                        <h4>Nevus of Ota Treatment</h4>
                        <div class="before-after-images">
                            <img src="assets/img/gallery/post_3.jpg" alt="Before Treatment" class="before-img">
                            <img src="assets/img/gallery/post_1.jpg" alt="After Treatment" class="after-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Hair Restoration Treatments Section -->
    <section class="hair-restoration-section py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title mb-4">Advanced Hair Restoration Treatments</h2>
                <p class="sub-text">Restore your confidence with cutting-edge hair treatments designed to promote growth and scalp health.</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="treatment-box">
                        <i class="fas fa-tint"></i>
                        <h4>Hair Fall Control</h4>
                        <p>Identify root causes (hormonal, nutritional, or stress-related) and prescribe oral/topical solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="treatment-box">
                        <i class="fas fa-vial"></i>
                        <h4>PRP Therapy</h4>
                        <p>Stimulate natural hair growth using your body's own healing factors through Platelet-Rich Plasma therapy.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="treatment-box">
                        <i class="fas fa-head-side-mask"></i>
                        <h4>Scalp Treatments</h4>
                        <p>Combat dandruff, psoriasis, and folliculitis with targeted shampoos and serums.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="treatment-box">
                        <i class="fas fa-user-md"></i>
                        <h4>Hair Transplant Consultations</h4>
                        <p>Explore surgical options for permanent baldness solutions with expert guidance.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="treatment-box">
                        <i class="fas fa-lightbulb"></i>
                        <h4>Laser Hair Therapy</h4>
                        <p>Strengthen follicles and enhance hair density with non-invasive laser technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- State-of-the-Art Technology Section -->
    <section class="technology-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">State-of-the-Art Technology for Superior Results</h2>
            <p class="text-center mb-5">Equipped with cutting-edge advancements, we ensure safe, precise, and effective treatments.</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="timeline-item">
                        <div class="timeline-icon"><i class="fas fa-lightbulb"></i></div>
                        <div class="timeline-content">
                            <h4>Laser Machines</h4>
                            <p>Effective for acne scars, hair removal, and skin rejuvenation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="timeline-item">
                        <div class="timeline-icon"><i class="fas fa-vial"></i></div>
                        <div class="timeline-content">
                            <h4>PRP Kits</h4>
                            <p>Boosts natural hair regrowth and stimulates collagen for youthful skin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="timeline-item">
                        <div class="timeline-icon"><i class="fas fa-microscope"></i></div>
                        <div class="timeline-content">
                            <h4>Advanced Diagnostic Tools</h4>
                            <p>Accurately assesses skin and hair health for precise treatment planning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient-Centric Approach Section -->
    <section class="patient-approach py-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2 class="section-title mb-4">Patient-Centric Approach</h2>
            </div>
            <p class="text-center mb-5">Your comfort and satisfaction are our top priorities. Our approach ensures a seamless and personalized experience.</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Detailed Consultations</h4>
                            <p>We take time to understand your concerns and medical history for the best care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Clear Communication</h4>
                            <p>Every procedure, risk, and aftercare detail is explained for complete transparency.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Follow-Up Care</h4>
                            <p>Regular check-ins help monitor progress and adjust treatments as needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2 class="section-title mb-4">Frequently Asked Questions (FAQs)</h2>
            </div>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question">How long does it take to see results?</button>
                    <div class="faq-answer">
                        <p>Results vary, but most patients notice improvements within 2–4 weeks.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Are treatments painful?</button>
                    <div class="faq-answer">
                        <p>Most procedures are pain-free; topical anesthesia is used if needed.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Do you offer services for children?</button>
                    <div class="faq-answer">
                        <p>Yes! We treat pediatric eczema, warts, and allergies.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">What safety protocols are followed?</button>
                    <div class="faq-answer">
                        <p>Sterilization, disposable kits, and strict hygiene protocols are maintained.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('inc/footer.php'); ?>

    <!-- JavaScript for FAQ Accordion -->
    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', function () {
                const faqItem = this.parentNode;
                faqItem.classList.toggle('active');
            });
        });
    </script>
</body>
</html>