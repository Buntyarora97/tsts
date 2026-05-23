<?php
// Start the session if needed
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional custom styles to fill the screen */
        body, html {
            height: 100%;
            margin: 0;
        }

        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .row {
            width: 100%;
        }

        .card {
            width: 18rem;
        }

        /* Optional style for cards to make them look better */
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Hii admin</h2>
                <p>Click on the links below to navigate to different pages.</p>
                
                <!-- Links Section -->
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="card m-3">
                        <div class="card-body">
                            <h5 class="card-title">Add New Blog </h5>
                            <a href="/admin-add-blog.php" class="btn btn-primary">Go to add blog page</a>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <h5 class="card-title">Add New Gallery</h5>
                            <a href="/admin-add-media-gellery.php" class="btn btn-primary">Go to Add image</a>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <h5 class="card-title">Add New Video</h5>
                            <a href="/admin-add-media-video.php" class="btn btn-primary">Go to Add  Video</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
