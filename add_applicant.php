<html>
<!--Includes-------------------------------------------------------------->
<?php include('includes/include_body.php');?>
<?php include('includes/content.php');?>
<?php include('includes/include_CSS.php');
include ('includes/admin_auth.php');?>

<!------------------------------------------------------------------------>

<title>Admin</title>

<!---- CSS Style --------------------------------------------------------->
<?php echo $allPages;?>
<?php echo $admin;?>
<!------------------------------------------------------------------------>

<!---- Header ------------------------------------------------------------>
<?php echo $adminHeader;?>
<!------------------------------------------------------------------------>
<body>

    <!-- Content Start -->
    <br><br>
    <?php echo $addApplicant?>
    <?php include('includes/job_list.php');?>
    <br><br>
    <?php echo $addApplicantpart?>
    <br>
    <!-- Content End -->


    <!-- JavaScript Libraries -->
    <?php
     include('includes/include_js.php');
     echo $createApplicant;
     ?>
    
</body>
<!--Footer------------------------------------------------------------->
<?php echo $footer;?>
<!--------------------------------------------------------------------->

</html>