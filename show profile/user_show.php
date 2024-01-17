<?php

include 'reg_connection.php';
session_start();
$user_id = $_SESSION["user"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user_style.css">
</head>
<body>
<section class="space">
      <div class="top">
         <img src="images/user.png" alt="">
      </div>

      <div class="container">
         <h1 class="profile_title">User Profile</h1>
         <div class="profile">
            <?php
            $select = mysqli_query($con, "SELECT * FROM `teacher` WHERE Email= '$user_id'") or die('query failed');
            if (mysqli_num_rows($select) > 0) {
               $fetch = mysqli_fetch_assoc($select);
            }
            if ($fetch['Picture'] == '') {
               echo '<img src="../Registration form/user.png">';
            } else {
               echo '<img src="../Registration form/' . $fetch['Picture'] . '">';
            }
            ?>
            
            <h2><?php echo $fetch['Full Name']; ?></h2>
         </div>
         <div class="details">
            <p class="row"><span class="attr">Department: </span><?php echo $fetch['Department']; ?></p>
            <p class="row"><span class="attr">Subject: </span><?php echo $fetch['Subject']; ?></p>
            <p class="row"><span class="attr">Mobile No: </span><?php echo $fetch['Number']; ?></p>
            <p class="row"><span class="attr">Salary: </span><?php echo $fetch['Salary']; ?></p>
         </div>
         
      </div>
   </section>
    
</body>
</html>

