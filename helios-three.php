<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('inc/head.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Helios 3 in Bathinda offers advanced laser treatments for skin rejuvenation and pigmentation. Call +91 99140 32355 today!">
  <meta name="keywords" content="Helios 3, laser treatment Bathinda, skin rejuvenation, pigmentation treatment, Dr. Nagpal">
  <title>Helios 3 | Advanced Skin Rejuvenation | Dr. Nagpal's Clinic | Bathinda</title>

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
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/Helios-three-image.png') no-repeat center center/cover;
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
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/Helios-three-image.png') no-repeat center center/cover;
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
  </style>
</head>
<body>
  <?php include('inc/header.php'); ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
<h1 style="color: white;">Helios 3: Advanced Skin Rejuvenation Technology</h1>
      <p style="color: white;">Cutting-edge laser treatments for pigmentation, wrinkles and skin revitalization</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg">Call +91 99140 32355</a>
    </div>
  </section>

  <!-- About Helios 3 Section -->
  <section class="section-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/About-helios-three.png" alt="Helios 3 Laser System" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h2 class="mb-4">About Helios 3</h2>
            <p>Helios 3 is the most advanced Q-switched Nd:YAG laser system for skin rejuvenation and pigmentation treatment. This innovative technology provides safe and effective treatment for all skin concerns with minimal downtime.</p>
            
            <div class="tech-specs mt-4">
              <h4>Key Features:</h4>
              <ul>
                <li>Q-Switched Nd:YAG 1064nm/532nm wavelengths</li>
                <li>US FDA Approved Technology</li>
                <li>Fractional and full-beam modes</li>
                <li>Advanced cooling system for patient comfort</li>
                <li>Customizable settings for all skin types</li>
                <li>Minimal downtime</li>
              </ul>
            </div>
            

          </div>
        </div>
      </div>
                 <div class="doctor-profile mt-4">
    <h4>Dr. T.S. Nagpal's Expertise with Helios 3</h4>
    <p>With over 15 years of experience in cosmetic dermatology, 
        Dr. T.S. Nagpal
        has successfully performed thousands of Helios 3 treatments. 
        His precise technique and deep understanding of laser parameters ensure optimal results for every patient.</p>
    <p>"Helios 3 represents the gold standard in laser skin treatments. 
        At our clinic, we customize each treatment to address individual patient concerns while maintaining the highest safety standards." 
        Dr. T.S. Nagpal
    <p>We specialize in <a href="/laser-hair-removal-bathinda.php" title="Laser Hair Treatment in Bathinda"><strong>laser hair treatment in Bathinda</strong></a>, 
        offering advanced solutions for smooth, hair-free skin with long-lasting results.</p>
</div>

    </div>
  </section>

 <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="mb-4" style="color: white;">Ready to Transform Your Skin?</h2>
      <p class="lead mb-5" style="color: white;">Experience the advanced Helios 3 laser technology under Dr. Nagpal's expert care in Bathinda.</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg me-3"><i class="fas fa-phone-alt me-2"></i> Call +91 99140 32355</a>
      <a href="contact.php" class="btn btn-outline-light btn-lg"><i class="fas fa-calendar-alt me-2"></i> Book Online</a>
    </div>
  </section>


  <!-- Applications Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">Helios 3 Treatments</h2>
      
      <div class="row">
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-face-smile text-primary me-2"></i> Skin Rejuvenation</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Wrinkle reduction</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Skin tightening</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Improved skin texture</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Pore size reduction</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-spa text-primary me-2"></i> Pigmentation Correction</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Melasma</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Sun spots</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Age spots</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Freckles</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-heartbeat text-primary me-2"></i> Tattoo Removal</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Professional tattoo removal</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Amateur tattoo removal</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Cosmetic tattoo removal</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-user-md text-primary me-2"></i> Other Treatments</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Acne scar improvement</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Vascular lesion treatment</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Skin brightening</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">How Helios 3 Works</h2>
      
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/How-Helios-three-Works.png" alt="Helios 3 Treatment Process" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="benefit-item">
            <h4><i class="fas fa-microscope"></i> Advanced Laser Technology</h4>
            <p>Helios 3 delivers precise laser energy that targets pigmentation and stimulates collagen production without damaging surrounding tissue.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-bullseye"></i> Selective Targeting</h4>
            <p>The laser energy is absorbed by melanin in pigmented lesions or tattoo ink, breaking them down for natural elimination by the body.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-snowflake"></i> Comfortable Treatment</h4>
            <p>Integrated cooling system maximizes patient comfort and protects the epidermis during treatment.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-sliders-h"></i> Customizable Approach</h4>
            <p>Dr. Nagpal adjusts parameters based on your skin type, condition, and treatment goals for optimal results.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">Why Choose Helios 3 at Dr. Nagpal's Clinic?</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-user-md"></i>
            </div>
            <h3>Expert Supervision</h3>
            <p>All treatments are personally supervised by Dr. Nagpal, ensuring medical-grade precision and safety.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h3>Advanced Technology</h3>
            <p>Our clinic features the latest Helios 3 system with all available attachments for comprehensive treatment.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-smile"></i>
            </div>
            <h3>Personalized Care</h3>
            <p>Custom treatment plans tailored to your specific skin concerns and goals.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Proven Results</h3>
            <p>Thousands of successful treatments performed with visible improvements.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <h3>Minimal Downtime</h3>
            <p>Most patients resume normal activities immediately after treatment.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-certificate"></i>
            </div>
            <h3>Safety First</h3>
            <p>FDA-approved technology with strict safety protocols for all skin types.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Before & After Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">Treatment Results</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Pigmentation-helios-three.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Pigmentation</h3>
              <p>After 3 sessions</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Wrinkles-helios-three.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Wrinkles</h3>
              <p>After 4 sessions</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Tattoo-Removal-halios-three.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Tattoo Removal</h3>
              <p>After 6 sessions</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="section-content bg-light">
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
            <p class="fst-italic">"Dr. Nagpal's Helios 3 treatment completely transformed my sun-damaged skin. I look 10 years younger!"</p>
            <p class="text-end fw-bold">- Simran K., Bathinda</p>
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
            <p class="fst-italic">"My melasma faded significantly after just two sessions with Helios 3. Dr. Nagpal's expertise made all the difference."</p>
            <p class="text-end fw-bold">- Amit S., Bathinda</p>
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
            <p class="fst-italic">"The tattoo removal was painless and effective. Dr. Nagpal explained each step and the results exceeded my expectations."</p>
            <p class="text-end fw-bold">- Priya M., Bathinda</p>
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