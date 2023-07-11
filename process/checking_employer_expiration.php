<?php
include('config.php');
$empId=$_SESSION['employerId'];
$result = @mysqli_query($con, "SELECT * FROM `employer_account` where `id`='$empId'");
$res = mysqli_fetch_array($result);
$stringDate=$res['expiration_date'];
$currentDate = date('m-d-Y');
?>