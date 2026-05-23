<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('inc/head.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Advanced HIFEM treatment in Bathinda for non-surgical body contouring and muscle building. Call +91 99140 32355 today!">
  <meta name="keywords" content="HIFEM, body contouring Bathinda, non-surgical fat reduction, muscle building, EMSculpt, Dr. Nagpal">
  <title>HIFEM Treatment | Body Contouring & Muscle Building | Dr. Nagpal's Clinic | Bathinda</title>

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
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/HIFEM-Body-Contouring.png') no-repeat center center/cover;
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
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/HIFEM-Body-Contouring.png') no-repeat center center/cover;
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
    .results-timeline {
      position: relative;
      padding-left: 30px;
    }
    .results-timeline:before {
      content: '';
      position: absolute;
      left: 10px;
      top: 0;
      bottom: 0;
      width: 2px;
      background: #f58320;
    }
    .results-step {
      position: relative;
      margin-bottom: 30px;
    }
    .results-step:before {
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
    .comparison-table {
      width: 100%;
      border-collapse: collapse;
      margin: 30px 0;
    }
    .comparison-table th, .comparison-table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    .comparison-table th {
      background-color: #f9f9f9;
      font-weight: 600;
    }
    .comparison-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .treatment-protocol {
      background: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <?php include('inc/header.php'); ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 style="color: white;">HIFEM Body Contouring</h1>
      <p style="color: white;">Non-surgical muscle building and fat reduction with breakthrough electromagnetic technology</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg">Call +91 99140 32355</a>
    </div>
  </section>

  <!-- About HIFEM Section -->
  <section class="section-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/24-hifem-image.png" alt="HIFEM Treatment System" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h2 class="mb-4">About HIFEM Technology</h2>
            <p>High-Intensity Focused Electromagnetic (HIFEM) technology is a revolutionary non-invasive treatment that induces powerful muscle contractions and fat cell apoptosis, resulting in muscle building and fat reduction without surgery or downtime.</p>
            
            <div class="tech-specs mt-4">
              <h4>Key Features:</h4>
              <ul>
                <li>Builds muscle mass and definition</li>
                <li>Reduces stubborn fat deposits</li>
                <li>Non-invasive with no downtime</li>
                <li>FDA-cleared technology</li>
                <li>Visible results in weeks</li>
                <li>Suitable for all body types</li>
              </ul>
            </div>
            </div>
        </div>
      </div>
      <div class="doctor-profile mt-4">
    <h4>Dr. T.S. Nagpal's Expertise with HIFEM</h4>
    <p>With specialized training in body contouring technologies, 
        <strong><a href="/index.php" title="Best Dermatologist in Bathinda">Best Dermatologist in Bathinda</a></strong>, 
        Dr. T.S. Nagpal has helped numerous patients achieve their ideal physique through customized HIFEM treatment protocols.</p>
    <p>"HIFEM represents a paradigm shift in body sculpting. It's the only technology that can simultaneously build muscle and reduce fat without surgery - a true game changer." 
        - <strong><a href="/laser-hair-removal-bathinda.php" title="Laser Hair and Skin Clinic">Laser Hair and Skin Clinic</a></strong></p>
</div>

    </div>
  </section>
   <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="mb-4" style="color: white;">Ready to Transform Your Body?</h2>
      <p class="lead mb-5" style="color: white;">Experience the power of HIFEM technology under Dr. Nagpal's expert care in Bathinda.</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg me-3"><i class="fas fa-phone-alt me-2"></i> Call +91 99140 32355</a>
      <a href="contact.php" class="btn btn-outline-light btn-lg"><i class="fas fa-calendar-alt me-2"></i> Book Online</a>
    </div>
  </section>


  <!-- Applications Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">HIFEM Treatment Areas</h2>
      
      <div class="row">
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-dumbbell text-primary me-2"></i> Muscle Building</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Abdominal muscles (6-pack)</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Buttocks lifting</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Arm toning</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Thigh sculpting</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-weight text-primary me-2"></i> Fat Reduction</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Belly fat</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Love handles</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Back fat</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Double chin</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">How HIFEM Works</h2>
      
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/How-HIFEM-Works.png" alt="HIFEM Treatment Process" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="benefit-item">
            <h4><i class="fas fa-bolt"></i> Supermax Contractions</h4>
            <p>HIFEM induces up to 20,000 supramaximal muscle contractions in 30 minutes - impossible to achieve through voluntary exercise.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-muscle"></i> Muscle Building</h4>
            <p>These extreme contractions cause muscle fibers to adapt through hypertrophy, increasing muscle thickness and definition.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-fire"></i> Fat Reduction</h4>
            <p>The intense muscle activity triggers fat cell apoptosis (programmed cell death) and metabolic processes that eliminate fat cells.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-sliders-h"></i> Customizable Treatment</h4>
            <p>Dr. Nagpal adjusts the intensity and focus based on your specific body goals and muscle groups.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Treatment Protocol Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">Treatment Protocol</h2>
      
      <div class="row">
        <div class="col-md-6">
          <div class="treatment-protocol">
            <h4><i class="fas fa-calendar-check text-primary me-2"></i> Recommended Sessions</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 4-6 treatments total</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 2-3 sessions per week</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 30 minutes per session</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> No recovery time needed</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-protocol">
            <h4><i class="fas fa-user-clock text-primary me-2"></i> During Treatment</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Lie comfortably during procedure</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Feel intense muscle contractions</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> No pain or discomfort</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Resume normal activities immediately</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Results Timeline Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">What to Expect: Results Timeline</h2>
      
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="results-timeline">
            <div class="results-step">
              <h4>Immediately After</h4>
              <p>Muscles may feel fatigued as after an intense workout. Some patients notice improved muscle definition right away.</p>
            </div>
            <div class="results-step">
              <h4>2-4 Weeks</h4>
              <p>Initial muscle building becomes noticeable. Fat reduction process begins at cellular level.</p>
            </div>
            <div class="results-step">
              <h4>6-8 Weeks</h4>
              <p>Peak muscle growth and fat reduction effects become visible. Most patients achieve 19% fat reduction and 16% muscle growth.</p>
            </div>
            <div class="results-step">
              <h4>3-6 Months</h4>
              <p>Final results stabilize. Maintenance sessions recommended every 3-6 months to preserve results.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">Why Choose HIFEM at Dr. Nagpal's Clinic?</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-user-md"></i>
            </div>
            <h3>Medical Expertise</h3>
            <p>Dr. Nagpal's anatomical knowledge ensures optimal treatment placement for balanced results.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h3>Advanced Technology</h3>
            <p>Latest generation HIFEM system with precise control over muscle groups.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-smile"></i>
            </div>
            <h3>Personalized Plans</h3>
            <p>Customized treatment protocols based on your body composition and goals.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Proven Results</h3>
            <p>Clinically demonstrated muscle growth and fat reduction.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <h3>No Downtime</h3>
            <p>Return to normal activities immediately after treatment.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-certificate"></i>
            </div>
            <h3>Safe & Effective</h3>
            <p>FDA-approved technology with no side effects.</p>
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
            <img src="assets/img/gallery/Abdominal-Sculpting-hifem.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Abdominal Sculpting</h3>
              <p>After 4 sessions</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Buttocks-Lifting-hifem.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Buttocks Lifting</h3>
              <p>After 6 sessions</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Arm-Toning-hifem.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Arm Toning</h3>
              <p>After 4 sessions</p>
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
            <p class="fst-italic">"After having two children, I struggled with belly fat. HIFEM gave me back my pre-pregnancy abs without any surgery!"</p>
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
            <p class="fst-italic">"As a fitness enthusiast, I was amazed that 4 HIFEM sessions gave me better abs than 6 months of daily crunches."</p>
            <p class="text-end fw-bold">- Aman P., Bathinda</p>
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
            <p class="fst-italic">"The butt lift results were incredible - I finally have the rounded, lifted look I wanted without implants."</p>
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