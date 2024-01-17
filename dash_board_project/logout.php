<?php
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the login page or homepage
header("Location: ../buttons/login_op.php"); 
exit();
?>
