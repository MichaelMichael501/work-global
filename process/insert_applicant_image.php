<?php

$appId = $_SESSION['applicantId'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
                    $sqlphoto = @"UPDATE `applicant_photo` SET `photo_dir`='$storedFile' WHERE `id`='$appId'";
                    mysqli_query($con, $sqlphoto);
                } else {
                    $errMSG = "Sorry, your file is too large.";
                }
            } else {
                $errMSG = "Sorry, only PNG & JPG files are allowed.";
            }
        }
    }
}
?>