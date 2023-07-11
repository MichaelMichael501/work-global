<?php
include('config.php');

// Check the account type (assuming it is stored in $checkaccountType)

  session_start();

  // Get the current user's session ID from the database
  $username = $_SESSION['username'];
  $sql = "SELECT `session` FROM `employer_account` WHERE `username` = '$username'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();
  $sessionID = $row['session'];

  // Clear the session ID from the database
  $sql = "UPDATE `employer_account` SET `session` = NULL WHERE `username` = '$username'";
  $con->query($sql);

  // Destroy the session and unset all session variables
  session_unset();
  session_destroy();

  // Redirect to the login page
  header("Location: ../login_form.php");
  exit();


?>