<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('inc/head.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="OxyGeneo Facial in Bathinda - Triple-action super facial for glowing skin. Exfoliation, infusion & oxygenation in one treatment. Call +91 99140 32355">
  <meta name="keywords" content="OxyGeneo, super facial, skin rejuvenation, oxygen facial, Bathinda, Dr. Nagpal">
  <title>OxyGeneo Facial | Triple-Action Super Facial | Skin Rejuvenation | Dr. Nagpal's Clinic | Bathinda</title>

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
    /*background-color: #f9f9f9; */
    border-radius: 5px; /* Rounded corners for a softer look */
}
    .hero-section {
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/OxyGeneo-Super-Facial.png') no-repeat center center/cover;
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
      background: #f4821f;
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
      color: #f4821f;
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
      background-color: #f4821f;
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
      color: #f4821f;
      margin-right: 10px;
    }
    .cta-section {
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/OxyGeneo-Super-Facial.png') no-repeat center center/cover;
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
      color: #f4821f;
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
      color: #f4821f;
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
      color: #f4821f;
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
      border-bottom: 2px solid #f4821f;
      padding-bottom: 10px;
      margin-bottom: 15px;
    }
    .doctor-profile {
      background: #f9f9f9;
      padding: 30px;
      border-radius: 10px;
      margin-top: 30px;
    }
    .process-timeline {
      position: relative;
      padding-left: 30px;
    }
    .process-timeline:before {
      content: '';
      position: absolute;
      left: 10px;
      top: 0;
      bottom: 0;
      width: 2px;
      background: #f4821f;
    }
    .process-step {
      position: relative;
      margin-bottom: 30px;
    }
    .process-step:before {
      content: '';
      position: absolute;
      left: -35px;
      top: 5px;
      width: 16px;
      height: 16px;
      border-radius: 50%;
      background: #f4821f;
      border: 3px solid #fff;
    }
    .capsule-card {
      border-left: 4px solid #f4821f;
      padding: 15px;
      margin-bottom: 20px;
      background: #f9f9f9;
    }
    .capsule-card h5 {
      color: #f4821f;
    }
  </style>
</head>
<body>
  <?php include('inc/header.php'); ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 style="color: white;">OxyGeneo Super Facial</h1>
      <p style="color: white;">Triple-action skin rejuvenation: Exfoliation, Infusion & Oxygenation in one treatment</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg">Call +91 99140 32355</a>
    </div>
  </section>

  <!-- About OxyGeneo Section -->
  <section class="section-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/About-OxyGeneo-Facial.png" alt="OxyGeneo Treatment System" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h2 class="mb-4">About OxyGeneo Facial</h2>
            <p>OxyGeneo is a revolutionary 3-in-1 facial treatment that combines exfoliation, nutrient infusion, and oxygenation to deliver glowing, rejuvenated skin with immediate visible results. This non-invasive treatment triggers the skin's natural renewal process while delivering active ingredients deep into the skin.</p>
            
            <div class="tech-specs mt-4">
              <h4>Key Benefits:</h4>
              <ul>
                <li>Instant "glow" after just one treatment</li>
                <li>No downtime - resume activities immediately</li>
                <li>Stimulates natural collagen production</li>
                <li>Customizable for different skin concerns</li>
                <li>Suitable for all skin types</li>
                <li>Complements other facial treatments</li>
              </ul>
            </div>
            </div>
        </div>
       <div class="doctor-profile mt-4">
    <h4>Dr. T.S. Nagpal on OxyGeneo</h4>
    <p>"OxyGeneo represents the next generation of facial treatments. Unlike traditional facials that only work on the surface, 
        <strong><a href="/index.php" title="Best Dermatologist in Bathinda">Best Dermatologist in Bathinda</a></strong> 
        ensures that OxyGeneo’s patented technology creates a 'skin flood' effect, delivering nutrients where they're most needed while stimulating the skin's natural renewal process."</p>
    <p>At <strong><a href="/laser-hair-removal-bathinda.php" title="Laser Hair and Skin Clinic">Laser Hair and Skin Clinic</a></strong>, we specialize in advanced skin treatments like OxyGeneo, ensuring superior skin rejuvenation for every patient.</p>
