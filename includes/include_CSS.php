<?php

/****For all Pages CSS Style*********************************************************************/
$allPages=
<<<HTML
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />
<!-- Customized Bootstrap Stylesheet -->
<link href="CSS/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="CSS/owl.carousel.min.css">
<link rel="stylesheet" href="CSS/employer.css">
<link rel="stylesheet" href="CSS/for_all_pages.css">
HTML;
/***********************************************************************************************/

/****Employer Setting****************************************************************************/
$employerSetting=<<<HTML
<link rel="stylesheet" href="CSS/setting.css">
<link rel="stylesheet" href="CSS/upload.css">
HTML;
/***********************************************************************************************/

/****Employer Post*******************************************************************************/
$employerPost=<<<HTML
<link rel="stylesheet" href="CSS/job_post.css">
HTML;
/***********************************************************************************************/

/****Login CSS**********************************************************************************/
$login=<<<HTML
<link rel="stylesheet" href="CSS/login.css">
<link rel="stylesheet" href="CSS/login_form.css">
HTML;
/***********************************************************************************************/

/****Admin CSS**********************************************************************************/
$admin=<<<HTML
<link rel="stylesheet" href="CSS/admin.css">
<link rel="stylesheet" href="CSS/register.css">
<link rel="stylesheet" href="CSS/upload.css">
HTML;
/***********************************************************************************************/

/****application Table***************************************************************************/
$applicantTable=<<<HTML
<link rel="stylesheet" href="CSS/application.css">
HTML;
/***********************************************************************************************/

/****applicant CSS***************************************************************************/
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
 
if($isMob){
$applicantDash=<<<HTML
<link rel="stylesheet" href="mobile-css/applicant_dashboard.css">
<link rel="stylesheet" href="mobile-css/upload.css">
<link rel="stylesheet" href="mobile-css/register.css">
<link rel="stylesheet" href="mobile-css/job.css">
HTML;
 }

else{ 
$applicantDash=<<<HTML
<link rel="stylesheet" href="CSS/applicant_dashboard.css">
<link rel="stylesheet" href="CSS/upload.css">
<link rel="stylesheet" href="CSS/register.css">
HTML;
}
/***********************************************************************************************/

/****applicant CSS***************************************************************************/
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
 
if($isMob){ 
    $jobOffer=<<<HTML
    <link rel="stylesheet" href="mobile-css/job.css">
    HTML;
}

else{ 
$jobOffer=<<<HTML
<link rel="stylesheet" href="CSS/job.css">
HTML;
}
/***********************************************************************************************/

?>

