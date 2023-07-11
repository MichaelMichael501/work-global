<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if($_SESSION["applicantId"]==""){
        header("location:../sign-up.php");

    }
    else
    {
        $currentDate = date('m-d-Y');
        $applicantId = $_SESSION["applicantId"];
        $jobId = $_SESSION['jobid'] ;
        $employerId = $_SESSION['empid'];
        $sqlApplication = @"INSERT INTO `application`(`applicant_id`, `employer_id`, `job_id`, `date`) VALUES ('$applicantId','$employerId','$jobId','$currentDate')";
        mysqli_query($con, $sqlApplication);
        echo '<script>
             alert("Application send! wait for the call or email");
             window.location.href="../job_offer.php";
             </script>';

    }
}
