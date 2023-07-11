<html>
<?php include('config.php'); ?>
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
  <form method="post" action="process_membership.php">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sqlEmployer = mysqli_query($con, "SELECT * FROM `employer_information` WHERE `id` = '$_POST[empId]' ");
      $employerInfo = mysqli_fetch_array($sqlEmployer);
      $sqlEmployerlogo = mysqli_query($con, "SELECT * FROM `employer_logo` $_POST[empId]");
      $employerLogo = mysqli_fetch_array($sqlEmployerlogo);
      echo "<h3 class = 'company-name'>" . $employerInfo['company_name'] . "</h3>";
      echo "<h5 class = 'company-address'>" . $employerInfo['address'] . "</h5>";
      echo "<img src='../" . $employerLogo['photo_dir'] . "' class='employer-logo' alt=''>";
      
    }
    ?>
    <input type="hidden" name="empId" id="empId" value="<?php echo $_POST['empId']; ?>" />
    <label class="label-membership">Membership: </label><br>
    <div class="membership">
      <input type="radio" name="membership" id="option-1" value="Monthly" checked>
      <input type="radio" name="membership" id="option-2" value="Quarterly">
      <input type="radio" name="membership" id="option-3" value="Yearly">
      <input type="submit" name="submit" class="all-button membership-btn" value="Activate">
      <label for="option-1" class="option option-1">
        <div class="dot"></div>
        <span>1 Month/30days Activation of Account</span>
      </label>
      <label for="option-2" class="option option-2">
        <div class="dot"></div>
        <span>3 Month/90days Activation of Account</span>
      </label>
      <label for="option-3" class="option option-3">
        <div class="dot"></div>
        <span>1 Year/365days Activation of Account</span>
      </label>
    </div>

  </form>
  <!--------------------------------------------------------------------->

  <!--About Company/Employer--------------------------------------------->

  <!--------------------------------------------------------------------->



  <!---- JavaScript------------------------------------------------------>

  <!--------------------------------------------------------------------->

</body>

</html>