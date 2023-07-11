<!DOCTYPE html>
<!-- Includes -->
<?php 
 include('includes/include_body.php');
 include('includes/content.php');
 include('includes/include_CSS.php');
 $accountType = 'applicant';
 include('process/login.php');
 ?>
<!------------------------------------------------------------------------>

<title>Login</title>

<!---- CSS Style --------------------------------------------------------->
<?php 
echo $allPages;
echo $login;
?>
<!------------------------------------------------------------------------>

<!----Header-------------------------------------------------------------->
<?php echo $loginHeader;?>
<!------------------------------------------------------------------------>
</head>

<body style="background-color:white;">

 <!--Login Start-->
 <?php echo $applicantLogin;?>
 <!--Login End-->

   

  


    <!-- JavaScript Libraries -->
    <?php include('includes/include_js.php');?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/login_show_password.js"></script>
    <script src="js/loginform.js"></script>
    <script defer="" referrerpolicy="origin" src="js/s.js.download"></script>
    <script src="js/jquery-3.3.1.min.js.download"></script>
    <script src="js/popper.min.js.download"></script>
    <script src="js/bootstrap.min.js.download"></script>
    <script src="js/main.js.download"></script>
    <script defer="" src="js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;79d35ef36e0d1108&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.2.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
</body>

</html>