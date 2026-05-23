<!-- HeaderComponent.html -->
<!-- CSS for the Header Component -->
<style>
  /* OFFCANVAS (MOBILE MENU) */
  .offcanvas__area {
    position: fixed;
    top: 0;
    left: 0;
    width: 80%;
    max-width: 300px;
    height: 100%;
    background: #ecf0f1; /* Light offcanvas background */
    z-index: 1050;
    transform: translateX(-100%);
    transition: transform 0.3s ease-in-out;
    overflow-y: auto;
  }
  .offcanvas__area.active {
    transform: translateX(0);
  }
  .offcanvas__wrapper {
    padding: 20px;
    height: 100%;
    display: flex;
    flex-direction: column;
  }
  .offcanvas__close {
    text-align: right;
  }
  .offcanvas__close-btn {
    background: none;
    border: none;
    font-size: 20px;
    color: #2c3e50;
  }
  .offcanvas__content {
    margin-top: 20px;
    flex-grow: 1;
  }
  .side-info-contact {
    margin-top: 20px;
    text-align: center;
    color: #2c3e50; /* Dark text for contrast on light offcanvas */
  }

  /* Body overlay for offcanvas */
  .body-overlay {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1040;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
  }
  .body-overlay.active {
    opacity: 1;
    visibility: visible;
  }

  /* DESKTOP HEADER STYLES */
  .tp-header-area {
    background-color: #2c3e50; /* Dark blue-gray */
    color: #fff;
  }
  .tp-header-top {
    background-color: #34495e; /* Slightly lighter top bar */
  }
  .topbar .content p {
    margin: 0;
    color: #ecf0f1; /* Light text */
    font-size: 14px;
  }
  .tp-header-exgency {
    background-color: #2c3e50;
    padding: 15px 0;
  }
  .tp-header-logo img {
    max-width: 100px;
    height: auto;
  }
  .tp-header-exgency-content a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
  }
  .tp-header-exgency-icon span {
    display: inline-block;
    width: 42px;
    height: 42px;
    line-height: 42px;
    border-radius: 50%;
    background-color: #e67e22; /* Accent orange */
    text-align: center;
    color: #fff;
    font-size: 18px;
  }
  .tp-header-exgency-call a {
    color: #bdc3c7;
    font-size: 16px;
    text-decoration: none;
  }
  .offcanvas-open-btn {
    background-color: #e74c3c; /* Bright red for mobile menu button */
    border: none;
    color: #fff;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    
  }
  .tp-header-bottom {
    background-color: #2c3e50;
    padding: 10px 0;
  }
  
  /* MAIN NAVIGATION STYLES */
  .tp-main-menu-content ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
  .tp-main-menu-content ul li {
    position: relative;
    margin: 0 10px;
  }
  .tp-main-menu-content ul li a {
    color: black;
    text-decoration: none;
    font-size: 16px;
    padding: 10px 15px;
    transition: all 0.3s ease;
    display: block;
  }
  .tp-main-menu-content ul li a:hover {
    color: #e67e22;
  }
  .tp-submenu {
    position: absolute;
    background: #fff;
    min-width: 220px;
    z-index: 2000;
    padding: 10px 0;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-radius: 4px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    top: 100%;
    left: 0;
  }
  .tp-main-menu-content ul li:hover .tp-submenu {
    opacity: 1;
    visibility: visible;
  }
  .tp-submenu li {
    padding: 0;
    display: block;
  }
  .tp-submenu li a {
    color: #333;
    padding: 8px 20px;
    font-size: 14px;
    white-space: nowrap;
  }
  .tp-submenu li a:hover {
    color: #e67e22;
    background-color: #f9f9f9;
  }

  /* MOBILE MENU STYLES */
  .tp-main-menu-mobile ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .tp-main-menu-mobile ul li {
    position: relative;
    border-bottom: 1px solid #ddd;
  }
  .tp-main-menu-mobile ul li:last-child {
    border-bottom: none;
  }
  .tp-main-menu-mobile ul li a {
    color: black;
    font-size: 16px;
    text-decoration: none;
    display: block;
    padding: 12px 0;
    transition: all 0.3s ease;
  }
  .tp-main-menu-mobile ul li a:hover {
    color: #e67e22;
    padding-left: 10px;
  }
  .mobile-submenu {
    display: none;
    padding-left: 15px;
    background-color: rgba(0,0,0,0.05);
  }
  .mobile-submenu li {
    border-bottom: 1px solid #eee;
  }
  .mobile-submenu li:last-child {
    border-bottom: none;
  }
  .mobile-submenu li a {
    font-size: 14px !important;
    padding: 10px 0 !important;
  }
  .mobile-menu-toggle {
    position: absolute;
    right: 0;
    top: 12px;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .mobile-menu-toggle:after {
    content: '+';
    font-size: 18px;
    color: #2c3e50;
  }
  .mobile-menu-toggle.active:after {
    content: '-';
  }

  /* WhatsApp Button */
  .whatsapp-chat {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
  }
  .whatsapp-chat a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background-color: #25d366;
    color: #fff;
    border-radius: 50%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-decoration: none;
    font-size: 28px;
    transition: all 0.3s ease;
  }
  .whatsapp-chat a:hover {
    background-color: #1ebe5d;
    transform: scale(1.1);
  }

  /* Responsive adjustments */
  @media (max-width: 1199px) {
    .tp-main-menu-content ul li {
      margin: 0 5px;
    }
    .tp-main-menu-content ul li a {
      padding: 10px 8px;
      font-size: 15px;
    }
  }
  
  @media (max-width: 991px) {
    .tp-header-top,
    .tp-header-exgency .tp-header-logo,
    .tp-header-exgency-call {
      text-align: center;
    }
    .tp-header-bottom {
      display: none;
    }
  }
  
  @media (max-width: 767px) {
    .tp-header-exgency {
      padding: 10px 0;
    }
    .tp-header-logo img {
      max-width: 80px;
    }
  }
