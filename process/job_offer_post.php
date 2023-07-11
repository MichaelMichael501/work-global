<?php
include('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imgFile = $_FILES['image-input']['name'];
    $tmp_dir = $_FILES['image-input']['tmp_name'];
    $imgSize = $_FILES['image-input']['size'];
    $empId = $_SESSION['employerId'];
    $jobCountQuery = "SELECT * FROM `job_offer`";
    $result = mysqli_query($con, $jobCountQuery);
    $count = mysqli_num_rows($result);
    $random_number = mt_rand(1, 1000);
    $jobId = "JO" . $count . $random_number . date('mdY');

    if ($_FILES['image-input']['error'] == 0) {
        $upload_dir = 'upload/';
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
        $valid_extensions = array('png', 'jpg');
        $coverpic = rand(1000, 1000000) . "." . $imgExt;

        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 5000000) {
                move_uploaded_file($tmp_dir, "../" . $upload_dir . $coverpic);
                $storedFile = $upload_dir . $coverpic;
            } else {
                $errMSG = "Sorry, your file is too large.";
            }
        } else {
            $errMSG = "Sorry, only PNG & JPG files are allowed.";
        }
    }

    $description = mysqli_real_escape_string($con, $_POST['description']);
    $requirement = mysqli_real_escape_string($con, $_POST['requirement']);
    $requireValue = nl2br($requirement);
    $expiration = date("m-d-Y", strtotime('+30 days'));

    $sqlphoto = "INSERT INTO `job_photo`(`job_id`, `photo_dir`) VALUES ('$jobId', '$storedFile')";
    mysqli_query($con, $sqlphoto);

    $sqljobOffer = "INSERT INTO `job_offer`(`job_id`, `employer_id`, `job_title`, `position`, `salary`, `schedule`, `location`, `description`, `requirement`, `expiration`) VALUES ('$jobId', '$empId', '$_POST[jobTitle]', '$_POST[position]', '$_POST[salary]', '$_POST[Schedule]', '$_POST[location]', '$description', '$requireValue', '$expiration')";
    mysqli_query($con, $sqljobOffer);

    echo '<script>
             alert("Job offer posted!");
             window.location.href="../job_post.php";
             </script>';

    mysqli_close($con);
}
?>
