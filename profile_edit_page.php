<!DOCTYPE html>
<html lang="en">
    <?php
    $accountType="applicant";
    include('includes/content.php');
    include('includes/applicant_auth.php'); ?>
<head>
    <!-- CSS Library -->
    <title>Applicant</title>
    <?php
    include ('includes/include_CSS.php');
    echo $allPages;
    echo $applicantDash;
    ?>
</head>

<body style="background-color:White;">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    


    <!-- Navbar Start -->
   
    <!-- Navbar End -->
    <!-- content Start -->
    
    <!-- Resume -->
      <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
    <a href="applicant_dashboard.php" id="backbtn"><button class="all-button">Back</button></a>
    <button class="all-button" name="changeProfile" id="changeProfile">Change Account</button></div>
    <!--Requirements Tab/Container-->
    <div id="Requirmentscontainer" style="display:none;">
        <button name="close" id="close">X</button><br>
         <form name="form" action="process/update_account.php" enctype="multipart/form-data" method="post">
        <label>New Username</label>
        <br>
        <input type='text' name='newusername' id='newusername'><br>
        <label>New Password</label>
        <br>
        <input type='password' name='newpassword' id='newpassword'>
        <br>
        <label>New Email</label>
        <br>
        <input type='email' name='newemail' id='newemail'>
        <br><br><input type="submit" id="updateuseraccount">
        </form>
        <br><br>
        </div>
                       
         </div>
                    </div>
                </div>
            </div>
    <!-- Content End -->
   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php include('includes/include_js.php');?>
    <script src="js/open-requirment-file.js"></script>
   
    
</body>
<?php echo $applicantFooter;?>
</html>