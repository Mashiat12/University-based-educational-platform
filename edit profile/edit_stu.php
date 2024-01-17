<?php

include 'reg_connection.php';
session_start();
$user_id = $_SESSION['user'];


if (isset($_POST['update_profile'])) {

   $update_name = mysqli_real_escape_string($con, $_POST['full_name']);
   $update_number = mysqli_real_escape_string($con, $_POST['number']);
   $update_subject = mysqli_real_escape_string($con, $_POST['subject']);

   mysqli_query($con, "UPDATE `student` SET `Name`='$update_name',`Subject`='$update_subject',`Number`='$update_number' WHERE Email='$user_id'") or die('query failed');


}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="edit_style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>

        <?php
         $select = mysqli_query($con, "SELECT * FROM student WHERE Email = '$user_id'") or die('query failed');
         if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
         }
         ?>

        <form action="" method="POST">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $fetch['Name']; ?>">

            <label for="salary">Subject:</label>
            <input type="text" id="salary" name="subject" value="<?php echo $fetch['Subject']; ?>">

            <label for="subject">Number:</label>
            <input type="text" id="subject" name="number" value="<?php echo $fetch['Number']; ?>">

            <input type="submit" name="update_profile" value="Save">
        </form>
    </div>
</body>
</html>
