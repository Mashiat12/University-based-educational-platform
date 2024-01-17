<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  if (isset($_POST['option'])) {
    $selectedOption = $_POST['option'];

    if ($selectedOption === "teacher") {
      // Redirect to teacher page
      header("Location: ../Registration form/tu_reg.php");
      exit();
    } elseif ($selectedOption === "student") {
      // Redirect to student page
      header("Location: ../Registration form/stu_reg.php");
      exit();
    }
  }
}
?>
