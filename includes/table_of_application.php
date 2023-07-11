<?php
include('process/config.php');
?>
<div class="applicant-table">
        <table class="all-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>position</th>
                    <th>date</th>
                    <th>resume</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $empId=$_SESSION['employerId'];
            $sqlApplication=mysqli_query($con,"SELECT * FROM `application` WHERE `employer_id`='$empId'");
            while($res = mysqli_fetch_array($sqlApplication)) 
            {
            $appId=$res['applicant_id'];
            $jobId=$res['job_id'];
            $sqlApplicant = mysqli_query($con,"SELECT * FROM `applicant_information` WHERE `id`='$appId'");
            $appValue = mysqli_fetch_array($sqlApplicant);
            $sqlResume = mysqli_query($con,"SELECT * FROM `applicant_resume` WHERE `id`='$appId'");
            $resValue = mysqli_fetch_array($sqlResume);
            $sqlJob = mysqli_query($con,"SELECT * FROM `job_offer` WHERE `job_id`='$jobId'");
            $jobValue = mysqli_fetch_array($sqlJob);
            echo "<tr>";
            echo "<td>".$appValue['last_name'].", ".$appValue['first_name']." ".$appValue['middle_name']."</td>";
            echo "<td>".$appValue['gender']."</td>";
            echo "<td>".$jobValue['position']."</td>";
            echo "<td>".$res['date']."</td>";
            echo "<td><a href='".$resValue['file_dir']."'>Download/Show</a></td>";
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