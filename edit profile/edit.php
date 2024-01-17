<?php

include 'reg_connection.php';
session_start();
$user_id = $_SESSION['user'];


if (isset($_POST['update_profile'])) {

   $update_name = mysqli_real_escape_string($con, $_POST['full_name']);
   $update_salary = mysqli_real_escape_string($con, $_POST['salary']);
   $update_subject = mysqli_real_escape_string($con, $_POST['subject']);

   mysqli_query($con, "UPDATE `teacher` SET `Full Name`='$update_name',`Subject`='$update_subject',`Salary`='$update_salary' WHERE Email='$user_id'") or die('query failed');


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
         $select = mysqli_query($con, "SELECT * FROM teacher WHERE Email = '$user_id'") or die('query failed');
         if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
         }
         ?>

        <form action="" method="POST">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $fetch['Full Name']; ?>">

            <label for="salary">Salary:</label>
            <input type="text" id="salary" name="salary" value="<?php echo $fetch['Salary']; ?>">

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" value="<?php echo $fetch['Subject']; ?>">

            <input type="submit" name="update_profile" value="Save">
        </form>
    </div>
</body>
</html>
