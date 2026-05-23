<?php
// Include database connection
include('admin/connection.php');

// Get blog ID from URL
$blogId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch the blog details based on ID
$sql = "SELECT * FROM newblog WHERE id = $blogId";
$r = mysqli_query($dbcon, $sql);

if (!$r) {
    die("Query failed: " . mysqli_error($dbcon));
}

$blog = mysqli_fetch_assoc($r);

// If blog not found, redirect to the blog list page
if (!$blog) {
    header("Location: blog.php");
    exit();
}

// Define keyword interlinking array
  $keywordLinks = [
    "Wrinkles Treatment" => "https://drnagpalskinhair.com/skincare.php#subTab1",
    "Warts Removal" => "https://drnagpalskinhair.com/skincare.php#subTab2",
    "De-Pigmentation Treatment" => "https://drnagpalskinhair.com/skincare.php#subTab3",
    "Keloid Treatment" => "https://drnagpalskinhair.com/skincare.php#subTab4",
    "Dark Circle Removal" => "https://drnagpalskinhair.com/skincare.php#subTab6",
    "Skin Resurfacing" => "https://drnagpalskinhair.com/skincare.php#subTab7",
    "Acne Scar Treatment" => "https://drnagpalskinhair.com/skincare.php#subTab8",
    "Tattoo Removal" => "https://drnagpalskinhair.com/skincare.php#subTab9",
    "Scar Treatment" => "https://drnagpalskinhair.com/skincare.php#subTab10",
    "Laser Hair Removal" => "https://drnagpalskinhair.com/skincare.php#subTabContent12",
    "PRP (Platelet-Rich Plasma) Therapy" => "prp-therapy.php",
    "GFC (Growth Factor Concentrate) Treatment" => "gfc-treatment.php",
    "Eneka Pro" => "eneka-pro.php",
    "Secret-RF" => "secret-rf.php",
    "Apollo Duet" => "apollo-duet.php",
    "Luminous Light Sheer Duet" => "luminous-light-sheer-duet.php",
    "Helios III Q Switched Nd:YAG" => "helios-iii.php",
    "Fractional CO2 Laser" => "fractional-co2-laser.php",
    "HIFU (High-Intensity Focused Ultrasound)" => "hifu.php",
    "Hydra Facial" => "hydra-facial.php",
    "OxyGeneo" => "oxygeneo.php",
    // New SEO Keywords
    "Skin Care Treatments" => "skincare.php",
    "Wrinkle Treatment" => "wrinkle-treatment.php",
    "Acne Treatment" => "acne-treatment.php",
    "Tattoo Removal" => "tattoo-removal.php",
    "Scar Treatment" => "scar-treatment.php",
    "Anti-Aging Solutions" => "anti-aging-solutions.php",
    "Hair Treatment" => "hair-treatment.php",
    "Cosmetic Surgery" => "cosmetic-surgery.php",
    "Laser Resurfacing" => "laser-resurfacing.php",
    "Skin Tightening" => "skin-tightening.php",
    "Hair-Free Skin" => "hair-free-skin.php",
    "Non-Invasive Treatments" => "non-invasive-treatments.php",
    "Skin Rejuvenation" => "skin-rejuvenation.php",
    "Botox" => "botox.php",
    "Dermal Fillers" => "dermal-fillers.php",
    "Keloid Treatment" => "keloid-treatment.php",
    "De-Pigmentation Treatment" => "de-pigmentation-treatment.php",
    "Fractional CO2 Laser" => "fractional-co2-laser.php",
    "HIFU Treatment" => "hifu-treatment.php",
    "Eneka Pro Diode Laser" => "eneka-pro-laser.php",
    "Apollo Duet Facial Treatment" => "apollo-duet-treatment.php",
    "Secret RF Skin Rejuvenation" => "secret-rf-rejuvenation.php",
    "Luminous Light Sheer Duet" => "luminous-light-sheer-duet.php"
];

// Function to replace keywords with links
function addInternalLinks($content, $keywordLinks) {
    foreach ($keywordLinks as $keyword => $url) {
        $content = preg_replace('/\b' . preg_quote($keyword, '/') . '\b/', '<a href="' . $url . '" class="text-primary">' . $keyword . '</a>', $content, 1);
    }
    return $content;
}

