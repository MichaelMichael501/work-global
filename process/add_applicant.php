<?php
include('config.php');
$applicantCount = "SELECT * FROM `applicant_information`";
$result = mysqli_query($con,$applicantCount);
$count =mysqli_num_rows($result);
$random_number = mt_rand(1, 1000);
$applicantId="APC".$count."".$random_number."".date('mdY');

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
        //image Upload to databse and 
        if (count($_FILES) > 0) {
        $imgFile = $_FILES['file-input']['name'];
        $tmp_dir = $_FILES['file-input']['tmp_name'];
        $imgSize = $_FILES['file-input']['size'];
        
        if(!empty($imgFile))
        {
          
                $upload_dir  = 'resume/'; // upload directory of file
                
                $imgExt   = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));// get file extension
              
        
        // valid file extensions
                $valid_extensions = array('pdf', 'docx'); // valid extensions
                $coverpic  = rand(1000,1000000).".".$imgExt;
        // allow valid docu file formats
            if(in_array($imgExt, $valid_extensions))
             {
        // Check file size '5MB'
                if($imgSize < 5000000)
                {
                move_uploaded_file($tmp_dir,"../".$upload_dir."".$_POST['firstName']."-".$_POST['lastName']."".$coverpic);
                $storedFile=$upload_dir."".$_POST['firstName']."-".$_POST['lastName']."".$coverpic;
                $gender=$_POST['Gender'];
                $jobId = $_POST['jobOffer'];
                $result = @mysqli_query($con, "SELECT * FROM `job_offer` WHERE `job_id`='$jobId'");
                $res = mysqli_fetch_array($result);
                $empId=$res['employer_id'];
                $currentDate = date('m-d-Y');
                $sqlapplication = @"INSERT INTO `application`(`applicant_id`, `job_id`, `employer_id`, `date`) VALUES ('$applicantId','$jobId','$empId','$currentDate')";
                mysqli_query($con, $sqlapplication);
                $sqlresume = @"INSERT INTO `applicant_resume`(`id`, `file_dir`) VALUES ('$applicantId','$storedFile')";
                mysqli_query($con, $sqlresume);
                $sqlapplicant = @"INSERT INTO `applicant_information`(`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `gender`, `contact_number`, `email`) VALUES ('$applicantId','$_POST[firstName]','$_POST[middleName]','$_POST[lastName]','$_POST[suffix]','$gender','$_POST[applicantContact]','$_POST[email]')";
                mysqli_query($con, $sqlapplicant);
                 echo '<script>
                 alert("Add applicant complete!");
                 window.location.href="../add_applicant.php";
                 </script>';
                // Close connection
                mysqli_close($con);
                }
            else{
                $errMSG = "Sorry, your file is too large.";
                }
            }
            else{
                $errMSG = "Sorry, only PDF & DOCX files are allowed.";
                }
        
            }
            else{
                $gender=$_POST['Gender'];
                $jobId = $_POST['jobOffer'];
                $result = @mysqli_query($con, "SELECT * FROM `job_offer` WHERE `job_id`='$jobId'");
                $res = mysqli_fetch_array($result);
                $empId=$res['employer_id'];
                $currentDate = date('m-d-Y');
                $sqlapplication = @"INSERT INTO `application`(`applicant_id`, `job_id`, `employer_id`, `date`) VALUES ('$applicantId','$jobId','$empId','$currentDate')";
                mysqli_query($con, $sqlapplication);
                $sqlapplicant = @"INSERT INTO `applicant_information`(`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `gender`, `contact_number`, `email`) VALUES ('$applicantId','$_POST[firstName]','$_POST[middleName]','$_POST[lastName]','$_POST[suffix]','$gender','$_POST[applicantContact]','$_POST[email]')";
                mysqli_query($con, $sqlapplicant);
                 echo '<script>
                 alert("Add applicant complete!");
                 window.location.href="../add_applicant.php";
                 </script>';
                // Close connection
                mysqli_close($con);
            }
        }
    }
