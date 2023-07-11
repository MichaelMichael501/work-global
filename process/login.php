<?php
/**
* Description  : Main script for redirection to the correct directory
* Author       : JOHN MICHAEL mASMELA.
* Date Created  : MARCH. 17, 2023
* Date Modified : May. 23, 2023
* Revised By   : JOHN MICHAEL MASMELA. 
*/

   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      if($accountType=="employer"){
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
      $sql = "SELECT * FROM `employer_account` WHERE `username` = '$myusername' AND `password` = '$mypassword' AND `status`='Activated'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION["id"] = session_id();
         $_SESSION['employerId']=$row['id'];
         header("location:employer_dashboard.php");
      }else {
         $error = "Username or Password is invalid/Account is Deactivated";
         echo '<script type="text/javascript">';
         echo ' alert("'.$error.'")';  //not showing an alert box.
         echo '</script>';
      }
   }
   elseif($accountType=="applicant"){
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
      $sql = "SELECT * FROM `applicant_account` WHERE `username` = '$myusername' AND `password` = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION["appid"] = session_id();
         $_SESSION['applicantId']=$row['id'];
         header("location:index.php");
      }else {
         $error = "Username or Password is invalid";
         echo '<script type="text/javascript">';
         echo ' alert("'.$error.'")';  //not showing an alert box.
         echo '</script>';
      }
   }

   elseif($accountType=="admin"){
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
      $sql = "SELECT * FROM `admin_account` WHERE `username` = '$myusername' AND `password` = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION["adminId"] = session_id();
         $_SESSION['admin']=$row['id'];
         header("location:admin_dashboard.php");
      }else {
         $error = "Username or Password is invalid";
         echo '<script type="text/javascript">';
         echo ' alert("'.$error.'")';  //not showing an alert box.
         echo '</script>';
      }
   }

   
}

?>