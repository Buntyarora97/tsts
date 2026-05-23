<?php
// Database Connection Include
include('connection.php'); // connection.php ko import kar diya

// 1️⃣ Image Upload Folder
$uploadDir = "admin/images/upload/gallery/"; // Folder jisme images save hongi

// Agar folder nahi hai to create karo
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// 2️⃣ Image Upload & Database Save
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $fileName = basename($_FILES['image']['name']);
    $fileName = preg_replace("/[^a-zA-Z0-9\._-]/", "", $fileName); // Safe filename
    $targetFilePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif', 'webp');

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            $safeFileName = mysqli_real_escape_string($con, $fileName);
            $insertQuery = "INSERT INTO tbimg (imgurl, imgtyp) VALUES ('$safeFileName', 'Gallery')";
            
            if (mysqli_query($con, $insertQuery)) {
                echo "<p style='color: green;'>Image successfully uploaded and saved in database!</p>";
            } else {
                echo "<p style='color: red;'>Database Error: " . mysqli_error($con) . "</p>";
            }
        } else {
            echo "<p style='color: red;'>Image upload failed!</p>";
        }
    } else {
        echo "<p style='color: red;'>Only JPG, JPEG, PNG, GIF, and WEBP files are allowed.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

</body>
</html>