</style>

<!-- Header Component HTML -->
<header>
  <div class="tp-header-area">
    <!-- Offcanvas Area (Mobile Menu) -->
    <div class="offcanvas__area" id="offcanvasArea">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
          <button class="offcanvas__close-btn" id="offcanvasCloseBtn">
            <i class="fa fa-times"></i>
          </button>
        </div>
        <div class="offcanvas__content">
          <div class="offcanvas__top mb-3 d-flex justify-content-between align-items-center">
            <div class="offcanvas__logo">
              <a href="index.php">
                <img src="assets/img/logo/logo2.png" alt="logo" class="img-fluid">
              </a>
            </div>
          </div>
          <!-- Mobile Menu Items -->
          <div class="tp-main-menu-mobile">
            <ul class="list-unstyled">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li>
                <a href="#">Skin Care</a>
                <span class="mobile-menu-toggle"></span>
                <ul class="mobile-submenu">
                  <li><a href="/wrinkles-treatment-bathinda.php">Wrinkles Treatment</a></li>
                  <li><a href="/warts-removal-bathinda.php">Warts Removal</a></li>
                  <li><a href="/depigmentation-treatment-bathinda.php">De-Pigmentation Treatment</a></li>
                  <li><a href="/keloid-treatment-bathinda.php">Keloid Treatment</a></li>
                  <li><a href="/mole-removal-bathinda.php">Mole Removal</a></li>
                  <li><a href="/dark-circles-removal-bathinda.php">Dark Circle Removal</a></li>
                  <li><a href="/skin-resurfacing-bathinda.php">Skin Re-surfacing</a></li>
                  <li><a href="/acne-scar-treatment-Bathinda.php">Acne Scar Treatment</a></li>
                  <li><a href="/permanent-tattoo-removal-bathinda.php">Tattoo Removal</a></li>
                  <li><a href="/scar-treatment-bathinda.php">Scar Treatment</a></li>
                  <li><a href="/xanthelasma-removal-bathinda.php">Xanthelasma Treatment</a></li>
                  <li><a href="/burns-treatment-bathinda.php">Burns Treatment</a></li>
                  <li><a href="/laser-hair-removal-bathinda.php">Laser Hair Removal</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Hair Treatment</a>
                <span class="mobile-menu-toggle"></span>
                <ul class="mobile-submenu">
                  <li><a href="/gfc-treatment-bathinda.php">Growth Factor Concentrate</a></li>
                  <li><a href="/prp-treatment-bathinda.php">Platelet-rich plasma</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Technologies</a>
                <span class="mobile-menu-toggle"></span>
 <ul class="mobile-submenu">
    <li><a href="/eneka-pro.php">Eneka Pro</a></li>
    <li><a href="/Secret-rf.php">Secret-RF</a></li>
    <li><a href="/apollo-duet.php">Apollo Duet</a></li>
    <li><a href="/laminous-light-sheer-duet.php">Luminous Light Sheer Duet</a></li>
    <li><a href="/helios-three.php">Helios III Q Switched Nd:YAG</a></li>
    <li><a href="/hifu.php">HIFU</a></li>
    <li><a href="/fractional-co2.php">Fractional-co2</a></li>
    <li><a href="/hifem.php">HIFEM Laser</a></li>
    <li><a href="/hydrafacial.php">Hydra Facial</a></li>
    <li><a href="/oxygeneo-facial.php">OxyGeneo</a></li>
