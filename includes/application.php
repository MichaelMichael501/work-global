<?php
session_start();
include('process/config.php')
?>
<div class="applicant-table">
        <table class="all-table">
            <thead>
                <tr> 
                    <th><a href="add_applicant.php"><button class="all-button">Add</button></th>
                    <form action="process/applicant_remark.php" id="remarks" method="post">
                    <th><input type="submit" id="btnremarks" name="btnremarks" class="all-button"value = "Interview"></th>
                    <th><input type="submit" id="btnremarks" name="btnremarks" class="all-button"value = "Final Interview"></th>
                    <th><input type="submit" id="btnremarks" name="btnremarks" class="all-button"value = "Pass"></th>
                    <th><input type="submit" id="btnremarks" name="btnremarks" class="all-button"value = "Hired"></th>
                    </form>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>contact</th>
                    <th>Email</th>
                    <th>position</th>
                    <th>remark</th>
                    <th>resume</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
            $sqlApplication=mysqli_query($con,"SELECT * FROM `application`");
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
            echo "<td><input type='checkbox' id='apnumcall' name='apnumcall[]' value='".$appValue['id']." ".$jobId."'form='remarks'></td>";
            echo "<td>".$appValue['last_name'].", ".$appValue['first_name']." ".$appValue['middle_name']."</td>";
            echo "<td>".$appValue['contact_number']."</td>";
            echo "<td>".$appValue['email']."</td>";
            echo "<td>".$jobValue['position']."</td>";
            echo "<td>".$res['remark']."</td>";
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