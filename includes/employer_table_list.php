<?php
include('process/config.php')
?>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['showed'])) {
            $getEmpid = $_POST['showed'];
        }
    }
    ?>
    <div class="employer-info">
        <?php
        $sqlLogo = mysqli_query($con, "SELECT * FROM `employer_logo` WHERE `id`= '$getEmpid'");
        $logo = mysqli_fetch_array($sqlLogo);
        $sqlGetaccount = mysqli_query($con, "SELECT * FROM `employer_account` WHERE `id`= '$getEmpid'");
        $empAccount = mysqli_fetch_array($sqlGetaccount);
        $sqlGetapplication = mysqli_query($con, "SELECT * FROM `application` WHERE `employer_id`= '$getEmpid'");
        $countApplicant = mysqli_num_rows($sqlGetapplication);
        $sqlGetjob = mysqli_query($con, "SELECT * FROM `job_offer` WHERE `employer_id`= '$getEmpid'");
        $countJob = mysqli_num_rows($sqlGetjob);
        $sqlGetinfo = mysqli_query($con, "SELECT * FROM `employer_information` WHERE `id`= '$getEmpid'");
        $empInfo = mysqli_fetch_array($sqlGetinfo);
        ?>
        <div class="info-header">
         <img src="<?php echo $logo['photo_dir'];?>" class="get-logo">
         <br>
         <h4 class="get-company-name"><?php echo $empInfo['company_name'];?></h4>
        </div>

        <div class="other-info">
            <h4 class="employer-applicant">Address:<h6><?php echo $empInfo['address']; ?></h6></h4>
            <h4 class="employer-applicant">Contact:<h6><?php echo $empInfo['contact'];?></h6></h4>
            <h4 class="employer-applicant">Registered Number:<h6><?php echo $empInfo['registered_number'];?></h6></h4>
            <br><br>
            <h4 class="employer-applicant">Number of Applicants:<?php echo $countApplicant; ?></h4>
            <br>
            <h4 class="employer-applicant">Number of Jobs:<?php echo $countJob; ?></h4>
            <br>
            <h4 class="employer-applicant">Expiration Date:<?php echo $empAccount['expiration_date']; ?></h4>
        </div>
    </div>


<form action="" method="post">
    <button type="submit" id="selectedA" name="selected" class="select-btn" value="Activated">Paid</button>
    <button type="submit" id="selectedD" name="selected" class="select-btnNp" value="Deactivated">Non-Paid</button>
</form>
<div class="employer-table">

    <table class="all-table">

        <thead>
            <tr>
                <th>Company Name</th>
                <th>President/CEO</th>
                <th>Contact</th>
                <th>Status</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['selected'])) {
                    $trigger = $_POST['selected'];
                }
            }

            if (isset($trigger) == "Acitvated") {
                $sqlEmployer = mysqli_query($con, "SELECT * FROM `employer_account` WHERE `status`='$trigger'");
            } elseif (isset($trigger) == "Deactivated") {
                $sqlEmployer = mysqli_query($con, "SELECT * FROM `employer_account` WHERE `status`='$trigger'");
            } else {
                $sqlEmployer = mysqli_query($con, "SELECT * FROM `employer_account`");
            }
            while ($expDate = mysqli_fetch_array($sqlEmployer)) {
                $empId = $expDate['id'];
                $sqlAccount = mysqli_query($con, "SELECT * FROM `employer_information` WHERE `id`= '$empId'");
                $res = mysqli_fetch_array($sqlAccount);
                echo "<tr>";
                echo "<form action='process/membership.php' id='remarks' method='post'>";
                echo "<input type='hidden' name='empId' id='empId' value='" . $res['id'] . "'>";
                echo "<td>" . $res['company_name'] . "</td>";
                echo "<td>" . $res['president/ceo'] . "</td>";
                echo "<td>" . $res['contact'] . "</td>";
                echo "<td>" . $expDate['status'] . "</td>";
                if ($expDate['status'] == 'Activated') {
                    echo "<td></td>";
                } else {
                    echo "<td><input type='submit' id='submit-membership' name='submit-membership' value='Activate' class='all-button'/></td>";
                }
                echo "</form>";

                echo "<form method='post'><td><button type='submit' id='showed' name='showed' class='show' value='" . $res['id'] . "'>Show</button></td></form>";
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