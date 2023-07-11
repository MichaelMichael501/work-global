<?php
/**
* Description   : Main script for redirection to the correct directory
* Author        : JOHN MICHAEL mASMELA.
* Date Created  : MARCH. 17, 2023
* Date Modified : MARCH. 17, 2023
* Revised By    : JOHN MICHAEL mASMELA. 
*/

include('config.php');
 
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
   if(isset($_POST['apnumcall'])){
   $selectedAppnum=$_POST['apnumcall'];
   foreach ($selectedAppnum as $appNum) {
   $trigger = $_POST['btnremarks'];
   $ids = explode(" ", $appNum);
   list($appId, $jobId) = $ids;
   if ($trigger=="Interview") 
   {   
            
            $upadatestatus = @"UPDATE `application` SET `remark`='$trigger' WHERE `applicant_id`='$appId'";
            mysqli_query($con, $upadatestatus);
            echo '<script>
            alert("Applicant is in Interview phase!");
            window.location.href="../admin_application.php";
            </script>';
       
        
        
   }
   
   if ($trigger=="Final Interview") 
   {   
            $upadatestatus = @"UPDATE `application` SET `remark`='$trigger' WHERE `applicant_id`='$appId'";
            mysqli_query($con, $upadatestatus);
            echo '<script>
            alert("Applicant is in Passed the Interview!");
            window.location.href="../admin_application.php";
            </script>';
   }

   if ($trigger=="Pass") 
   {   
            
            $upadatestatus = @"UPDATE `application` SET `remark`='$trigger' WHERE `applicant_id`='$appId'";
            mysqli_query($con, $upadatestatus);
            echo '<script>
            alert("Applicant remark update");
            window.location.href="../admin_application.php";
            </script>';
   }

   if ($trigger=="Hired") 
   {   
            
            $upadatestatus = @"UPDATE `application` SET `remark`='$trigger' WHERE `applicant_id`='$appId'";
            mysqli_query($con, $upadatestatus);
            echo '<script>
            alert("Applicant is in Passed the final Interview!");
            window.location.href="../admin_application.php";
            </script>';
   }
   
   /*if ($trigger=="Remove") 
   {   
            $upadatestatus = @"DELETE FROM `applicant_info`  WHERE `applicant_number`='$apnum'";
            $upadatestatus1 = @"DELETE FROM `application` WHERE `Applicant Number`='$apnum'";
            
            mysqli_query($con, $upadatestatus1);
            echo '<script>
            alert("Applicant info remove!");
            window.location.href="../admin_application.php.php";
            </script>';
   }*/
   
   

   }
   
  }
  else
  {
      echo '<script>
            alert("There is no selected Applicant!");
            window.location.href="../admin_application.php";
            </script>';
  }
   
 }
