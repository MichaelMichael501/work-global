<?php
include('process/config.php');
$sqlApplication=@"SELECT * FROM `application` WHERE `remark`<>'hired'";
$result = mysqli_query($con,$sqlApplication);
$countApplication = mysqli_num_rows($result);
$sqlHired=@"SELECT * FROM `application` WHERE `remark`='hired'";
$hiredValue = mysqli_query($con,$sqlHired);
$countHired = mysqli_num_rows($hiredValue);
$sqlPosted=@"SELECT * FROM `job_offer`";
$posted = mysqli_query($con,$sqlPosted);
$countPosted = mysqli_num_rows($posted);
$sqlapplicant= @"SELECT * FROM `applicant_information`";
$resultinfo = mysqli_query($con,$sqlapplicant);
$countApplicant = mysqli_num_rows($resultinfo);
?>

<div class="board">
    
    <div class="number-application">
        <img src="img/application.png" class="application-logo" alt="">
        <h3>Application</h3>
        <h3><?php echo $countApplication;?></h3>
    </div>

    <div class="number-hired">
        <img src="img/candidate.png" class="application-logo" alt="">
        <h3>Hired Applicant</h3>
        <h3><?php echo $countHired;?></h3>
    </div>

    <div class="number-posted">
        <img src="img/post.png" class="application-logo" alt="">
        <h3>Job Posted</h3>
        <h3><?php echo $countPosted;?></h3>
    </div>

    <div class="number-applicant">
        <img src="img/applicant.png" class="application-logo" alt="">
        <h3>Job Posted</h3>
        <h3><?php echo $countApplicant;?></h3>
    </div>

</div>

