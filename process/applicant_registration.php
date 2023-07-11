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
                $sqlcheck =@"SELECT * FROM `applicant_account` WHERE `username`='$_POST[username]'";
                $resultusername = mysqli_query($con, $sqlcheck);
                $value = mysqli_num_rows($resultusername);
                if($value<1){
                move_uploaded_file($tmp_dir,"../".$upload_dir."".$_POST['firstName']."-".$_POST['lastName']."".$coverpic);
                $storedFile=$upload_dir."".$_POST['firstName']."-".$_POST['lastName']."".$coverpic;
                $gender=$_POST['Gender'];
                $sqlresume = @"INSERT INTO `applicant_resume`(`id`, `file_dir`) VALUES ('$applicantId','$storedFile')";
                mysqli_query($con, $sqlresume);
                $sqlapplicant = @"INSERT INTO `applicant_information`(`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `gender`, `contact_number`, `email`) VALUES ('$applicantId','$_POST[firstName]','$_POST[middleName]','$_POST[lastName]','$_POST[suffix]','$gender','$_POST[applicantContact]','$_POST[email]')";
                mysqli_query($con, $sqlapplicant);
                $sqlaccount = @"INSERT INTO `applicant_account`(`id`, `username`, `password`) VALUES ('$applicantId','$_POST[username]','$_POST[confirm_password]')";
                mysqli_query($con, $sqlaccount);
                 echo '<script>
                 alert("Registration complete!");
                 window.location.href="../login_applicant.php";
                 </script>';
                }else{
                    echo '<script>
                    alert("Username is already exist!");
                    window.location.href="../login_applicant.php";
                    </script>'; 
                }
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
        }
    }
