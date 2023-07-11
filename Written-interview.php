<!DOCTYPE html>
<html lang="en">
<?php
include('process/Store-Applicant-Information.php');
include('process/sidenavbar.php');
include ('process/content.php');
include('process/auth.php');
?>
<head>
    <link rel="stylesheet" href="Sign-up.css">
    <title></title>
    <!-- CSS Library -->
    <?php
    include ('process/include_css.php');
    ?>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/signp.css" rel="stylesheet">
    <link href="css/upload.css" rel="stylesheet">
    <link href="css/exam.css" rel="stylesheet">
</head>

<body style="background:">
    
    <!-- Spinner Start -->
    <?php echo $spinnerloading;?>
    <!-- Spinner End -->
    
    <!-- Navbar Start -->
    <?php
    echo $applicant_navigation;
    echo $applicant_navigation1;
    ?>
    <!-- Navbar End -->
   


    <!-- Examenation for employment -->
    <div id="ExamPage">
    <form name="form" action="process/store-interview-value.php" enctype="multipart/form-data" method="post">
        <a href="login-applicant.php"><button class="button-5" role="button">Skip</button></a>
    <H1>Written Interview</H1>
    <!-- psychological exam -->&nbsp;
    <h5>This Interview will reflect for final interview</h5>   
    <label>1. Tell us about your past experience work, and why does you leave your job</label><br><br>
    <textarea cols="100" rows="15" id="interviewquestion1" name="interviewquestion1" onkeydown="return /[a-z, ]/i.test(event.key)">
     <?php echo $comments1="";?>
    </textarea><br><br>
    <label>2. How will you handle all the problem that will affect your job</label><br><br>
    <textarea cols="100" rows="15" id="interviewquestion2" name="interviewquestion2" onkeydown="return /[a-z, ]/i.test(event.key)">
     <?php echo $comments2="";?>
    </textarea><br><br>
    <label>3. What do you expect in this company</label><br><br>
    <textarea cols="100" rows="15" id="interviewquestion3" name="interviewquestion3" onkeydown="return /[a-z, ]/i.test(event.key)">
     <?php echo $comments3="";?>
    </textarea><br><br>
    <label>4. What will you do if one of the employee is annoying to you</label><br><br>
    <textarea cols="100" rows="15" id="interviewquestion4" name="interviewquestion4" onkeydown="return /[a-z, ]/i.test(event.key)">
     <?php echo $comments4="";?>
    </textarea><br><br>
    <input type="submit" name="submit" id="submit" value="Submit" class="button-5"/>
    </form>
    </div>
    <!-- Sign-up End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php include('js/JSinclude.php');?>

    <!-- Template Javascript -->
    <?php echo $writteninterview;?>

    
</body>

</html>