</div>

      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="mb-4" style="color: white;">Ready for Your Glow Transformation?</h2>
      <p class="lead mb-5" style="color: white;">Experience the power of OxyGeneo Super Facial at Dr. Nagpal's Clinic in Bathinda.</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg me-3"><i class="fas fa-phone-alt me-2"></i> Call +91 99140 32355</a>
      <a href="contact.php" class="btn btn-outline-light btn-lg"><i class="fas fa-calendar-alt me-2"></i> Book Online</a>
    </div>
  </section>

  <!-- Treatment Process Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">The OxyGeneo 3-Step Process</h2>
      
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="process-timeline">
            <div class="process-step">
              <h4>1. Exfoliation</h4>
              <p>Gentle yet effective exfoliation removes dead skin cells using OxyGeneo's unique NeoRevive Capsules, preparing the skin for optimal absorption of active ingredients.</p>
            </div>
            <div class="process-step">
              <h4>2. Infusion</h4>
              <p>Powerful active ingredients are massaged into the skin using the OxyGeneo handpiece, penetrating deeper than traditional facials thanks to the skin's prepared state.</p>
            </div>
            <div class="process-step">
              <h4>3. Oxygenation</h4>
              <p>The treatment triggers a natural oxygenation process (the "skin flood") as capillaries dilate, bringing fresh oxygen and nutrients to the skin's surface for a healthy glow.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Capsules Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">Customizable Treatment Capsules</h2>
      
      <div class="row">
        <div class="col-md-4">
          <div class="capsule-card">
            <h5><i class="fas fa-leaf me-2"></i>NeoRevive</h5>
            <p>For general rejuvenation and glow. Contains natural fruit enzymes and marine extracts to brighten and even skin tone.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="capsule-card">
            <h5><i class="fas fa-spa me-2"></i>NeoBright</h5>
            <p>Targets hyperpigmentation and dark spots with licorice root extract and vitamin C derivatives.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="capsule-card">
            <h5><i class="fas fa-shield-alt me-2"></i>NeoPurify</h5>
            <p>For acne-prone skin with salicylic acid and tea tree oil to deep clean pores and reduce breakouts.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="capsule-card">
            <h5><i class="fas fa-clock me-2"></i>NeoAge</h5>
            <p>Anti-aging formula with peptides and antioxidants to reduce fine lines and improve elasticity.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="capsule-card">
            <h5><i class="fas fa-tint me-2"></i>NeoHydrate</h5>
            <p>Intense hydration with hyaluronic acid and ceramides for dry, dehydrated skin.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="capsule-card">
            <h5><i class="fas fa-sun me-2"></i>NeoProtect</h5>
            <p>For sun-damaged skin with reparative ingredients to reverse UV damage.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">Benefits of OxyGeneo Facial</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h3>Instant Results</h3>
            <p>Visible glow and improved skin texture immediately after the first treatment.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-heart"></i>
            </div>
            <h3>Natural Process</h3>
            <p>Works with your skin's biology to enhance natural renewal processes.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h3>No Downtime</h3>
            <p>30-45 minute treatment with no recovery time needed.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-layer-group"></i>
            </div>
            <h3>Deep Penetration</h3>
            <p>Active ingredients reach deeper layers than traditional facials.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-user-cog"></i>
            </div>
            <h3>Customizable</h3>
            <p>Tailored to address your specific skin concerns and goals.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-calendar-check"></i>
            </div>
            <h3>Cumulative Effects</h3>
            <p>Best results seen after a series of treatments with long-lasting benefits.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ideal For Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">Who Can Benefit from OxyGeneo?</h2>
      
      <div class="row">
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-check-circle text-primary me-2"></i> Ideal Candidates</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dull, tired-looking skin</li>
              <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Early signs of aging</li>
              <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Uneven skin tone/texture</li>
              <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Mild acne or congestion</li>
              <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dry or dehydrated skin</li>
              <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Preparing for special events</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-times-circle text-primary me-2"></i> Not Recommended For</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Active skin infections</li>
              <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Severe rosacea</li>
              <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Open wounds or lesions</li>
              <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Recent cosmetic procedures</li>
              <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Certain skin conditions</li>
              <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Pregnancy (some capsules)</li>
            </ul>
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
            <img src="assets/img/gallery/Skin-Brightening.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Skin Brightening</h3>
              <p>After 1 session</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Hydration-Boost.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Hydration Boost</h3>
              <p>After 2 sessions</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Fine-Line-Reduction.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Fine Line Reduction</h3>
              <p>After 4 sessions</p>
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
            <p class="fst-italic">"I got OxyGeneo before my wedding and my makeup artist couldn't believe how flawless my skin looked. Best facial I've ever had!"</p>
            <p class="text-end fw-bold">- Priya K., Bathinda</p>
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
            <p class="fst-italic">"As a busy professional, I love that I can get this treatment during lunch and return to work glowing, with no redness or downtime."</p>
            <p class="text-end fw-bold">- Rohan S., Bathinda</p>
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
            <p class="fst-italic">"After just 3 sessions, my coworkers keep asking what I'm doing differently. My skin hasn't looked this good since my 20s!"</p>
            <p class="text-end fw-bold">- Neha M., Bathinda</p>
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
      const featureBoxes = document.querySelectorAll('.feature-box, .service-card, .capsule-card');
      
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