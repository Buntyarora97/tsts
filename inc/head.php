<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // Agar index page hai toh meta data show karein
    if (basename($_SERVER['PHP_SELF']) == "index.php") {
        ?>
        <title>Best Dermatologist in Bathinda |mob 99140 32355 </title>
        <meta name="description" content="Experience top skin & hair treatments at Dr. Nagpal's Skin VD & Allergy Clinic. Advanced care in Bathinda. Call +91 99140 32355.">
        <meta name="keywords" content="dermatologist, Bathinda, skin care, treatment">
        <?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];
$request = $_SERVER['REQUEST_URI'];

// remove query string (?id=123 etc.)
$request = strtok($request, '?');

// ensure trailing slash (SEO friendly)
if ($request !== '/' && substr($request, -1) !== '/') {
    $request .= '/';
}

$canonical = $protocol . $domain . $request;
?>

<link rel="canonical" href="<?php echo $canonical; ?>" />
        <?php
    }
    ?>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Google Ads Scripts -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7528823209630874" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4634952667489126" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8784628306757291" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7268268022600682" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6592315227782803" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/flaticon_mycollection.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Dr. Nagpal Skin & Hair Clinic",
  "image": "https://drnagpalskinhair.com/assets/img/logo/logonew.png",
  "@id": "https://drnagpalskinhair.com/",
  "url": "https://drnagpalskinhair.com/",
  "telephone": "+91 99140 32355",
  "email": "nagpalhospital@gmail.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Mall Road",
    "addressLocality": "Bathinda",
    "addressCountry": "IN"
  },
  "sameAs": [
    "https://www.facebook.com/nagpalskinhair/",
    "https://www.instagram.com/drnagpalskinlaser",
    "https://www.youtube.com/@dr.nagpalskinhairclinic5667"
  ],
  "priceRange": "$$",
  "openingHours": "Mo-Sa 10:00-19:00",
  "description": "Dr. Nagpal Skin & Hair Clinic offers advanced cosmetic dermatology, laser treatments, hair transplant, PRP therapy, and skin care solutions with 20+ years of expertise."
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Physician",
  "name": "Dr. T.S. Nagpal",
  "jobTitle": "Dermatologist & Cosmetic Surgeon",
  "worksFor": {
    "@type": "MedicalBusiness",
    "name": "Dr. Nagpal Skin & Hair Clinic"
  },
  "description": "Board-certified dermatologist (MBBS, MD) with 20+ years experience in cosmetic dermatology and laser treatments.",
  "url": "https://drnagpalskinhair.com/"
}
</script>
</head>
