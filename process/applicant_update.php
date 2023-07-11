<?php
include('config.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appId = $_SESSION['applicantId'];
    //image Upload to databse and 
    if (count($_FILES) > 0) {
        $imgFile = $_FILES['file-input']['name'];
        $tmp_dir = $_FILES['file-input']['tmp_name'];
        $imgSize = $_FILES['file-input']['size'];

        if (!empty($imgFile)) {

            $upload_dir  = 'resume/'; // upload directory of file

            $imgExt   = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get file extension


            // valid file extensions
            $valid_extensions = array('pdf', 'docx'); // valid extensions
            $coverpic  = rand(1000, 1000000) . "." . $imgExt;
            // allow valid docu file formats
            if (in_array($imgExt, $valid_extensions)) {
                // Check file size '5MB'
                if ($imgSize < 5000000) {
                    move_uploaded_file($tmp_dir, "../" . $upload_dir . "" . $_POST['firstName'] . "-" . $_POST['lastName'] . "" . $coverpic);
                    $storedFile = $upload_dir . "" . $_POST['firstName'] . "-" . $_POST['lastName'] . "" . $coverpic;
                    $sqlresume = @"UPDATE `applicant_resume` SET `file_dir`='$storedFile' WHERE `id`='$appId'";
                    mysqli_query($con, $sqlresume);

                    // Close connection

                } else {
                    $errMSG = "Sorry, your file is too large.";
                }
            } else {
                $errMSG = "Sorry, only PDF & DOCX files are allowed.";
            }
        }
    }

    if (count($_FILES) > 0) {
        $imgFile = $_FILES['image-input']['name'];
        $tmp_dir = $_FILES['image-input']['tmp_name'];
        $imgSize = $_FILES['image-input']['size'];
        if (!empty($imgFile)) {

            $upload_dir  = 'upload/'; // upload directory of image

            $imgExt   = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension


            // valid image extensions
            $valid_extensions = array('png', 'jpg'); // valid extensions
            $coverpic  = rand(1000, 1000000) . "." . $imgExt;
            // allow valid image file formats
            if (in_array($imgExt, $valid_extensions)) {
                // Check file size '5MB'
                if ($imgSize < 5000000) {
                    move_uploaded_file($tmp_dir, "../" . $upload_dir . $coverpic);
                    $storedFile = $upload_dir . "" . $coverpic;
                    $applicantCount = "SELECT * FROM `applicant_photo` WHERE `id`='$appId'";
                    $result = mysqli_query($con, $applicantCount);
                    $count = mysqli_num_rows($result);
                    if ($count > 0) {
                        $sqlphoto = @"UPDATE `applicant_photo` SET `photo_dir`='$storedFile' WHERE `id`='$appId'";
                        mysqli_query($con, $sqlphoto);
                    } else {
                        $sqlphoto = @"INSERT INTO `applicant_photo`(`id`, `photo_dir`) VALUES ('$appId','$storedFile')";
                        mysqli_query($con, $sqlphoto);
                    }
                } else {
                    $errMSG = "Sorry, your file is too large.";
                }
            } else {
                $errMSG = "Sorry, only PNG & JPG files are allowed.";
            }
        }
    }

    if ($_POST['firstName'] != '') {
        $updateApplicant = @"UPDATE `applicant_information` SET `first_name`='$_POST[firstName]' WHERE `id`='$appId'";
        mysqli_query($con, $updateApplicant);
    }
    if ($_POST['middleName'] != '') {
        $updateApplicant = @"UPDATE `applicant_information` SET `middle_name`='$_POST[middleName]' WHERE `id`='$appId'";
        mysqli_query($con, $updateApplicant);
    }
    if ($_POST['lastName'] != '') {
        $updateApplicant = @"UPDATE `applicant_information` SET `last_name`='$_POST[lastName]' WHERE `id`='$appId'";
        mysqli_query($con, $updateApplicant);
    }
    if ($_POST['suffix'] != '') {
        $updateApplicant = @"UPDATE `applicant_information` SET `suffix`='$_POST[suffix]' WHERE `id`='$appId'";
        mysqli_query($con, $updateApplicant);
    }
    if ($_POST['Gender'] != '') {
        $updateApplicant = @"UPDATE `applicant_information` SET `gender`='$_POST[Gender]' WHERE `id`='$appId'";
        mysqli_query($con, $updateApplicant);
    }
    if ($_POST['applicantContact'] != '') {
        $updateApplicant = @"UPDATE `applicant_information` SET `contact_number`='$_POST[applicantContac]' WHERE `id`='$appId'";
        mysqli_query($con, $updateApplicant);
    }

    echo '<script>
            alert("Update complete!");
            window.location.href="../applicant_profile.php";
          </script>';
}


?>


?>