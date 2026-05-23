<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('inc/head.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Advanced HydraFacial treatment in Bathinda for deep cleansing, exfoliation and hydration. Call +91 99140 32355 today!">
  <meta name="keywords" content="HydraFacial, facial treatment Bathinda, skin rejuvenation, deep cleansing, hydration, Dr. Nagpal">
  <title>HydraFacial | Advanced Skin Treatment | Dr. Nagpal's Clinic | Bathinda</title>

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
    .hero-section {
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/HydraFacial-image.png') no-repeat center center/cover;
      color: #fff;
      padding: 150px 0;
      text-align: center;
      position: relative;
    }
    p {
    font-size: 18px; /* Text ko readable banane ke liye */
    color: #333; /* Dark gray color for better readability */
    line-height: 1.6; /* Line spacing badhane ke liye */
    font-family: Arial, sans-serif; /* Clean and professional font */
    padding: 10px; /* Thoda space dene ke liye */
    border-radius: 5px; /* Rounded corners for a softer look */
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
      background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('assets/img/gallery/HydraFacial-image.png') no-repeat center center/cover;
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
    .steps-timeline {
      position: relative;
      padding-left: 30px;
    }
    .steps-timeline:before {
      content: '';
      position: absolute;
      left: 10px;
      top: 0;
      bottom: 0;
      width: 2px;
      background: #f58320;
    }
    .treatment-step {
      position: relative;
      margin-bottom: 30px;
    }
    .treatment-step:before {
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
    .serum-card {
      border: none;
      border-radius: 10px;
      background: #f9f9f9;
      padding: 20px;
      margin-bottom: 20px;
      transition: all 0.3s ease;
    }
    .serum-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .serum-icon {
      font-size: 2rem;
      color: #f58320;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <?php include('inc/header.php'); ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 style="color: white;">HydraFacial Advanced Skin Treatment</h1>
      <p style="color: white;">Multi-step facial treatment for deep cleansing, exfoliation, extraction and hydration</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg">Call +91 99140 32355</a>
    </div>
  </section>

  <!-- About HydraFacial Section -->
  <section class="section-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/About-HydraFacial.png" alt="HydraFacial Treatment System" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h2 class="mb-4">About HydraFacial</h2>
            <p>HydraFacial is a revolutionary non-invasive skin treatment that combines cleansing, exfoliation, extraction, hydration and antioxidant protection in one procedure. This medical-grade facial delivers instant, noticeable results with no downtime.</p>
            
            <div class="tech-specs mt-4">
              <h4>Key Benefits:</h4>
              <ul>
                <li>Deeply cleanses and exfoliates</li>
                <li>Extracts impurities and blackheads</li>
                <li>Delivers intense hydration</li>
                <li>Reduces fine lines and wrinkles</li>
                <li>Improves skin tone and texture</li>
                <li>Suitable for all skin types</li>
              </ul>
            </div>
            
           
          </div>
        </div>
      </div>
       <div class="doctor-profile mt-4">
    <h4>Dr. T.S. Nagpal's Expertise with HydraFacial</h4>
    <p>With extensive experience in advanced facial treatments, 
        <strong><a href="/index.php" title="Best Dermatologist in Bathinda">Best Dermatologist in Bathinda</a></strong>, 
        Dr. Nagpal customizes each HydraFacial to address individual skin concerns while maintaining the highest safety standards.</p>
    <p>"HydraFacial is one of the most effective non-invasive treatments for immediate skin rejuvenation. 
        I customize each treatment with specialized serums to target my patients' specific concerns." 
        - <strong><a href="/laser-hair-removal-bathinda.php" title="Laser Hair and Skin Clinic">Laser Hair and Skin Clinic</a></strong></p>
</div>

    </div>
  </section>

 <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="mb-4" style="color: white;">Ready for Radiant Skin?</h2>
      <p class="lead mb-5" style="color: white;">Experience the transformative power of HydraFacial under Dr. Nagpal's expert care in Bathinda.</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg me-3"><i class="fas fa-phone-alt me-2"></i> Call +91 99140 32355</a>
      <a href="contact.php" class="btn btn-outline-light btn-lg"><i class="fas fa-calendar-alt me-2"></i> Book Online</a>
    </div>
  </section>

  <!-- Treatment Steps Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">The HydraFacial Process</h2>
      
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="steps-timeline">
            <div class="treatment-step">
              <h4>Step 1: Cleansing & Exfoliation</h4>
              <p>Gentle exfoliation removes dead skin cells and reveals fresh new skin underneath. The vortex cleansing tip removes debris from pores.</p>
            </div>
            <div class="treatment-step">
              <h4>Step 2: Acid Peel</h4>
              <p>A mild glycolic/salicylic acid peel helps loosen deep pore debris without irritation. This step is customizable based on skin sensitivity.</p>
            </div>
            <div class="treatment-step">
              <h4>Step 3: Extraction</h4>
              <p>Painless vortex suction removes blackheads and impurities from pores. Far more comfortable than manual extractions.</p>
            </div>
            <div class="treatment-step">
              <h4>Step 4: Hydration</h4>
              <p>Antioxidant-rich serums are infused into the skin using vortex technology for deep hydration and nourishment.</p>
            </div>
            <div class="treatment-step">
              <h4>Step 5: Protection</h4>
              <p>Final serums and creams are applied to protect and enhance your glowing results.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Customization Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">Customizable Treatment Options</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="serum-card text-center">
            <div class="serum-icon">
              <i class="fas fa-leaf"></i>
            </div>
            <h3>Brightalive</h3>
            <p>For brightening and reducing hyperpigmentation with botanical extracts and vitamin C.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="serum-card text-center">
            <div class="serum-icon">
              <i class="fas fa-spa"></i>
            </div>
            <h3>Britenol</h3>
            <p>Targets uneven skin tone and dark spots with a blend of brightening agents.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="serum-card text-center">
            <div class="serum-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Antioxidant Defense</h3>
            <p>Protects against environmental damage with powerful antioxidants.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="serum-card text-center">
            <div class="serum-icon">
              <i class="fas fa-fire"></i>
            </div>
            <h3>Beta-HD</h3>
            <p>For acne-prone skin with salicylic acid to clear breakouts.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="serum-card text-center">
            <div class="serum-icon">
              <i class="fas fa-heart"></i>
            </div>
            <h3>Redness Relief</h3>
            <p>Calms sensitive skin and reduces redness with soothing botanicals.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="serum-card text-center">
            <div class="serum-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h3>Age Defy</h3>
            <p>Targets fine lines and wrinkles with peptides and growth factors.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">Why Choose HydraFacial at Dr. Nagpal's Clinic?</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-user-md"></i>
            </div>
            <h3>Medical Expertise</h3>
            <p>Dr. Nagpal's deep understanding of skin physiology ensures optimal treatment customization.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h3>Advanced Technology</h3>
            <p>Latest generation HydraFacial system with all available treatment options.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-smile"></i>
            </div>
            <h3>Personalized Approach</h3>
            <p>Customized treatments based on your specific skin concerns and goals.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Immediate Results</h3>
            <p>Visible improvement in skin texture and radiance after just one treatment.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <h3>No Downtime</h3>
            <p>Return to normal activities immediately with glowing skin.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-certificate"></i>
            </div>
            <h3>Safe & Effective</h3>
            <p>FDA-approved technology suitable for all skin types.</p>
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
            <img src="assets/img/gallery/Acne-Prone-Skin.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Acne-Prone Skin</h3>
              <p>After 3 sessions</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Hyperpigmentation-image.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Hyperpigmentation</h3>
              <p>After 4 sessions</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Aging-Skin.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Aging Skin</h3>
              <p>After 2 sessions</p>
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
            <p class="fst-italic">"My skin has never felt so clean and refreshed! The HydraFacial gave me an instant glow that lasted for weeks."</p>
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
            <p class="fst-italic">"Dr. Nagpal's customized HydraFacial completely transformed my acne-prone skin. No more breakouts and my pores look so much smaller!"</p>
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
              <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="fst-italic">"I get a HydraFacial before every special occasion. It's my secret to camera-ready skin with zero downtime."</p>
            <p class="text-end fw-bold">- Simran M., Bathinda</p>
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
      const featureBoxes = document.querySelectorAll('.feature-box, .serum-card');
      
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