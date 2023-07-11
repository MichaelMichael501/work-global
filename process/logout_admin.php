<?php
include('config.php');

// Check the account type (assuming it is stored in $checkaccountType)

  session_start();

  // Get the current user's session ID from the database

  // Destroy the session and unset all session variables
  session_unset();
  session_destroy();

  // Redirect to the login page
  header("Location: ../admin_login.php");
  exit();


?>