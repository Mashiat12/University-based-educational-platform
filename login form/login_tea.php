<?php


if (isset($_POST['submit'])) {
  include 'reg_connection.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate input fields
  if (empty($email) || empty($password)) {
    echo '<script>alert("Please fill in all fields");</script>';
  } else {
    // Prepare and execute the query
    $email_search = "SELECT * FROM teacher WHERE Email = '$email'";
    $query = mysqli_query($con, $email_search);

    if ($query && mysqli_num_rows($query) > 0) {
      $email_pass = mysqli_fetch_assoc($query);
      $db_pass = $email_pass['Password'];

      if ($password === $db_pass) {
        echo '<script>alert("Login successful");</script>';
        session_start();
        $_SESSION["user"] = $email_pass["Email"];
        header("Location: ../dash_board_project/dash.php");
    
        die();
        
      } else {
        echo '<script>alert("Incorrect password");</script>';
      }
    } else {
      echo '<script>alert("Invalid email or query error");</script>';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Login Form in HTML & CSS</title>
  <link rel="stylesheet" href="login_style.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="pexels-buro-millennial-1438072.jpg" alt="">
        <div class="text">
          <span class="text-1">Learn today and<br>have a bright future</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey<br>with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login as teacher </div>
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Don't have an account?<a href="../Registration form/tu_reg.php">Register Now</a></div>
            </div>
         
