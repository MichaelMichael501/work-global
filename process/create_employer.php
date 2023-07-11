<?php
include('config.php');
$employerCount = "SELECT * FROM `employer_information`";
$result = mysqli_query($con,$employerCount);
$count =mysqli_num_rows($result);
$random_number = mt_rand(1, 1000);
$employerId="EMP".$count."".$random_number."".date('mdY');

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
        //image Upload to databse and 
        if (count($_FILES) > 0) {
        $imgFile = $_FILES['image-input']['name'];
        $tmp_dir = $_FILES['image-input']['tmp_name'];
        $imgSize = $_FILES['image-input']['size'];
        $docuFile = $_FILES['file-input']['name'];
        $docu_dir = $_FILES['file-input']['tmp_name'];
        $docuSize = $_FILES['file-input']['size'];
        
        if(!empty($imgFile))
        {
        
                $upload_dir  = 'upload/'; // upload directory of image
                
                $imgExt   = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));// get image extension
                $fileExt   = strtolower(pathinfo($docuFile,PATHINFO_EXTENSION));
        
        // valid image extensions
                $valid_extensions = array('png', 'jpg'); // valid extensions
                $coverpic  = rand(1000,1000000).".".$imgExt;
                $coverdocu  = rand(1000,1000000).".".$fileExt;
        // allow valid image file formats
            if(in_array($imgExt, $valid_extensions))
             {
        // Check file size '5MB'
                if($imgSize < 5000000)
                {
                move_uploaded_file($tmp_dir,"../".$upload_dir.$coverpic);
                $storedFile=$upload_dir."".$coverpic;
                move_uploaded_file($docu_dir,"../".$upload_dir.$coverdocu);
                $storedDocu=$upload_dir."".$coverdocu;
                if (isset($_POST['selected_items'])) {
                    $selectedValues = $_POST['selected_items'];
                    $listIndustry = "";
                
                    foreach ($selectedValues as $value) {
                      $listIndustry .= $value . "/ ";
                    }
                }
                $date="";
                $listIndustry = rtrim($listIndustry, "/ ");
                $overview=mysqli_real_escape_string($con,$_POST['overview']);
                $companySize=$_POST['maxNumber']." - ".$_POST['minNumber'];
                $expiration=date("m-d-Y", strtotime($date. ' + 7 days'));
                $sqlphoto = @"INSERT INTO `employer_logo`(`id`, `photo_dir`) VALUES ('$employerId','$storedFile')";
                mysqli_query($con, $sqlphoto);
                $sqlDocu = @"INSERT INTO `employer_docu`(`id`, `file_dir`) VALUES ('$employerId','$storedDocu')";
                mysqli_query($con, $sqlDocu);
                $sqlemployer = @"INSERT INTO `employer_information`(`id`, `company_name`, `president/ceo`, `registered_number`, `industry`, `company_overview`, `address`, `contact`, `website`, `company_size`) VALUES ('$employerId','$_POST[companyName]','$_POST[ceoPresident]','$_POST[registeredNum]','$listIndustry','$overview','$_POST[address]','$_POST[contact]','$_POST[website]','$companySize')";
                mysqli_query($con, $sqlemployer);
                $sqlaccount = @"INSERT INTO `employer_account`(`id`, `username`, `password`, `expiration_date`, `post`, `status`, `membership`) VALUES ('$employerId','$_POST[username]','$_POST[password]','$expiration',10,'Activated','trial')";
                mysqli_query($con, $sqlaccount);
                 echo '<script>
                 alert("Employer sign-up complete! You can Start your 7 Days free trail");
                 window.location.href="../login_form.php";
                 </script>';
                // Close connection
                mysqli_close($con);
                }
            else{
                $errMSG = "Sorry, your file is too large.";
                }
            }
            else{
                $errMSG = "Sorry, only PNG & JPG files are allowed.";
                }
        
            }
        }
    }