</ul>
              </li>
              <li><a href="surgeries.php">Surgeries</a></li>
              <li>
                <a href="#">Media</a>
                <span class="mobile-menu-toggle"></span>
                <ul class="mobile-submenu">
                  <li><a href="media.php">Photo</a></li>
                  <li><a href="videomedia.php">Video</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="side-info-contact">
            <span>We are here</span>
            <p>Mall Road, Bathinda</p>
            <p><a href="tel:+919914032355">+91 99140 32355</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="body-overlay" id="bodyOverlay"></div>

    <!-- Top Bar (Desktop Only) -->
    <div class="tp-header-top d-none d-lg-block">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-end">
            <div class="topbar">
              <div class="content">
                <marquee scrollamount="10">
                  <p>Experience Advanced Skin and Hair Treatments at Dr. Nagpal's Clinic in Bathinda – Laser Hair Removal, PRP Therapy, Skin Rejuvenation & More.</p>
                </marquee>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Emergency Section -->
    <div class="tp-header-exgency">
      <div class="container">
        <div class="row align-items-center">
          <!-- Logo -->
          <div class="col-xl-3 col-6">
            <div class="tp-header-logo">
              <a href="index.php">
                <img src="assets/img/logo/logonew.png" alt="logo" class="img-fluid">
              </a>
            </div>
          </div>
          <!-- Address (Desktop Only) -->
          <div class="col-xl-3 d-none d-xl-block">
            <div class="d-flex align-items-center justify-content-center">
              <div class="tp-header-exgency-icon me-2">
                <span>
                  <img src="assets/img/blackicon.png" alt="icon" style="width:40px;">
                </span>
              </div>
              <div class="tp-header-exgency-content">
                <a href="#" class="text-white text-decoration-none"><span>Mall Road, Bathinda</span></a>
              </div>
            </div>
          </div>
          <!-- Phone & Offcanvas Button -->
          <div class="col-xl-3 col-6 position-relative">
            <div class="d-none d-xl-block text-end">
              <div class="d-flex align-items-center justify-content-end">
                <div class="tp-header-exgency-icon me-2">
                  <span><i class="fa-solid fa-phone-volume" style="color:black;"></i></span>
                </div>
                <div class="tp-header-exgency-content">
                  <a href="tel:+919914032355" class="text-white text-decoration-none">+91 99140 32355</a>
                </div>
              </div>
            </div>
            <!-- Offcanvas Button (Mobile) -->
            <div class="d-xl-none position-absolute end-0 top-50 translate-middle-y">
              <button class="offcanvas-open-btn" id="offcanvasOpenBtn">
                <i class="fa-solid fa-bars"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation (Desktop Only) -->
    <div class="tp-header-bottom d-none d-xl-block">
      <div class="container-fluid">
        <div class="tp-header-bottom-main">
          <div class="row">
            <div class="col-12">
              <div class="tp-header-2-main">
                <div class="main-menu text-center">
                  <nav class="tp-main-menu-content">
                    <ul class="mb-0">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="blog.php">Blog</a></li>
                      <li class="has-dropdown">
                        <a href="#">Skin Care</a>
                        <ul class="tp-submenu">
                          <li><a href="/wrinkles-treatment-bathinda.php">Wrinkles Treatment</a></li>
                          <li><a href="/warts-removal-bathinda.php">Warts Removal</a></li>
                          <li><a href="/depigmentation-treatment-bathinda.php">De-Pigmentation Treatment</a></li>
                          <li><a href="/keloid-treatment-bathinda.php">Keloid Treatment</a></li>
                          <li><a href="/mole-removal-bathinda.php">Mole Removal</a></li>
                          <li><a href="/dark-circles-removal-bathinda.php">Dark Circle Removal</a></li>
                          <li><a href="/skin-resurfacing-bathinda.php">Skin Re-surfacing</a></li>
                          <li><a href="/acne-scar-treatment-Bathinda.php">Acne Scar Treatment</a></li>
                          <li><a href="/permanent-tattoo-removal-bathinda.php">Tattoo Removal</a></li>
                          <li><a href="/scar-treatment-bathinda.php">Scar Treatment</a></li>
                          <li><a href="/xanthelasma-removal-bathinda.php">Xanthelasma Treatment</a></li>
                          <li><a href="/burns-treatment-bathinda.php">Burns Treatment</a></li>
                          <li><a href="/laser-hair-removal-bathinda.php">Laser Hair Removal</a></li>
                        </ul>
                      </li>
                      <li class="has-dropdown">
                        <a href="#">Hair Treatment</a>
                        <ul class="tp-submenu">
                          <li><a href="/gfc-treatment-bathinda.php">Growth Factor Concentrate</a></li>
                          <li><a href="/prp-treatment-bathinda.php">Platelet-rich plasma</a></li>
                        </ul>
                      </li>
                      <li class="has-dropdown">
                        <a href="#">Technologies</a>
                        <ul class="tp-submenu">
    <li><a href="/eneka-pro.php">Eneka Pro</a></li>
    <li><a href="/Secret-rf.php">Secret-RF</a></li>
    <li><a href="/apollo-duet.php">Apollo Duet</a></li>
    <li><a href="/laminous-light-sheer-duet.php">Luminous Light Sheer Duet</a></li>
    <li><a href="/helios-three.php">Helios III Q Switched Nd:YAG</a></li>
    <li><a href="/hifu.php">HIFU</a></li>
    <li><a href="/fractional-co2.php">Fractional-co2</a></li>
    <li><a href="/hifem.php">HIFEM Laser</a></li>
    <li><a href="/hydrafacial.php">Hydra Facial</a></li>
    <li><a href="/oxygeneo-facial.php">OxyGeneo</a></li>
