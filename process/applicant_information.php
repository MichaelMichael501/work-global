<html>
<?php include('config.php');
include('insert_designation.php'); ?>
<title>Admin</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<!-- Libraries Stylesheet -->
<link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../lib/animate/animate.min.css" rel="stylesheet">
<link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<link href="../lib/twentytwenty/twentytwenty.css" rel="stylesheet" />
<!-- Customized Bootstrap Stylesheet -->
<link href="../CSS/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/owl.carousel.min.css">
<link rel="stylesheet" href="../CSS/employer.css">
<link rel="stylesheet" href="../CSS/for_all_pages.css">
<link rel="stylesheet" href="../CSS/membership.css">
<link rel="stylesheet" href="../CSS/admin.css">
<link rel="stylesheet" href="../CSS/applicant_info.css">

<div class="header">
    <a href="admin_dashboard.php">
        <h1 class="website-title">Job Access.ph</h1>
        <img src="../img/Work-Global-Logo-small1.png" alt="image" class="header-image">
    </a>
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown()">Admin<img src="../img/drop-down-arrow.png" class="dropdown-icon"></button>
        <div class="dropdown-content" id="dropdown-menu">
            <a href="../admin_dashboard.php"><img src="../img/home.png" class="dropdown-logo">Home</a>
            <a href="../admin_application.php"><img src="../img/application.png" class="dropdown-logo"> Application</a>
            <a href="../employer_list.php"><img src="../img/employer.png" class="dropdown-logo">Employer</a>
            <a href="../applicant_list.php"><img src="../img/applicant.png" class="dropdown-logo">Applicant</a>
            <a href="logout_emp.php"><img src="../img/logout.png" class="dropdown-logo">Logout</a>
        </div>
    </div>
</div>

<body>
    <!--Content------------------------------------------------------------>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $appId = $_POST['applicantId'];
        $jobId = $_POST['jobId'];
        $sqlAppinfo = mysqli_query($con, "SELECT * FROM `applicant_information` WHERE `id`='$appId'");
        $getappinfo = mysqli_fetch_array($sqlAppinfo);
        $sqlJobinfo = mysqli_query($con, "SELECT * FROM `job_offer` WHERE `job_id`='$jobId'");
        $getjobinfo = mysqli_fetch_array($sqlJobinfo);
        $empId = $getjobinfo['employer_id'];
        $sqlEmpinfo = mysqli_query($con, "SELECT * FROM `employer_information` WHERE `id`='$empId'");
        $getempinfo = mysqli_fetch_array($sqlEmpinfo);
        $sqlPhoto = mysqli_query($con, "SELECT * FROM `applicant_photo` WHERE `id`='$appId'");
        $getFiledir = mysqli_fetch_array($sqlPhoto);
        $count = mysqli_num_rows($sqlPhoto);
    ?>

    <?php
    }
    ?>
    <div class="app-container">
        <h3 class="app-name"><?php echo "Name: " . $getappinfo['first_name'] . "," . $getappinfo['first_name'] . " " . $getappinfo['middle_name'] ?></h3>
        <h4 class="app-contact">Contact:<?php echo " " . $getappinfo['contact_number'] ?></h4>
        <h3 class="position">Position:<?php echo " " . $getjobinfo['position']; ?></h3>
        <img class="app-photo" src="<?php if ($count < 1) {
                                        echo "../img/profile-user.png";
                                    } else {
                                        echo "../" . $getFiledir['photo_dir'];
                                    } ?>" alt="">
    </div>
    <div class="insert-dsgntn">
        <h5 class="status-label">Status:</h5>
        <h5 class="date-label">date:</h5>
        <h5>Location</h5>
        <form method="post">
            <input type="hidden" value="<?php echo $appId; ?>" id="appId" name="appId">
            <input type="text" class="app-location" name="applocation" id="applocation">
            <input type="date" class="app-date" name="appdate" id="appdate">
            <input type="text" class="app-status" name="appstatus" id="appstatus"><br><br>
            <input type="submit" name="send-status" id="send-status" class="all-button">
        </form>
    </div>

    <div class="applicant-table">
        <table class="all-table">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Designation</th>
                    <th>position</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlApplicantdes = mysqli_query($con, "SELECT * FROM `applicant_designation` WHERE `applicant_id`='$appId'");
                while ($res = mysqli_fetch_array($sqlApplicantdes)) {
                    echo "<tr>";
                    echo "<td>".$getempinfo['company_name']."</td>";
                    echo "<td>".$res['designation']."</td>";
                    echo "<td>".$getjobinfo['position']."</td>";
                    echo "<td>".$res['date']."</td>";
                    echo "<td>".$res['status']."</td>";
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
    <!--------------------------------------------------------------------->

    <!---- JavaScript------------------------------------------------------>
    <?php include('../includes/include_js.php'); ?>

    <!--------------------------------------------------------------------->
</body>
<!--Footer------------------------------------------------------------->

<!--------------------------------------------------------------------->

</html>