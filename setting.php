<!DOCTYPE html>
<!-- Includes -->
<?php 
 include('includes/include_body.php');
 include('includes/content.php');
 include('includes/include_CSS.php');
 require('includes/auth.php');
 ?>
<!------------------------------------------------------------------------>

<title>Employer</title>

<!---- CSS Style --------------------------------------------------------->
<?php 
echo $allPages;
echo $employerSetting;
?>
<!------------------------------------------------------------------------>

<!----Header-------------------------------------------------------------->
<?php echo $employerHeader;?>
<!------------------------------------------------------------------------>
<body>
<!-- Side Option --------------------------------------------------------->
<?php echo $sideOption;?>
<!------------------------------------------------------------------------>

<!--Content Start--------------------------------------------------------->
<!--Edit Profile Form----------------------------------------------------->
<?php 
echo $ediProfile;
include("includes/list_of_industry.php");
echo $editprofile2
?>

<!------------------------------------------------------------------------>

<!--Add User-------------------------------------------------------------->
<?php echo $employerUser;?>
<!------------------------------------------------------------------------>

<!----Username & Password------------------------------------------------->
<?php echo $userAccount;?>
<!------------------------------------------------------------------------>

<!----Activity Log-------------------------------------------------------->
<?php echo $activityLog;?>
<!------------------------------------------------------------------------>

<!--Content End----------------------------------------------------------->


 
<!--Footer------------------------------------------------------------->
<?php echo $footer;?>
<!--------------------------------------------------------------------->

<!----JavaScript------------------------------------------------------->
<?php 
    include('includes/include_js.php');
    echo $employerSetting;
?>
<!--------------------------------------------------------------------->


</body>
</html>