<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  if (isset($_POST['option'])) {
    $selectedOption = $_POST['option'];

    if ($selectedOption === "teacher") {
      // Redirect to teacher page
      header("Location: ../login form/login_tea.php");
      exit();
    } elseif ($selectedOption === "student") {
      // Redirect to student page
      header("Location: ../login form/login_stu.php");
      exit();
    }
  }
}
?>
