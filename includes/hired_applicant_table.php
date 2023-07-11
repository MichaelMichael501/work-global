<?php
include("process/config.php");
?>
<div class="applicant-table hired-table">
    <table class="all-table" id="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>position</th>
                <th>date</th>
                <th>remark</th>
                <th>location</th>
                <th>resume</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqlApplication = mysqli_query($con, "SELECT * FROM `application` WHERE `remark`='Hired' ");
            while ($res = mysqli_fetch_array($sqlApplication)) {
                $appId = $res['applicant_id'];
                $jobId = $res['job_id'];
                $sqlApplicant = mysqli_query($con, "SELECT * FROM `applicant_information` WHERE `id`='$appId'");
                $appValue = mysqli_fetch_array($sqlApplicant);
                $sqlResume = mysqli_query($con, "SELECT * FROM `applicant_resume` WHERE `id`='$appId'");
                $resValue = mysqli_fetch_array($sqlResume);
                $sqlJob = mysqli_query($con, "SELECT * FROM `job_offer` WHERE `job_id`='$jobId'");
                $jobValue = mysqli_fetch_array($sqlJob);
                echo "<tr>";
                echo "<td>" . $appValue['last_name'] . ", " . $appValue['first_name'] . " " . $appValue['middle_name'] . "</td>";
                echo "<td>" . $appValue['gender'] . "</td>";
                echo "<td>" . $jobValue['position'] . "</td>";
                echo "<td>" . $res['date'] . "</td>";
                echo "<td>" . $res['remark'] . "</td>";
                echo "<td>" . $jobValue['location'] . "</td>";
                echo "<td><a href='" . $resValue['file_dir'] . "'>Download/Show</a></td>";
                echo "<form action='process/applicant_information.php' method='post'>";
                echo "<input type='hidden' value='" . $appId . "' id='applicantId' name='applicantId'> ";
                echo "<input type='hidden' value='" . $jobId . "' id='jobId' name='jobId'> ";
                echo "<td><a href='applicant_monitoring.php'><input type='submit' value='Designation' class='all-button'></a></td>";
                echo "</form>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>