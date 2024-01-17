<?php
include "reg_connection.php";

if (isset($_GET['path'])) {
    $filePath = $_GET['path'];
    if (file_exists($filePath)) {
        $fileContent = file_get_contents($filePath);
        if ($fileContent === false) {
            $fileContent = "Unable to read the file.";
        }
    } else {
        $fileContent = "File not found.";
    }
} else {
    $fileContent = "No file path specified.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Content</title>
    <link rel="stylesheet" href="home01%20style.css">
</head>
<body>
    <div class="container">
        <h2>File Content:</h2>
        <pre><?php echo htmlspecialchars($fileContent); ?></pre>
    </div>
</body>
</html>