// Apply interlinking to blog content
$blog['description'] = addInternalLinks($blog['description'], $keywordLinks);
for ($i = 1; $i <= 6; $i++) {
    $blog['paragraph' . $i] = addInternalLinks($blog['paragraph' . $i], $keywordLinks);
}

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($blog['heading']); ?> - Nagpal Superspeciality Hospital</title>
    <meta name="description" content="<?php echo substr(htmlspecialchars($blog['description']), 0, 150); ?>">
    <meta name="keywords" content="Knee replacement, Robotic knee replacement, Healthcare, Surgery, Nagpal Hospital">
    <meta name="author" content="Nagpal Superspeciality Hospital">
    <meta property="og:title" content="<?php echo htmlspecialchars($blog['heading']); ?>">
    <meta property="og:description" content="<?php echo substr(htmlspecialchars($blog['description']), 0, 150); ?>">
    <meta property="og:image" content="<?php echo !empty($blog['image1']) ? 'assets/img/event/' . $blog['image1'] : 'assets/img/event/default.jpg'; ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css"> <!-- Custom CSS -->
</head>
<body>
    <?php include('inc/header.php'); ?>

 <section class="breadcrumb-area tp-breadcrumb-bg breadcrumb-wrap wraps" style="height: 90px;padding-top: 94px;    padding-bottom: 104px;">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="tp-breadcrumb text-left">                        
                        <h2 class="tp-breadcrumb-title" style="color:white !important;        font-family: 'Agbalumo variant0', Tofu;    font-size: 40px; transition-property: opacity, transform;font-weight: 400;    font-style: normal; font-stretch: normal; font-optical-sizing: auto; text-align: start;line-height: initial; opacity: 1;transition-duration: 350ms;">Blog</h2>
						<div class="tp-breadcrumb-link mb-10" style="margin-top: 5px;">
                           <span class="tp-breadcrumb-link-active"><a href="index.php">Home</a></span>
                           <span>  <i class='fas fa-angle-right' style='font-size:14px;color:#F4821E'></i> Service </span>
						   <span>  <i class='fas fa-angle-right' style='font-size:14px;color:#F4821E'></i> Blog</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
    <!-- Blog Title Section -->
    <div class="title-area position-relative mt-2 text-center text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/header-bg.jpg') no-repeat center center; background-size: cover; height: 50vh;">
        <div class="overlay position-absolute w-100% h-70" ></div>
        <div class="container position-relative text-center">
            <h1 class="display-3 fw-bold text-uppercase mb-4" style=" font-size: 2rem;">
                <?php echo htmlspecialchars($blog['heading']); ?>
            </h1>
            <p class="lead mt-3" style="margin: auto; font-size: 1rem; line-height: 1.8; color: #444; ">
    <?php echo nl2br($blog['description']); ?>
</p>
        </div>
    </div>

    <!-- Blog Details Section -->
   <div class="blog-details-area py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <!-- Loop through Subheadings, Images, and Paragraphs -->
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    $subheading = $blog['subheading' . $i];
                    $paragraph = $blog['paragraph' . $i];
                    $imageField = 'image' . $i;
                    $imagePath = !empty($blog[$imageField]) ? 'assets/img/event/' . $blog[$imageField] : 'assets/img/event/default.jpg';
                    
                    if (!empty($subheading) && !empty($paragraph)) {
                        echo '<div class="blog-section mb-5">';
                       echo '<h3 class="subheading text-uppercase text-dark" style="font-weight: 600; letter-spacing: 1px; font-size: 2.2rem; margin-top: 1.5rem; margin-bottom: 1.5rem;">' . htmlspecialchars($subheading) . '</h3>';

                        echo '<img src="' . $imagePath . '" class="img-fluid rounded-3 blog-image" alt="Blog Image ' . $i . '">';
                      echo '<p class="text-muted" style="font-size: 1.3rem; line-height: 1.8; margin-bottom: 1.5rem; color: #555;">' . nl2br($paragraph) . '</p>';

                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<style>
    /* Add a fixed size to all blog images */
    .blog-image {
        width: 100%;              /* Make image width responsive */
        max-width: 800px;         /* Limit width to 800px */
        height: 400px;            /* Set a fixed height */
        object-fit: contain;        /* Ensure image maintains its aspect ratio */
        border-radius: 15px;      /* Optional: Rounded corners for a more elegant look */
    }
</style>


    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
