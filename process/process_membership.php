<?php
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
 {
    $date="";
    $membership=$_POST['membership'];
    if($membership=="Monthly"){
        $expiration=date("m-d-Y", strtotime($date. ' + 30 days'));
        $sqlmembership = @"UPDATE `employer_account` SET `expiration_date`='$expiration', `post` = 100, `membership` = 'monthly',`status`='Activated' WHERE `id`='$_POST[empId]'";
        mysqli_query($con, $sqlmembership);
        echo '<script>
         alert("Employer account activated!"); 
         window.location.href="../employer_list.php";
         </script>';
    }
    elseif($membership=="Quarterly"){
        $expiration=date("m-d-Y", strtotime($date. ' + 90 days'));
        $sqlmembership = @"UPDATE `employer_account` SET `expiration_date`='$expiration', `post` = 300, `membership` = 'quarterly',`status`='Activated' WHERE `id`='$_POST[empId]'";
        mysqli_query($con, $sqlmembership);
        echo '<script>
         alert("Employer account activated!");
         window.location.href="../employer_list.php";
         </script>';
    }
    else{
        $expiration=date("m-d-Y", strtotime($date. ' + 365 days'));
        $sqlmembership = @"UPDATE `employer_account` SET `expiration_date`='$expiration', `post` = 99999, `membership` = 'yearly',`status`='Activated' WHERE `id`='$_POST[empId]'";
        mysqli_query($con, $sqlmembership);
        echo '<script>
         alert("Employer account activated!");
         window.location.href="../employer_list.php";
         </script>';
    }
    

 }
 ?>