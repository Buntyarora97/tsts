<?php
// Include database connection
include('admin/connection.php');

// Flag to check if the form was successfully submitted
$successMessage = "";

if (isset($_POST['btn4'])) {
    $heading = mysqli_real_escape_string($dbcon, $_POST['heading']);
    $description = mysqli_real_escape_string($dbcon, $_POST['description']);
    $date = mysqli_real_escape_string($dbcon, $_POST['date']);
    
    $subheadings = [];
    $paragraphs = [];
    $images = [];
    $uploadDir = 'assets/img/event/';

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Process each subheading, paragraph, and image
    for ($i = 1; $i <= 6; $i++) {
        $subheadings[$i] = !empty($_POST['subheading_' . $i]) ? mysqli_real_escape_string($dbcon, $_POST['subheading_' . $i]) : '';
        $paragraphs[$i] = !empty($_POST['paragraph_' . $i]) ? mysqli_real_escape_string($dbcon, $_POST['paragraph_' . $i]) : '';
        
        if (!empty($_FILES['image_' . $i]['name'])) {
            $image_name = time() . '_' . basename($_FILES['image_' . $i]['name']);
            $target_file = $uploadDir . $image_name;
            
            if (move_uploaded_file($_FILES['image_' . $i]['tmp_name'], $target_file)) {
                $images[$i] = $image_name;
            } else {
                $images[$i] = '';
            }
        } else {
            $images[$i] = '';
        }
    }

    // Insert blog details into the database
    $query = "INSERT INTO newblog (heading, description, date, 
                subheading1, subheading2, subheading3, subheading4, subheading5, subheading6,
                paragraph1, paragraph2, paragraph3, paragraph4, paragraph5, paragraph6, 
                image1, image2, image3, image4, image5, image6) 
              VALUES ('$heading', '$description', '$date', 
                      '{$subheadings[1]}', '{$subheadings[2]}', '{$subheadings[3]}', '{$subheadings[4]}', '{$subheadings[5]}', '{$subheadings[6]}',
                      '{$paragraphs[1]}', '{$paragraphs[2]}', '{$paragraphs[3]}', '{$paragraphs[4]}', '{$paragraphs[5]}', '{$paragraphs[6]}',
                      '{$images[1]}', '{$images[2]}', '{$images[3]}', '{$images[4]}', '{$images[5]}', '{$images[6]}')";

    // Check if insertion was successful
    if (mysqli_query($dbcon, $query)) {
        // Set success message
        $successMessage = "Blog added successfully!";
    } else {
        // Log the error in case insertion fails
        error_log("Error: " . mysqli_error($dbcon));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Blog</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $("form").validate();

            // Show the success popup if message is set
            <?php if ($successMessage != "") { ?>
                alert("<?php echo $successMessage; ?>");
            <?php } ?>
        });
    </script>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Add New Blog</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Heading</label>
                <input type="text" class="form-control" name="heading" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="mb-3">
                    <label class="form-label">Subheading <?php echo $i; ?></label>
                    <input type="text" class="form-control" name="subheading_<?php echo $i; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image <?php echo $i; ?></label>
                    <input type="file" class="form-control" name="image_<?php echo $i; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Paragraph <?php echo $i; ?></label>
                    <textarea class="form-control" name="paragraph_<?php echo $i; ?>" required></textarea>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" class="form-control" name="date" required>
            </div>
            <button type="submit" class="btn btn-success" name="btn4">SAVE</button>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $("form").validate();
        });
    </script>
</body>
</html>
