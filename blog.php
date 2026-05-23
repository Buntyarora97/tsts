<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('inc/head.php'); ?>
    
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Explore our blog for the latest insights on permanent hair removal, skincare, and beauty treatments at Dr. Nagpal Skin & Hair Clinic."
    />
    <meta name="keywords" content="laser hair removal, skin treatments, wrinkle reduction, permanent hair removal, dermatology blog">
    <title>Blog - Dr. Nagpal Skin & Hair Clinic | Latest Beauty Treatments</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background: #f8f8f8;
        color: #333;
        line-height: 1.6;
      }
      .nsh-hero img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        margin-top: 40;
      }
      h1, h2, h3 {
        color: #222;
        font-weight: 600;
        margin-bottom: 1rem;
      }
      h1 {
        font-size: 2.5rem;
      }
      h2 {
        font-size: 2rem;
      }
      h3 {
        font-size: 1.75rem;
      }
      .blog-container {
        padding: 3rem 0;
      }
      .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        transition: all 0.3s ease;
        height: 100%;
      }
      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      }
      .card-img-top {
        border-radius: 10px 10px 0 0;
        height: 250px;
        object-fit: cover;
        width: 100%;
      }
      .card-body {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
      }
      .card-title {
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
      }
      .card-text {
        font-size: 1rem;
        color: #555;
        margin-bottom: 1.5rem;
        flex-grow: 1;
      }
      .btn-read-more {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 0.5rem 1.25rem;
        border-radius: 5px;
        font-size: 1rem;
        transition: all 0.3s ease;
        align-self: flex-start;
      }
      .btn-read-more:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
      }
      @media (max-width: 768px) {
        .nsh-hero img {
          height: 250px;
        }
        h1 {
          font-size: 2rem;
        }
        h2 {
          font-size: 1.75rem;
        }
        h3 {
          font-size: 1.5rem;
        }
        .card-img-top {
          height: 200px;
        }
      }
    </style>
  </head>

  <body>
    <?php include('inc/header.php'); ?>

   	  <div class=" text-center">
    <img src="assets/img/blog.jpg" class="img-fluid banner-img" alt="Nagpal Robotics Fellowship Banner">
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



    <!-- Main Blog Content -->
    <main class="blog-container">
      <div class="container">
        <h1 class="text-center mb-5">Expert Skin & Hair Care Insights</h1>
        
        <div class="row g-4">
          <!-- Blog Post 1 -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img
                src="assets/img/blog/face-hair-laser.jpg"
                alt="Laser Hair Removal Pain Guide"
                class="card-img-top"
                loading="lazy"
              />
              <div class="card-body">
                <h3 class="card-title">Does Laser Hair Removal Hurt? Your Guide to a (More) Pain-Free Experience</h3>
                <p class="card-text">
                  Dreaming of smooth, hair-free skin? The thought of laser hair removal might have crossed your mind. 
                  But what about the pain? It's a common concern we address with professional insights and solutions.
                </p>
                <a href="does-laser-hair-removal-hurt-pain-free-guide.php" class="btn btn-read-more">Read More</a>
              </div>
            </div>
          </div>

          <!-- Blog Post 2 -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img
                src="assets/img/blog/facelaser-img.png"
                alt="Permanent Hair Removal Guide"
                class="card-img-top"
                loading="lazy"
              />
              <div class="card-body">
                <h3 class="card-title">Permanent Hair Removal: The Ultimate Guide to Achieving Smooth, Hair-Free Skin</h3>
                <p class="card-text">
                  In today's world, the pursuit of smooth, hair-free skin is a common goal. Discover the most effective 
                  permanent hair removal methods and what to expect from each treatment option.
                </p>
                <a href="/permanent-hair-removal-guide.php" class="btn btn-read-more">Read More</a>
              </div>
            </div>
          </div>

          <!-- Blog Post 3 -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img
                src="assets/img/blog/Medical%20Peels.png"
                alt="Silk Hair Removal Treatment"
                class="card-img-top"
                loading="lazy"
              />
              <div class="card-body">
                <h3 class="card-title">New Silk Hair Permanently Hairless Guide</h3>
                <p class="card-text">
                  In a world where smooth, hair-free skin often denotes confidence and convenience, discover 
                  the revolutionary Silk Hair treatment that delivers lasting results with minimal discomfort.
                </p>
                <a href="/new-silk-hairless-guide.php" class="btn btn-read-more">Read More</a>
              </div>
            </div>
          </div>

          <!-- Blog Post 4 -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img
                src="assets/img/blog/wrinkle-treate-img1.png"
                alt="Wrinkle Reduction Treatments"
                class="card-img-top"
                loading="lazy"
              />
              <div class="card-body">
                <h3 class="card-title">Say Goodbye to Wrinkles With Effective Treatments For Youthful Skin</h3>
                <p class="card-text">
                  Wrinkles are an inevitable part of aging, but there are numerous effective treatments available. 
                  Explore options from wrinkle relaxers to laser treatments for rejuvenated, youthful-looking skin.
                </p>
                <a href="/say-goodbye-to-wrinkles.php" class="btn btn-read-more">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include('inc/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
   
  </body>
</html>