</ul>

                      </li>
                      <li><a href="surgeries.php">Surgeries</a></li>
                      <li class="has-dropdown">
                        <a href="#">Media</a>
                        <ul class="tp-submenu">
                          <li><a href="media.php">Photo</a></li>
                          <li><a href="videomedia.php">Video</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- WhatsApp Chat Button -->
  <div class="whatsapp-chat">
    <a href="https://wa.me/919914032355" target="_blank">
      <i class="fa-brands fa-whatsapp"></i>
    </a>
  </div>
</header>

<!-- JavaScript for Header Functionality -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Offcanvas Toggle
    const offcanvasArea = document.getElementById('offcanvasArea');
    const offcanvasOpenBtn = document.getElementById('offcanvasOpenBtn');
    const offcanvasCloseBtn = document.getElementById('offcanvasCloseBtn');
    const bodyOverlay = document.getElementById('bodyOverlay');

    offcanvasOpenBtn.addEventListener('click', () => {
      offcanvasArea.classList.add('active');
      bodyOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
    
    offcanvasCloseBtn.addEventListener('click', () => {
      offcanvasArea.classList.remove('active');
      bodyOverlay.classList.remove('active');
      document.body.style.overflow = '';
    });
    
    bodyOverlay.addEventListener('click', () => {
      offcanvasArea.classList.remove('active');
      bodyOverlay.classList.remove('active');
      document.body.style.overflow = '';
    });

    // Mobile Submenu Toggle
    const mobileMenuToggles = document.querySelectorAll('.mobile-menu-toggle');
    mobileMenuToggles.forEach(toggle => {
      toggle.addEventListener('click', function() {
        const submenu = this.parentElement.querySelector('.mobile-submenu');
        this.classList.toggle('active');
        if (submenu.style.display === 'block') {
          submenu.style.display = 'none';
        } else {
          submenu.style.display = 'block';
        }
      });
    });

    // Close mobile menu when clicking on a link
    const mobileMenuLinks = document.querySelectorAll('.tp-main-menu-mobile a');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        // Only close menu if not clicking on a toggle or a link with submenu
        if (!this.parentElement.querySelector('.mobile-submenu')) {
          offcanvasArea.classList.remove('active');
          bodyOverlay.classList.remove('active');
          document.body.style.overflow = '';
        }
      });
    });
  });
</script>