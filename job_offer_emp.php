<!DOCTYPE html>
<html lang="en">
<?php
include('includes/include_body.php');
include('includes/content.php');
include('includes/applicant_auth.php');
include('process/check_job_expiration.php');

?>

<head>
    <!-- CSS Library -->
    <title>Applicant</title>
    <?php
    include('includes/include_CSS.php');
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


    <!-- Content Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div id="joboffercotain">
            <!--Search Filter-->
            <input type="text" class="search-job" id="myInput" onkeyup="myFunction()" placeholder="Search for Jobs..">
            <?php if($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $GetId=$_POST['employerId'];    
            ?>
            <?php include('includes/emp_of_job_offer.php'); ?>
            <?php 
            }
            ?>
        </div>
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php
    include('includes/include_js.php');
    echo $searchFilter;
    ?>



</body>
<?php
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

if ($isMob) { ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php } ?>
<?php echo $applicantFooter; ?>

</body>

</html>