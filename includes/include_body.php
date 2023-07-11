<?php

/****Employer Header*******************************************************************************************************************************/
$employerHeader=                                                    
<<<HTML

<div class="header">
<a href="employer_dashboard.php">
<h1 class="website-title">Work Global.ph</h1>
<img src="img/Work-Global-Logo-small1.png" alt="image" class="header-image">
</a>
<div class="dropdown">
  <button class="dropbtn" onclick="toggleDropdown()">Menu<img src="img/drop-down-arrow.png" class="dropdown-icon"></button>
  <div class="dropdown-content" id="dropdown-menu">
    <a href="employer_dashboard.php"><img src="img/home.png" class="dropdown-logo">Home</a>
    <a href="employer_application.php"><img src="img/application.png" class="dropdown-logo"> Application</a>
    <a href="job_post.php"><img src="img/post.png" class="dropdown-logo">Post</a>
    <a href="setting.php"><img src="img/settings.png" class="dropdown-logo">Settings</a>
    <a href="process/logout_emp.php"><img src="img/logout.png" class="dropdown-logo">Logout</a>
  </div>
</div>
</div> 
HTML;
/********************************************************************************************************************************************/

/****Login and Sign-up Header*******************************************************************************************************************************/
$loginHeader=                                                    
<<<HTML
<div class="header">
<a href="#">
<h1 class="website-title">Work Global.ph</h1>
<img src="img/Work-Global-Logo-small1.png" alt="image" class="header-image">
</a>
</div> 
HTML;
/********************************************************************************************************************************************/

/****privacy and policy Header*******************************************************************************************************************************/
$papHeader=                                                    
<<<HTML
<div class="header">
<a href="#" id="previousPageLink">
<h1 class="website-title">Work Global.ph</h1>
<img src="img/Work-Global-Logo-small1.png" alt="image" class="header-image">
</a>
</div> 
HTML;
/********************************************************************************************************************************************/


/*****Loading Spinner************************************************************************************************************************/
$spinnerloading=
<<<HTML
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
HTML;
/********************************************************************************************************************************************/

/****Footer*******************************************************************************************************************************/
$footer=
<<<HTML
<footer class="footer">
<p class="mb-md-0">&copy; <a class="text-white border-bottom" href="employer_dashboard.php">Work Global brought to you by Crempco</a> © 2022. All rights reserved.<a href="privacy_policy.php" class="privacy-policy"><u>Privacy Policy</u></a><br> This website still under Development</p>
</footer>
HTML;
/********************************************************************************************************************************************/

/**** Applicant Header******************************************************************************************************************************/
$applicant_navigation=
<<<HTML

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0" id="navbar" >
   
        <a href="index.php">
            <h1 class="website-title">Work Global.ph</h1>
            <img src="img/Work-Global-Logo-small1.png" alt="image" class="header-image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button> 
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="job_offer.php" class="nav-item nav-link">Job Offer</a>
                    <a href="about_us.php" class="nav-item nav-link">About</a> </div>
                    <a href="applicant_profile.php" class="all-button  py-2 px-4 ms-3" id="editprofileapp">Profile</a>
                    <a href="login_applicant.php" class="all-button  py-2 px-4 ms-3" id="loginbutton">Login!</a>
                    <a href="process/app_logout.php" class="all-button py-2 px-4 ms-3" id="logoutbutton">Logout!</a>
                </div>         
            </div>
    </nav>
HTML;
/**********************************************************************************************************************************/

/****Admin Header*******************************************************************************************************************************/
$adminHeader=                                                    
<<<HTML

<div class="header">
<a href="admin_dashboard.php">
<h1 class="website-title">Work Global.ph</h1>
<img src="img/Work-Global-Logo-small1.png" alt="image" class="header-image">
</a>
<div class="dropdown">
  <button class="dropbtn" onclick="toggleDropdown()">Admin<img src="img/drop-down-arrow.png" class="dropdown-icon"></button>
  <div class="dropdown-content" id="dropdown-menu">
    <a href="admin_dashboard.php"><img src="img/home.png" class="dropdown-logo">Home</a>
    <a href="admin_application.php"><img src="img/application.png" class="dropdown-logo"> Application</a>
    <a href="employer_list.php"><img src="img/employer.png" class="dropdown-logo">Employer</a>
    <a href="applicant_list.php"><img src="img/applicant.png" class="dropdown-logo">Applicant</a>
    <a href="process/logout_admin.php"><img src="img/logout.png" class="dropdown-logo">Logout</a>
  </div>
</div>
</div> 
HTML;
/********************************************************************************************************************************************/

?>