<!DOCTYPE html>
<html lang="en">
<?php
include('includes/include_body.php');
include('includes/content.php');
include('includes/applicant_auth.php');
?>

<head>
    <!-- CSS Library -->
    <title>Applicant</title>
    <?php
    include('includes/include_CSS.php');
    echo $allPages;
    echo $applicantDash;
    ?>
</head>

<body style="background-color:white;" id="signupbody">


    <!-- Navbar Start -->
    <?php
    echo $applicant_navigation;
    ?>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div id="firstPage" class="button-container" style="background-color: white;">
        <a href="index.php"><button class="all-button">Back </button></a>
        <button id="openEdit" onclick="openEditpage()" class="openBtn all-button">Open Edit Page</button>
        <button id="closeEdit" onclick="closeEditpage()" class="openBtn all-button" style="display: none;">Close Edit Page</button>
    </div>
    <br><br><br><br><br>
    <?php include('includes/applicant_profile.php');?>
    <?php echo $applicantProfile; ?>


    <!-- Content End -->

    <!-- Footer Start -->

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php
    include('includes/include_js.php');
    echo $createApplicant;
    ?>

</body>

</html>