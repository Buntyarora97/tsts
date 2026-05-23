<?php
// Include database connection
include('admin/connection.php');
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Care Tips & News | Dr. Nagpal's Blog</title>
    <meta name="description" content="Stay updated with the latest skin care trends, treatments, and expert advice from Dr. Nagpal's dermatology blog in Bathinda.">
    <meta name="keywords" content="Knee replacement, Robotic knee replacement, Healthcare, Surgery">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css"> <!-- Custom CSS -->
    
    <style>
    /* Blog-Specific Styles */
    .blog-page {
        font-family: 'Arial', sans-serif;
        background-color: #f7f7f7;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .blog-title-area {
        background-color: #009688;
        color: white;
        padding: 60px 0;
        text-align: center;
    }
    .blog-title-area h2 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .blog-container {
        padding: 50px 0;
    }
    .blog-item {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }
    .blog-item:hover {
        transform: translateY(-5px);
    }
    .blog-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
    .blog-content {
        padding: 20px;
    }
    .blog-item h6 {
        font-size: 1.6rem;
        font-weight: 600;
    }
    .blog-item .date {
        font-size: 0.9rem;
        color: #888;
    }
    .blog-item .read-more {
        background-color: #009688;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        font-weight: 600;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
    }
    .blog-item .read-more:hover {
        background-color: #00796b;
    }
    </style>
</head>
<body class="blog-page">

    <!-- Include Header -->
    <!--<div class="header-container">-->
        <?php include('inc/header.php'); ?>
    <!--</div>-->
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
    
    <!-- Blog Title Section -->
    <!--<section class="breadcrumb-area tp-breadcrumb-bg breadcrumb-wrap wraps" style="height: 90px;padding-top: 94px;    padding-bottom: 104px;">-->
    <!--        <div class="container">-->
    <!--           <div class="row">-->
    <!--              <div class="col-12">-->
    <!--                 <div class="tp-breadcrumb text-left">                        -->
    <!--                    <h2 class="tp-breadcrumb-title" style="color:white !important;        font-family: 'Agbalumo variant0', Tofu;    font-size: 40px; transition-property: opacity, transform;font-weight: 400;    font-style: normal; font-stretch: normal; font-optical-sizing: auto; text-align: start;line-height: initial; opacity: 1;transition-duration: 350ms;">Blog</h2>-->
				<!--		<div class="tp-breadcrumb-link mb-10" style="margin-top: 5px;">-->
    <!--                       <span class="tp-breadcrumb-link-active"><a href="index.php">Home</a></span>-->
    <!--                       <span>  <i class='fas fa-angle-right' style='font-size:14px;color:#F4821E'></i> Service </span>-->
				<!--		   <span>  <i class='fas fa-angle-right' style='font-size:14px;color:#F4821E'></i> Blog</span>-->
    <!--                    </div>-->
    <!--                 </div>-->
    <!--              </div>-->
    <!--           </div>-->
    <!--        </div>-->
    <!--     </section>-->
    
    <!-- Blog Content Section -->
    <div class="blog-container">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $sql = "SELECT * FROM newblog ORDER BY id DESC";
                $r = mysqli_query($dbcon, $sql);
                if (!$r) die("Query failed: " . mysqli_error($dbcon));
                
                $postsFound = false;
                while ($row = mysqli_fetch_assoc($r)) {
                    $postsFound = true;
                    $imagePath = (!empty($row['image1']) && file_exists('assets/img/event/' . $row['image1']))
                                ? 'assets/img/event/' . $row['image1']
                                : 'assets/img/event/default.jpg';
                ?>
                <div class="col">
                    <div class="blog-item">
                        <img src="<?php echo $imagePath; ?>" alt="Blog Image">
                        <div class="blog-content">
                            <h6><?php echo htmlspecialchars($row['heading']); ?></h6>
                            <p class="date">Updated On: <?php echo htmlspecialchars($row['date']); ?></p>
                            <p><?php echo substr(htmlspecialchars($row['description']), 0, 100); ?>...</p>
                            <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
                <?php if (!$postsFound) { ?>
                <div class="col">
                    <div class="blog-item">
                        <img src="assets/img/event/default.jpg" alt="Default Blog Image">
                        <div class="blog-content">
                            <h6>Robotic Knee Replacement: The Future of Healthcare</h6>
                            <p class="date">Updated On: January 29, 2025</p>
                            <p>Robotic knee replacement surgeries are revolutionizing healthcare...</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <!-- Include Footer -->
    <div class="footer-container">
        <?php include('inc/footer.php'); ?>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
