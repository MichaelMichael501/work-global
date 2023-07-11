<!DOCTYPE html>
<!-- Includes -->
<?php
include('includes/include_body.php');
include('includes/content.php');
include('includes/include_CSS.php');
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
<?php echo $loginHeader; ?>
<!------------------------------------------------------------------------>

<body>
    <!--Content Start--------------------------------------------------------->
    <!--Edit Profile Form----------------------------------------------------->
    <?php
    echo $createEmp;
    include("includes/list_of_industry.php");
    echo $createEmp2;
    ?>
    <!--Content End----------------------------------------------------------->

    <!----JavaScript---------------------------------------------------------->
    <?php
    include('includes/include_js.php');
    echo $employerSetting;
    ?>
    <!------------------------------------------------------------------------->

</body>

</html>