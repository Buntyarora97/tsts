<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('inc/head.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Advanced HIFU treatment in Bathinda for non-surgical face lifting and skin tightening. Call +91 99140 32355 today!">
  <meta name="keywords" content="HIFU, non-surgical facelift Bathinda, skin tightening, ultrasound lifting, face rejuvenation, Dr. Nagpal">
  <title>HIFU Treatment | Non-Surgical Face Lift | Dr. Nagpal's Clinic | Bathinda</title>

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
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/Hifu-traetment.png') no-repeat center center/cover;
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
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/gallery/Hifu-traetment.png') no-repeat center center/cover;
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
  </style>
</head>
<body>
  <?php include('inc/header.php'); ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 style="color: white;">HIFU Non-Surgical Face Lift</h1>
      <p style="color: white;">Advanced ultrasound technology for natural-looking facial rejuvenation without surgery</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg">Call +91 99140 32355</a>
    </div>
  </section>

  <!-- About HIFU Section -->
  <section class="section-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/about-HIFU-Treatment.png" alt="HIFU Treatment System" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h2 class="mb-4">About HIFU Treatment</h2>
            <p>High-Intensity Focused Ultrasound (HIFU) is a revolutionary non-invasive treatment that uses focused ultrasound energy to stimulate collagen production deep within the skin and SMAS layer (the same layer addressed in surgical facelifts), resulting in natural-looking lifting and tightening.</p>
            
            <div class="tech-specs mt-4">
              <h4>Key Features:</h4>
              <ul>
                <li>Non-surgical alternative to facelifts</li>
                <li>Stimulates new collagen production</li>
                <li>Targets multiple skin layers (SMAS included)</li>
                <li>No downtime or recovery period</li>
                <li>Gradual, natural-looking results</li>
                <li>Suitable for most skin types</li>
              </ul>
            </div>
            
          
          </div>
        </div>
      </div>
       <div class="doctor-profile mt-4">
    <h4>Dr. T.S. Nagpal's Expertise with HIFU</h4>
    <p>With specialized training in non-surgical facial rejuvenation, 
        <a href="/index.php" title="Best Dermatologist in Bathinda"><strong>Dr. T.S. Nagpal</strong></a> 
        has mastered the art of customizing HIFU treatments for each patient's unique facial anatomy and aging concerns.</p>
    <p>"HIFU represents a breakthrough in non-surgical facial rejuvenation. 
        My approach focuses on achieving natural-looking lifting while maintaining each patient's unique facial characteristics." 
        -Dr. T.S. Nagpal</p>
</div>

    </div>
  </section>
  
   <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="mb-4" style="color: white;">Ready for a Non-Surgical Face Lift?</h2>
      <p class="lead mb-5" style="color: white;">Experience the power of HIFU technology under Dr. Nagpal's expert care in Bathinda.</p>
      <a href="tel:+919914032355" class="btn btn-primary btn-lg me-3"><i class="fas fa-phone-alt me-2"></i> Call +91 99140 32355</a>
      <a href="contact.php" class="btn btn-outline-light btn-lg"><i class="fas fa-calendar-alt me-2"></i> Book Online</a>
    </div>
  </section>


  <!-- Applications Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">HIFU Treatment Areas</h2>
      
      <div class="row">
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-face-smile text-primary me-2"></i> Facial Rejuvenation</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Brow lifting</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Cheek lifting</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Jawline definition</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Chin tightening</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="treatment-area">
            <h4><i class="fas fa-spa text-primary me-2"></i> Skin Tightening</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Neck laxity</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Décolletage</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Under-chin area</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Marionette lines</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">How HIFU Works</h2>
      
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="assets/img/gallery/How-HIFU-Works.png" alt="HIFU Treatment Process" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <div class="benefit-item">
            <h4><i class="fas fa-bullseye"></i> Precise Energy Delivery</h4>
            <p>HIFU delivers focused ultrasound energy to specific depths beneath the skin's surface without affecting surrounding tissues.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-temperature-high"></i> Thermal Effect</h4>
            <p>The energy creates controlled thermal injury points that stimulate the body's natural healing response.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-layer-group"></i> Collagen Stimulation</h4>
            <p>This triggers neocollagenesis - the production of new collagen that gradually tightens and lifts the skin.</p>
          </div>
          <div class="benefit-item">
            <h4><i class="fas fa-sliders-h"></i> Customizable Treatment</h4>
            <p>Dr. Nagpal adjusts the depth and intensity based on your specific concerns and facial anatomy.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HIFU vs Surgical Comparison -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">HIFU vs Surgical Facelift</h2>
      
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <table class="comparison-table">
            <thead>
              <tr>
                <th>Feature</th>
                <th>HIFU</th>
                <th>Surgical Facelift</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Invasiveness</td>
                <td><i class="fas fa-check text-success"></i> Non-invasive</td>
                <td><i class="fas fa-times text-danger"></i> Surgical procedure</td>
              </tr>
              <tr>
                <td>Downtime</td>
                <td><i class="fas fa-check text-success"></i> None to minimal</td>
                <td><i class="fas fa-times text-danger"></i> 2-4 weeks recovery</td>
              </tr>
              <tr>
                <td>Anesthesia</td>
                <td><i class="fas fa-check text-success"></i> Not required</td>
                <td><i class="fas fa-times text-danger"></i> General/local required</td>
              </tr>
              <tr>
                <td>Results Duration</td>
                <td>1-2 years (with maintenance)</td>
                <td>5-10 years</td>
              </tr>
              <tr>
                <td>Natural-looking</td>
                <td><i class="fas fa-check text-success"></i> Gradual, subtle improvement</td>
                <td>More dramatic change</td>
              </tr>
              <tr>
                <td>Cost</td>
                <td><i class="fas fa-check text-success"></i> More affordable</td>
                <td><i class="fas fa-times text-danger"></i> Higher cost</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="section-content">
    <div class="container">
      <h2 class="section-title">Why Choose HIFU at Dr. Nagpal's Clinic?</h2>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-user-md"></i>
            </div>
            <h3>Expert Precision</h3>
            <p>Dr. Nagpal's anatomical knowledge ensures optimal energy placement for natural results.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h3>Advanced Technology</h3>
            <p>Latest generation HIFU system with multiple depth cartridges for comprehensive treatment.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-smile"></i>
            </div>
            <h3>Personalized Plans</h3>
            <p>Customized treatment protocols based on your facial structure and aging pattern.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box text-center">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Proven Results</h3>
            <p>Clinically demonstrated lifting and tightening effects.</p>
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
            <p>FDA-approved technology with minimal side effects.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Results Timeline Section -->
  <section class="section-content bg-light">
    <div class="container">
      <h2 class="section-title">What to Expect: Results Timeline</h2>
      
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="recovery-timeline">
            <div class="recovery-step">
              <h4>Immediately After</h4>
              <p>Mild redness or swelling that typically resolves within hours. Some patients notice slight lifting effects immediately.</p>
            </div>
            <div class="recovery-step">
              <h4>Week 2-4</h4>
              <p>Initial collagen stimulation begins. Skin may feel tighter with improved texture.</p>
            </div>
            <div class="recovery-step">
              <h4>Month 1-2</h4>
              <p>Gradual lifting becomes noticeable as new collagen forms. Cheekbones appear more defined.</p>
            </div>
            <div class="recovery-step">
              <h4>Month 3-6</h4>
              <p>Full results become apparent with optimal lifting and tightening effects.</p>
            </div>
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
            <img src="assets/img/gallery/Lower-Face-Lift-hifu.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Lower Face Lift</h3>
              <p>After 3 months</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Brow-Lift-hifu.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Brow Lift</h3>
              <p>After 2 months</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-card">
            <img src="assets/img/gallery/Neck-Tightening-hifu.png" class="card-img-top" alt="Before Treatment">
            <div class="card-body text-center">
              <h3>Neck Tightening</h3>
              <p>After 4 months</p>
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
            <p class="fst-italic">"At 52, I wasn't ready for surgery but wanted to address my sagging jawline. HIFU gave me a natural lift that made me look refreshed."</p>
            <p class="text-end fw-bold">- Priyanka M., Bathinda</p>
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
            <p class="fst-italic">"Dr. Nagpal's precise technique with HIFU gave me subtle but noticeable lifting that made me look 5 years younger without looking 'done'."</p>
            <p class="text-end fw-bold">- Rajiv K., Bathinda</p>
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
            <p class="fst-italic">"I was amazed that I could get my HIFU treatment during lunch and return to work immediately. The gradual results were worth the wait!"</p>
            <p class="text-end fw-bold">- Simran J., Bathinda</p>
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