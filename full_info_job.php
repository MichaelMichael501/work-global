<!DOCTYPE html>
<html lang="en">
<?php 
include ('includes/include_body.php');
include ('includes/content.php');
include ('includes/applicant_auth.php');
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
   
                    
    <!-- Content -->                    
    <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <?php include("includes/job_offer_infromation.php");?>    
                    </div>
                </div>
            </div>
        </div>
     <!-- Content -->            
                
   <!-- Footer Start -->
   
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php include('includes/include_js.php');?>

   
    
</body>
<?php echo $applicantFooter;?>

</html>