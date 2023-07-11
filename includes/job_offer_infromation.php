<?php
/**
* Description  : Main script for redirection to the correct directory
* Author       : JOHN MICHAEL MASMELA.
* Date Created  : MARCH. 17, 2023
* Date Modified : MARCH. 17, 2023
* Revised By   : JOHN MICHAEL MASMELA. 
*/

include('process/config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
$result = @mysqli_query($con, "SELECT * FROM `job_offer` WHERE `job_id`='$_POST[jobId]'");
while($res = mysqli_fetch_array($result) ) 
        {  ?>
        <?php
        $empId = $res['employer_id'];
        $_SESSION['jobid']=$res['job_id'];
        $resultEmp = @mysqli_query($con, "SELECT * FROM `employer_information` WHERE `id`='$empId'");
        $getValueemp = mysqli_fetch_array($resultEmp);
        $photo = @mysqli_query($con, "SELECT * FROM `job_photo` WHERE `job_id`='$_POST[jobId]'");
        $getPhoto = mysqli_fetch_array($photo);
        $logo = @mysqli_query($con, "SELECT * FROM `employer_logo` WHERE `id`='$empId'");
        $getlogo = mysqli_fetch_array($logo);
        ?>
        <div class="full-info">
        <img src="<?php if($getPhoto['photo_dir'] !=""){echo $getPhoto['photo_dir'];}else{echo $getlogo['photo_dir'];}?>" class="job-photo">
        <h3 class="company-title"><?php echo "Company:</h3>";?>
        <h4 class="company-value"><?php echo $getValueemp['company_name']."</h4>";?>
        <h6 class="company-address"><?php echo $getValueemp['address']."</h6><br>";?>
        <h3 class="job-title-info"><?php echo "Job Title:</h3>";?>
        <h6 class="title-value"><?php echo $res['job_title']."</h6><br>";?>
        
        <h3 class="titledesc"><?php echo "Description:</h3>";?>
        <h6 class="valuedesc"><?php echo $res['description']."</h6><br>";?>
        
        <h3 class="titlereq"><?php echo "Requirements:</h3>";?>
        <h6 class="valuereq"><?php echo nl2br($res['requirement'])."</h6><br>";?>
        
        <a href="job_offer.php"><button class="all-button">Back</button></a>
        <br> <br>
        <?php
        $appid=$_SESSION["applicantId"];
        $jobId=$res['job_id'];
        $countApplication = "SELECT * FROM `application` WHERE `applicant_id`='$appid' AND `job_id`='$jobId'";
        $resultApply = mysqli_query($con,$countApplication);
        $countApp =mysqli_num_rows($resultApply);
        $ifHired = mysqli_fetch_array($resultApply);
        if($countApp<1)
        {
        ?>
        <form name="form" action="process/application.php" method="post">
        <?php $_SESSION['jobid'] = $res['job_id'];
        $_SESSION['empid'] = $res['employer_id'];?>

        <input type ="submit" value="Apply" name="Submit" class="all-button" id="applynow">
        </form>
        <?php
        }else
            {
             if($ifHired['remark']=="Hired"){}
             else{
            ?>
            <form name="form" action="process/cancel.php" method="post">
               <?php $_SESSION['jobidCancel'] = $res['job_id'];
                $_SESSION['appidCancel'] = $appid;?>
                <input type ="submit" value="Cancel" class="all-button" name="Submit" id="">
            </form>
            <?php
             }
            }
      }
}
?>
</div>