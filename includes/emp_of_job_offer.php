
<?php
/**
* Description  : Main script for redirection to the correct directory
* Author       : JOHN MICHAEL MASMELA.
* Date Created  : MARCH. 17, 2023
* Date Modified : MARCH. 17, 2023
* Revised By   : JOHN MICHAEL mASMELA. 
*/
 // using mysqli_query instead
 include('process/config.php');
 $result = @mysqli_query($con, "SELECT * FROM `job_offer` WHERE `employer_id`='$GetId'");
?>

    
            <h3 class='legend-job'>Jobs Hiring</h3>
        <table id="myTableJO">
        <?php
        while($res = mysqli_fetch_array($result)) 
        {   ?><tr><td><?php
            ?> <div class="job-offer-list">
            <form name="form" action="full_info_job.php" method="post">
            <?php 
            $jobId=$res['job_id'];
            $empId=$res['employer_id'];
            $sqlphoto= @mysqli_query($con, "SELECT * FROM `job_photo` WHERE `job_id`='$jobId';");
            $photo = mysqli_fetch_array($sqlphoto);
            $sqlemployer= @mysqli_query($con, "SELECT * FROM `employer_information` WHERE `id`='$empId';");
            $infoData = mysqli_fetch_array($sqlemployer);
            $sqlemployerLogo= @mysqli_query($con, "SELECT * FROM `employer_logo` WHERE `id`='$empId';");
            $empLogo = mysqli_fetch_array($sqlemployerLogo);
            ?>
            <input type="hidden" value="<?php echo $jobId;?>" id="jobId" name="jobId"/>
            <h5 class="company-name"><?php echo $infoData['company_name']?></h5>
            <h5 class="job-title"><?php echo $res['job_title']; ?></h5>
            <img src="img/job-salary.png" class="salary" alt="">
            <h5 class="salary-title">Salary:</h5>
            <h5 class="salary-value"><?php echo $res['salary'];?></h5>
            <img src="img/job-shift.png" class="shift" alt="">
            <h5 class="shift-title">Shift:</h5>
            <h5 class="shift-value"><?php echo $res['schedule'];?></h5>
            <img src="img/job-address.png" class="address" alt="">
            <h5 class="address-title">Location:</h5>
            <h5 class="address-value"><?php echo $res['location'];?></h5>
            <img src="img/job-contact.png" class="job-contact" alt="">
            <h5 class="contact-title">Contact:</h5>
            <h5 class="contact-value"><?php echo $infoData['contact'];?></h5>
            <img src="img/job-website.png" class="website" alt="">
            <h5 class="emp-website-title">Website:</h5>
            <h5 class="website-value"><a href="<?php echo $infoData['website']?>"><u><?php echo $infoData['website'];?></u></a></h5>
            <img src="<?php if($photo['photo_dir'] !=""){echo $photo['photo_dir'];}else{echo $empLogo['photo_dir'];} ?>" class="job-photo" alt="">
            <input type='submit' name='submit' id='applynw' class="all-button apply-btn" value='See More!'>
            <?php
           ?></form></div></td></tr>
        <?php }
             ?>
        </table>

