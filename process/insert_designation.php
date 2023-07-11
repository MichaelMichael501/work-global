<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['send-status'])) {
        // Code to execute when Submit button is clicked

        $sqlinsertDes = @"INSERT INTO `applicant_designation`(`applicant_id`, `designation`, `date`, `status`) VALUES ('$_POST[appId]','$_POST[applocation]','$_POST[appdate]','$_POST[appstatus]')";
        mysqli_query($con, $sqlinsertDes);
        echo '<script>
                 alert("Data recorded!");
                 window.location.href="../applicant_list.php";
          </script>';
    }
}
?>
