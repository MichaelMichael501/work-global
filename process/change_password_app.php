<?php
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
   
        $sqlcheck =@"SELECT * FROM `applicant_account` WHERE `username`='$_POST[username]'";
        $resultusername = mysqli_query($con, $sqlcheck);
        $value = mysqli_num_rows($resultusername);
        if($value>=1){
        $sqlaccount = @"UPDATE `applicant_account` SET `password`='$_POST[password]' WHERE `username`='$_POST[username]'";
        mysqli_query($con, $sqlaccount);
        echo '<script>
                 alert("Change password complete!");
                 window.location.href="login_form.php";
                 </script>';
        }else{
            echo '<script>
                 alert("Username is not exist!");
                 window.location.href="login_form.php";
                 </script>';
        }
    
}
