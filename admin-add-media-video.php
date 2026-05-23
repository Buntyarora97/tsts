<?php
// Database Connection Include
include('connection.php'); // connection.php ko import kar diya

// 1️⃣ Video Upload Folder
$uploadDir = "admin/videos/upload/"; // Folder jisme videos save hongi

// Agar folder nahi hai to create karo
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// 2️⃣ Video Upload & Database Save
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['video'])) {
    $fileName = basename($_FILES['video']['name']);
    $fileName = preg_replace("/[^a-zA-Z0-9\._-]/", "", $fileName); // Safe filename
    $targetFilePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $allowedTypes = array('mp4', 'avi', 'mov', 'wmv', 'mkv', 'webm');

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['video']['tmp_name'], $targetFilePath)) {
            $safeFileName = mysqli_real_escape_string($con, $fileName);
            $insertQuery = "INSERT INTO tbvideos (videourl, videotyp) VALUES ('$safeFileName', 'Gallery')";
            
            if (mysqli_query($con, $insertQuery)) {
                echo "<p style='color: green;'>Video successfully uploaded and saved in database!</p>";
            } else {
                echo "<p style='color: red;'>Database Error: " . mysqli_error($con) . "</p>";
            }
        } else {
            echo "<p style='color: red;'>Video upload failed!</p>";
        }
    } else {
        echo "<p style='color: red;'>Only MP4, AVI, MOV, WMV, MKV, and WEBM files are allowed.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload</title>
</head>
<body>
    <h2>Upload Video</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="video" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
