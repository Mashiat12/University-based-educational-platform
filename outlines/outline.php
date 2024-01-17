<?php
include "reg_connection.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was selected for upload
    if (isset($_FILES["word_file"]) && $_FILES["word_file"]["error"] == UPLOAD_ERR_OK) {
        // Retrieve the subject from the form input
        $subject = mysqli_real_escape_string($con, $_POST["subject"]);

        // Specify the directory where the files should be stored
        $uploadDir = "file/";

        // Generate a unique file name
        $fileName = uniqid() . "_" . $_FILES["word_file"]["name"];

        // Move the uploaded file to the specified directory
        $destination = $uploadDir . $fileName;
        if (move_uploaded_file($_FILES["word_file"]["tmp_name"], $destination)) {
            // Save the file path and subject in the database using SQL query
            $filePath = mysqli_real_escape_string($con, $destination);
            $sql = "INSERT INTO outline (path, course) VALUES ('$filePath', '$subject')";
            if (mysqli_query($con, $sql)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file: " . mysqli_error($con);
            }
        } else {
            echo "Error moving file to destination.";
        }
    } else {
        echo "No file selected for upload.";
    }
}
?>

<form action="outline.php" method="post" enctype="multipart/form-data">
  <input type="file" name="word_file">
  <input type="text" name="subject" placeholder="Enter subject">
  <input type="submit" value="Upload">
</form>
