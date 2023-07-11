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
    echo $jobOffer;
    ?>
</head>

<body style="background:white">
    
    
    <!-- Navbar Start -->
    <?php
    echo $applicant_navigation;
    ?>
    <!-- Navbar End -->
   
    <!-- Carousel Start -->
    <?php echo $carousel;?>
    <!-- Carousel End -->
                    
    <!-- Content -->                    
    <?php echo $applicantdashboardcontent;?>
    <?php include('includes/applicant_job_table.php');?>
    <?php include('includes/employer_list.php');?>
    <?php echo $applicantdashboardcontenthalf;?>                
     <!-- Content -->            
                
    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php include('includes/include_js.php');?>

   
    
</body>
<?php echo $applicantFooter;?>

</html>