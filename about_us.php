<!DOCTYPE html>
<html lang="en">
<?php 
include ('includes/include_body.php');
include ('includes/content.php');
include ('includes/applicant_auth.php');
include('process/check_job_expiration.php');
?>
<head>
    <!-- CSS Library -->
    <title>Applicant</title>
    <?php
    include ('includes/include_CSS.php');
    echo $allPages;
    echo $applicantDash;
    ?>
</head>

<body style="background:white">

    
    <!-- Navbar Start -->
    <?php
    echo $applicant_navigation;
    ?>
    <!-- Navbar End -->
   
    <!-- Start of Content-->
    <!-- Contact Start -->
    <?php echo $aboutUs;?>
    <!-- End of Content-->

   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
  <!-- JavaScript Libraries -->
  <?php include('includes/include_js.php');?>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<?php echo $applicantFooter;?>
</html>