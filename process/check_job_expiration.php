<?php
include_once('config.php');
$result = @mysqli_query($con, "SELECT * FROM `job_offer`");
while($res = mysqli_fetch_array($result) ) 
        {
            $stringDate=$res['expiration'];
            //$date=date('m-d-Y', strtotime());
            $currentDate = date('m-d-Y');
            if($currentDate>=$stringDate){
                $jobId = $res['job_id'];
                $sqlJob = @"UPDATE `job_offer` SET `status`='Expire' WHERE `job_id`='$jobId'";
                mysqli_query($con, $sqlJob);
            }
        }
        mysqli_close($con);
?>