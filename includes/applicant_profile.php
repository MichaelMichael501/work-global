<div id="profile" class="app-profile">
        <?php
        include("process/config.php"); 
        $appId = $_SESSION["applicantId"];
        $sql = "SELECT * FROM `applicant_photo` WHERE `id`='$appId'";
        $sqlapplicant = "SELECT * FROM `applicant_information` WHERE `id`='$appId'";
        $sqlresume = "SELECT * FROM `applicant_resume` WHERE `id`='$appId'";
        $resultValue = mysqli_query($con,$sqlapplicant);
        $value = mysqli_fetch_array($resultValue,MYSQLI_ASSOC);
        $result = mysqli_query($con,$sql);
        $callResume = mysqli_query($con,$sqlresume);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $resumeFile = mysqli_fetch_array($callResume,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        ?>
        
        <img src="<?php if($count < 1 ){echo "img/profile-user.png";}else{echo $row['photo_dir'];} ?>" alt="image" class="profile-image">
        <h3 class="app-name"><?php echo $value['last_name'].", ".$value['first_name']." ".$value['middle_name'];?></h3>
        

    <?php
?>
<div class="applicant-table">
        <table class="all-table">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Job Title</th>
                    <th>position</th>
                    <th>date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            
            $sqlApplication=mysqli_query($con,"SELECT * FROM `application`");
            while($res = mysqli_fetch_array($sqlApplication)) 
            {
            $empId=$res['employer_id'];
            $appId=$res['applicant_id'];
            $jobId=$res['job_id'];
            $sqlApplicant = mysqli_query($con,"SELECT * FROM `applicant_information` WHERE `id`='$appId'");
            $appValue = mysqli_fetch_array($sqlApplicant);
            $sqlCompany = mysqli_query($con,"SELECT * FROM `employer_information` WHERE `id`='$empId'");
            $resValue = mysqli_fetch_array($sqlCompany);
            $sqlJob = mysqli_query($con,"SELECT * FROM `job_offer` WHERE `job_id`='$jobId'");
            $jobValue = mysqli_fetch_array($sqlJob);
            echo "<tr>";
            echo "<td>".$resValue['company_name']."</td>";
            echo "<td>".$jobValue['job_title']."</td>";
            echo "<td>".$jobValue['position']."</td>";
            echo "<td>".$res['date']."</td>";
            echo "<td>".$res['remark']."</td>";
            echo "</tr>";
            ?>
             
            <?php
            }
            ?>   
            </tbody>
        
<?php
?>
    </table>
</div>
</div>