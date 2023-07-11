<?php
    include('config.php');
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $empid = $_SESSION['employerId'];
        if($_POST['companyName'] !=""){
            $sqlupdateEmployer=@"UPDATE `employer_information` SET `company_name`='$_POST[companyName]' WHERE `id`='$empid' ";
            mysqli_query($con, $sqlupdateEmployer);
        }

        if (isset($_POST['selected_items'])) {
            $selectedValues = $_POST['selected_items'];
            $listIndustry = "";
        
            foreach ($selectedValues as $value) {
              $listIndustry .= $value . "/ ";
            }
            $sqlupdateEmployer=@"UPDATE `employer_information` SET `industry`='$listIndustry' WHERE `id`='$empid' ";
            mysqli_query($con, $sqlupdateEmployer);
        }
        if($_POST['companyDesc'] !=""){
            $sqlupdateEmployer=@"UPDATE `employer_information` SET `company_overview`='$_POST[companyDesc]' WHERE `id`='$empid' ";
            mysqli_query($con, $sqlupdateEmployer);
        }

        if($_POST['regNumber'] !=""){
            $sqlupdateEmployer=@"UPDATE `employer_information` SET `registered_number`='$_POST[regNumber]' WHERE `id`='$empid' ";
            mysqli_query($con, $sqlupdateEmployer);
        }
        if($_POST['comAddress'] !=""){
            $sqlupdateEmployer=@"UPDATE `employer_information` SET `address`='$_POST[comAddress]' WHERE `id`='$empid'";
            mysqli_query($con, $sqlupdateEmployer);
        }
        if($_POST['comContact'] !=""){
            $sqlupdateEmployer=@"UPDATE `employer_information` SET `contact`='$_POST[comContact]' WHERE `id`='$empid'";
            mysqli_query($con, $sqlupdateEmployer);
        }
        if($_POST['website'] !=""){
            $sqlupdateEmployer=@"UPDATE `employer_information` SET `website`='$_POST[website]' WHERE `id`='$empid'";
            mysqli_query($con, $sqlupdateEmployer);
        }
        if($_POST['minNumber'] !="" && $_POST['maxNumber'] !=""){
            $sqlupdateEmployer=@"UPDATE `employer_information` SET `company_size`='$_POST[maxNumber] - $_POST[minNumber]' WHERE `id`='$empid'";
            mysqli_query($con, $sqlupdateEmployer);
            
        }
        echo '<script>
              alert("Information updated!");
              window.location.href="../employer_dashboard.php";
              </script>';
        

        
    }
?>