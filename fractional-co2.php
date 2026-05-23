<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('inc/head.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Advanced Fractional CO2 Laser treatment in Bathinda for skin resurfacing, scar reduction and rejuvenation. Call +91 99140 32355 today!">
  <meta name="keywords" content="Fractional CO2, CO2 laser Bathinda, skin resurfacing, scar treatment, wrinkle reduction, Dr. Nagpal">
  <title>Fractional CO2 Laser | Skin Resurfacing & Rejuvenation | Dr. Nagpal's Clinic | Bathinda</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.8;
      color: #34495e;
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Playfair Display', serif;
      font-weight: 600;
      color: #2c3e50;
    }
    p {
    font-size: 18px; /* Text ko readable banane ke liye */
    color: #333; /* Dark gray color for better readability */
    line-height: 1.6; /* Line spacing badhane ke liye */
    font-family: Arial, sans-serif; /* Clean and professional font */
    padding: 10px; /* Thoda space dene ke liye */
    border-radius: 5px; /* Rounded corners for a softer look */
}

    .hero-section {
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/Fractional-CO2-Laser-Skin-Resurfacing.png') no-repeat center center/cover;
      color: #fff;
      padding: 150px 0;
      text-align: center;
      position: relative;
    }
    .hero-section h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .hero-section p {
      font-size: 1.25rem;
      margin-bottom: 30px;
    }
    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 40px;
      text-align: center;
      color: #2c3e50;
      position: relative;
    }
    .section-title:after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: #f58320;
    }
    .section-content {
      padding: 80px 0;
    }
    .feature-box {
      padding: 30px;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      height: 100%;
      transition: all 0.3s ease;
    }
    .feature-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .feature-icon {
      font-size: 2.5rem;
      color: #f58320;
      margin-bottom: 20px;
    }
    .service-card {
      border: none;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      margin-bottom: 30px;
      height: 100%;
    }
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .service-card img {
      height: 200px;
      object-fit: cover;
    }
    .service-card .card-body {
      padding: 25px;
    }
    .btn-primary {
      background-color: #f58320;
      border: none;
      padding: 12px 30px;
      font-size: 1rem;
      font-weight: 500;
      border-radius: 50px;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #e5721a;
    }
    .bg-light {
      background-color: #f8f9fa !important;
    }
    .benefit-item {
      margin-bottom: 20px;
    }
    .benefit-item i {
      color: #f58320;
      margin-right: 10px;
    }
    .cta-section {
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/Fractional-CO2-Laser-Skin-Resurfacing.png') no-repeat center center/cover;
      padding: 80px 0;
      color: #fff;
      text-align: center;
    }
    .testimonial-card {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      margin-bottom: 30px;
    }
    .star-rating {
      color: #f58320;
      margin: 10px 0;
    }
    .about-content {
      background: #f9f9f9;
      padding: 40px;
      border-radius: 10px;
    }
    .tech-specs {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .tech-specs h4 {
      color: #f58320;
      margin-bottom: 20px;
    }
    .tech-specs ul {
      list-style: none;
      padding: 0;
    }
    .tech-specs li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 25px;
    }
    .tech-specs li:before {
      content: "\f00c";
      font-family: "Font Awesome 6 Free";
      font-weight: 900;
      color: #f58320;
      position: absolute;
      left: 0;
    }
    .treatment-area {
      background: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .treatment-area h4 {
      color: #2c3e50;
      border-bottom: 2px solid #f58320;
      padding-bottom: 10px;
      margin-bottom: 15px;
    }
    .doctor-profile {
      background: #f9f9f9;
      padding: 30px;
      border-radius: 10px;
      margin-top: 30px;
    }
    .recovery-timeline {
      position: relative;
      padding-left: 30px;
    }
    .recovery-timeline:before {
      content: '';
      position: absolute;
      left: 10px;
      top: 0;
      bottom: 0;
      width: 2px;
      background: #f58320;
    }
    .recovery-step {
      position: relative;
      margin-bottom: 30px;
    }
    .recovery-step:before {
      content: '';
      position: absolute;
      left: -35px;
      top: 5px;
      width: 16px;
      height: 16px;
      border-radius: 50%;
      background: #f58320;
      border: 3px solid #fff;
    }
  </style>
</head>
<body>
  <?php include('inc/header.php'); ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 style="color: white;">Fractional CO2 Laser Skin Resurfacing</h1>
      <p style="color: white;">Advanced treatment for scars, wrinkles and skin rejuvenation with minimal downtime</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg">Call +91 99140 32355</a>
    </div>
  </section>

  <!-- About Fractional CO2 Section -->
  <section class="section-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/bout-Fractional-CO2-Laser.png" alt="Fractional CO2 Laser System" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h2 class="mb-4">About Fractional CO2 Laser</h2>
            <p>Fractional CO2 laser is a revolutionary skin resurfacing treatment that creates microscopic columns of thermal injury in the skin, stimulating collagen production and skin remodeling while leaving surrounding tissue intact for faster healing.</p>
            
            <div class="tech-specs mt-4">
              <h4>Key Features:</h4>
              <ul>
                <li>10,600nm wavelength for optimal skin absorption</li>
                <li>Fractional technology for faster recovery</li>
                <li>Adjustable depth and density settings</li>
                <li>Integrated cooling system for comfort</li>
                <li>FDA-approved for skin resurfacing</li>
                <li>Suitable for all skin types when properly adjusted</li>
              </ul>
            </div>
            
            
          </div>
        </div>
      </div>
      <div class="doctor-profile mt-4">
    <h4>Dr. T.S. Nagpal's Expertise with CO2 Laser</h4>
    <p>With specialized training in laser dermatology, 
        <a href="/index.php" title="Best Dermatologist in Bathinda"><strong>Dr. T.S. Nagpal</strong></a> 
        has mastered the art of customizing CO2 laser parameters for each patient's unique skin concerns and type, 
        ensuring optimal results with minimal downtime.</p>
    <p>"Fractional CO2 laser is one of the most powerful tools in cosmetic dermatology when used correctly. 
        My approach focuses on achieving significant results while prioritizing patient safety and comfort." 
        - <a href="/laser-hair-removal-bathinda.php" title="Laser Hair and Skin Clinic"><strong>Dr. T.S. Nagpal</strong></a></p>
</div>

    </div>
  </section>


  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="mb-4" style="color: white;">Ready for Remarkable Skin Transformation?</h2>
      <p class="lead mb-5" style="color: white;">Experience the power of Fractional CO2 laser under Dr. Nagpal's expert care in Bathinda.</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg me-3"><i class="fas fa-phone-alt me-2"></i> Call +91 99140 32355</a>
      <a href="contact.php" class="btn btn-outline-light btn-lg"><i class="fas fa-calendar-alt me-2"></i> Book Online</a>
    </div>
  </section>


  <!-- Applications Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">Fractional CO2 Treatment Areas</h2>
      
      <div class="row">
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-face-smile text-primary me-2"></i> Facial Rejuvenation</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Fine lines and wrinkles</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Sun damage</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Uneven skin texture</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Enlarged pores</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Dull complexion</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-spa text-primary me-2"></i> Scar Treatment</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Acne scars (boxcar, icepick, rolling)</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Surgical scars</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Traumatic scars</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Stretch marks (early stages)</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-eye text-primary me-2"></i> Eyelid Rejuvenation</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Periorbital wrinkles</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Lax eyelid skin</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Dark circles (certain types)</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-user-md text-primary me-2"></i> Other Indications</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Actinic keratosis</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Sebaceous hyperplasia</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Certain benign skin growths</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Skin tightening</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">How Fractional CO2 Works</h2>
      
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/How-Fractional-CO2-Works.png" alt="Fractional CO2 Treatment Process" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="benefit-item">
            <h4><i class="fas fa-microscope"></i> Fractional Technology</h4>
            <p>The laser creates thousands of microscopic treatment zones that penetrate deep into the dermis, leaving surrounding skin intact for faster healing.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-bullseye"></i> Controlled Injury</h4>
            <p>The thermal energy stimulates the body's natural healing response, triggering collagen and elastin production.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-layer-group"></i> Skin Remodeling</h4>
            <p>As new collagen forms over weeks to months, skin texture improves, scars become less noticeable, and wrinkles soften.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-sliders-h"></i> Customizable Treatment</h4>
            <p>Dr. Nagpal adjusts the density, depth and energy level based on your skin concerns and tolerance.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recovery Timeline Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">What to Expect: Recovery Timeline</h2>
      
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="recovery-timeline">
            <div class="recovery-step">
              <h4>Day 1-3: Initial Healing Phase</h4>
              <p>Redness, swelling and a sunburn-like sensation are normal. Skin may feel tight and appear pink. Keep the treated area moist with recommended ointments.</p>
            </div>
            <div class="recovery-step">
              <h4>Day 4-7: Peeling Phase</h4>
              <p>Skin begins to flake and peel as new skin emerges. Avoid picking at peeling skin. Use gentle cleansers and continue moisturizing.</p>
            </div>
            <div class="recovery-step">
              <h4>Week 2: Pink Phase</h4>
              <p>Most peeling is complete but skin remains pink. Mineral makeup can usually be applied. Sun protection is critical during this phase.</p>
            </div>
            <div class="recovery-step">
              <h4>Weeks 3-6: Collagen Remodeling</h4>
              <p>Pinkness fades and collagen continues to rebuild. Initial improvements in texture and tone become visible.</p>
            </div>
            <div class="recovery-step">
              <h4>Months 3-6: Final Results</h4>
              <p>Full collagen remodeling occurs with optimal results visible. Multiple treatments may be recommended for deeper concerns.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">Why Choose Fractional CO2 at Dr. Nagpal's Clinic?</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-user-md"></i>
            </div>
            <h3>Medical Expertise</h3>
            <p>Dr. Nagpal's deep understanding of skin physiology ensures safe, effective treatments tailored to your skin type.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h3>Advanced Technology</h3>
            <p>State-of-the-art fractional CO2 laser system with precise control over treatment parameters.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-smile"></i>
            </div>
            <h3>Personalized Approach</h3>
            <p>Custom treatment plans based on your specific concerns, skin type and desired downtime.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Proven Results</h3>
            <p>Significant improvement in skin texture, tone and scarring demonstrated in clinical studies.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <h3>Downtime Options</h3>
            <p>From aggressive single treatments to lighter "lunchtime" procedures with minimal downtime.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-certificate"></i>
            </div>
            <h3>Comprehensive Care</h3>
            <p>Pre- and post-treatment protocols to enhance results and minimize complications.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Before & After Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">Treatment Results</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Acne-Scars-fractional.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Acne Scars</h3>
              <p>After 2 sessions</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Wrinkles-fractional-image.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Wrinkles</h3>
              <p>After 1 session</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Sun-Damage-fractional.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Sun Damage</h3>
              <p>After 3 sessions</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">Patient Experiences</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="star-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="fst-italic">"Dr. Nagpal's CO2 treatment transformed my acne scars that I'd had for 15 years. The results were beyond my expectations."</p>
            <p class="text-end fw-bold">- Rohan P., Bathinda</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="star-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="fst-italic">"After one fractional CO2 session, my skin looks 10 years younger. The downtime was minimal with proper care."</p>
            <p class="text-end fw-bold">- Neha S., Bathinda</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="star-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="fst-italic">"The detailed pre-treatment consultation and post-care instructions made all the difference in my recovery."</p>
            <p class="text-end fw-bold">- Arjun K., Bathinda</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('inc/footer.php'); ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script>
    // Simple animation for feature boxes
    document.addEventListener('DOMContentLoaded', function() {
      const featureBoxes = document.querySelectorAll('.feature-box');
      
      featureBoxes.forEach(box => {
        box.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-10px)';
        });
        box.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
        });
      });
    });
  </script>
</body>
</html>