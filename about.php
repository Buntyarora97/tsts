<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php include('inc/head.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About Dr. Nagpal's Clinic | Mob 99140 32355</title>
    <meta name="description" content="Learn about Dr. T.S. Nagpal, a leading cosmetic surgeon in Punjab, offering cutting-edge treatments for skin, hair, and laser procedures.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #f58320;
            --secondary-color: #ffaa5e;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #555;
            line-height: 1.7;
        }
        
        .section-title {
            font-weight: 700;
            color: var(--dark-color);
            position: relative;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            border-top: 4px solid var(--primary-color);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #e07215;
            border-color: #e07215;
        }
    </style>
</head>

<body>
    <?php include('inc/header.php'); ?>

    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold text-white mb-4">About Dr. Nagpal's Clinic</h1>
                        <p class="lead text-white mb-4">20+ Years of Excellence in Cosmetic & Laser Treatments</p>
                        <a href="/contact.php" class="btn btn-light btn-lg rounded-pill px-4">Book Consultation</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/img/gallery/gallery5.JPG" alt="Clinic Interior" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Doctor Section -->
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <img src="assets/img/dr-ts-nagpal-image2.png" class="img-fluid rounded shadow" alt="Dr. T.S. Nagpal">
                    </div>
                    <div class="col-lg-7">
                        <h2 class="section-title">About Dr. T.S. Nagpal</h2>
                        <p class="lead">Renowned cosmetic surgeon with over 20 years of experience in dermatology and aesthetic medicine.</p>
                        <p>Dr. Nagpal is a board-certified dermatologist (MBBS, MD) with specialized training in cosmetic procedures from leading international institutions. His expertise combines medical precision with an artistic eye for natural-looking results.</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="feature-card">
                                    <i class="fas fa-award feature-icon"></i>
                                    <h5>Expertise</h5>
                                    <p>Specialized in advanced laser technologies and cosmetic dermatology procedures</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="feature-card">
                                    <i class="fas fa-user-md feature-icon"></i>
                                    <h5>Approach</h5>
                                    <p>Personalized treatment plans tailored to each patient's unique needs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clinic Overview -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center">Our Clinic</h2>
                <p class="text-center lead mb-5">State-of-the-art facility providing world-class dermatological care</p>
                
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="feature-card text-center">
                            <i class="fas fa-clinic-medical feature-icon"></i>
                            <h4>Modern Facility</h4>
                            <p>Equipped with latest medical-grade technology and luxurious amenities</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card text-center">
                            <i class="fas fa-shield-alt feature-icon"></i>
                            <h4>Safety Standards</h4>
                            <p>Stringent sterilization and hygiene protocols for your safety</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card text-center">
                            <i class="fas fa-users feature-icon"></i>
                            <h4>Expert Team</h4>
                            <p>Skilled professionals dedicated to exceptional patient care</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Treatments -->
        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center">Our Specializations</h2>
                
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-spa feature-icon"></i>
                            <h4>Skin Treatments</h4>
                            <ul>
                                <li>Wrinkle reduction</li>
                                <li>Acne scar treatment</li>
                                <li>Pigmentation correction</li>
                                <li>Laser skin resurfacing</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-user-shield feature-icon"></i>
                            <h4>Hair Solutions</h4>
                            <ul>
                                <li>Hair transplant (FUE)</li>
                                <li>PRP therapy</li>
                                <li>Laser hair growth</li>
                                <li>Scalp treatments</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-magic feature-icon"></i>
                            <h4>Laser Procedures</h4>
                            <ul>
                                <li>Hair removal</li>
                                <li>Tattoo removal</li>
                                <li>Skin rejuvenation</li>
                                <li>Vascular treatments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center">Patient Stories</h2>
                
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="mb-3">
                                <i class="fas fa-quote-left fa-2x text-primary opacity-25"></i>
                            </div>
                            <p class="mb-4">"Dr. Nagpal's hair transplant gave me my confidence back. The results look completely natural."</p>
                            <div class="d-flex align-items-center">
                                <img src="assets/img/test-man-1.avif" class="rounded-circle me-3" width="50" alt="Patient">
                                <div>
                                    <h6 class="mb-0">Rajiv Sharma</h6>
                                    <small class="text-muted">Hair Transplant</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="mb-3">
                                <i class="fas fa-quote-left fa-2x text-primary opacity-25"></i>
                            </div>
                            <p class="mb-4">"The laser treatments for my pigmentation worked wonders. Very professional service."</p>
                            <div class="d-flex align-items-center">
                                <img src="assets/img/test-man-3.avif" class="rounded-circle me-3" width="50" alt="Patient">
                                <div>
                                    <h6 class="mb-0">Priya Malhotra</h6>
                                    <small class="text-muted">Skin Treatment</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="mb-3">
                                <i class="fas fa-quote-left fa-2x text-primary opacity-25"></i>
                            </div>
                            <p class="mb-4">"My botox results were perfect - subtle yet effective. Dr. Nagpal has an artistic eye."</p>
                            <div class="d-flex align-items-center">
                                <img src="assets/img/test-man-2.avif" class="rounded-circle me-3" width="50" alt="Patient">
                                <div>
                                    <h6 class="mb-0">Anil Kapoor</h6>
                                    <small class="text-muted">Anti-Aging</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-5 hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h3 class="text-white mb-3">Begin Your Transformation Today</h3>
                        <p class="text-white mb-0">Consult with Dr. Nagpal for personalized treatment options</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="tel:+919914032355" class="btn btn-light btn-lg rounded-pill px-4 me-3">
                            <i class="fas fa-phone-alt me-2"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('inc/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>