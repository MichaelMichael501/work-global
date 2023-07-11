<!DOCTYPE html>
<!-- Includes -->
<?php 
 include('includes/include_body.php');
 include('includes/content.php');
 include('includes/include_CSS.php');
 $accountType = 'admin';
 include('process/login.php');
 ?>
<!------------------------------------------------------------------------>

<title>Admin</title>

<!---- CSS Style --------------------------------------------------------->
<?php 
echo $allPages;
echo $login;
?>
<!------------------------------------------------------------------------>

<!----Header-------------------------------------------------------------->
<?php echo $loginHeader;?>
<!------------------------------------------------------------------------>
<body>

<!--Content Start--------------------------------------------------------->
<div class="admin-form">
<form method="post">
  <h2>Login</h2>
  Username:<br>
  <input type="text" name="username" class="username" autofocus="" autocapitalize="none" autocomplete="username" required id="id_username"><br>
  Password:
  <input type="password" class="password" name="password" autocomplete="current-password" require id="id_password">
  <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
  <br>
  <a href="">Forgot Password</a><br>
  <input type="submit" class="login-button" value="Login">
</form>
</div>
<!--Content End----------------------------------------------------------->


 


<!----JavaScript------------------------------------------------------->
<?php 
    include('includes/include_js.php');
    echo $loginjs;
?>
<!--------------------------------------------------------------------->


</body>
<!--Footer------------------------------------------------------------->
<?php echo $footer;?>
<!--------------------------------------------------------------------->
</html>