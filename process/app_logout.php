<?php
include('config.php');
session_start();
// Check the account type (assuming it is stored in $checkaccountType)


  // Get the current user's session ID from the database
  $username = $_SESSION['applicantId'];
  $sql = "SELECT `session` FROM `applicant_account` WHERE `id` = '$username'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();
  $sessionID = $row['session'];

  // Clear the session ID from the database
  $sql = "UPDATE `applicant_account` SET `session` = NULL WHERE `id` = '$username'";
  $con->query($sql);

  // Destroy the session and unset all session variables
  session_unset();
  session_destroy();

  // Redirect to the login page
  header("Location: ../index.php");
  exit();
