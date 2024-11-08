<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Upload a File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Select file to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <?php
    //write a php program to upload a file
    
    // Directory where uploaded files will be saved
    $target_dir = "uploads/"; 
    
    // File path (including directory and file name)
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    // Flag to check if upload is successful
    $uploadOk = 1;
    
    // Get the file extension of the uploaded file
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if the upload directory exists, if not, create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }
    
    // Check if a file was uploaded without any error
    if (isset($_POST["submit"])) {
        // Check if file is a valid upload (basic check)
        if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
            // Check if the file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
    
            // Optional: Limit file size (example: max 2MB)
            if ($_FILES["fileToUpload"]["size"] > 2000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
    
            // Optional: Allow certain file formats only (e.g., images, PDFs)
            $allowedTypes = ["jpg", "jpeg", "png", "gif", "pdf"];
            if (!in_array($fileType, $allowedTypes)) {
                echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
                $uploadOk = 0;
            }
    
            // Check if everything is ok
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                // Attempt to upload the file
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "No file was uploaded or there was an error in the file upload.";
        }
    }
    
    
    ?>
</body>
</html>