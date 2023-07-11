<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
   
        $applicantId = $_SESSION["applicantId"];
        $jobId = $_SESSION['jobid'] ;
        $employerId = $_SESSION['empid'];
        $sqlApplication = @"DELETE FROM `application` WHERE `applicant_id`='$applicantId' AND job_id='$jobId'";
        mysqli_query($con, $sqlApplication);
        echo '<script>
             alert("Application Cancelled");
             window.location.href="../job_offer.php";
             </script>';

    
}
