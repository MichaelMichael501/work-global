                           <link href="css/table.css" rel="stylesheet">

<?php
/**
* Description  : Main script for redirection to the correct directory
* Author       : JOHN MICHAEL mASMELA.
* Date Created  : MARCH. 17, 2023
* Date Modified : MARCH. 17, 2023
* Revised By   : JOHN MICHAEL mASMELA. 
*/
include('config.php');
    $appid=$_SESSION["applicantId"];
    $_SESSION["appId"]=$appid;
    $resultget = @mysqli_query($con, "SELECT * FROM `applicant_information` WHERE `id`='$appid'");

while($res = mysqli_fetch_array($resultget)) 
        {
                         
         ?>
         <!-- Profile Picture -->
         <button id="editbtn" onclick="hideDiv()"><img src="img/editlogo.png" id="editbtn1"></button>
         <img id="profile-photo" src="">
         
         <!-- Update Form -->
         <form name="form" id="getValue" action="process/updateprofile.php" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
         
         <!-- Update Resume -->
         
         <br>
         <h1 id="title"><?php echo "Profile</h1>";?>
         <h3 class="emailtitle">Email:</h3><h3 class="emailvalue"><?php echo $res['email']?></h3>
         <br><br><br><br><br>
         
         <!-- Edit information -->
         <div id="line-edit" style="display:none;">
         <br>
         <h5 id="fnametitleEdit"><?php echo "Firstname:";?></h5>
         <input type="text" name="valuefnameEdit" id="valuefnameEdit"/>

        <h5 id="mnametitleEdit"><?php echo "Middlename:</h5>";?>
        <input type="text" name="valuemnameEdit" id="valuemnameEdit"/>

        <h5 id="lnametitleEdit"><?php echo "Lastname:</h5>";?>
         <input type="text" name="valuelnameEdit" id="valuelnameEdit"/>

        <h5 id="suffixtitleEdit"><?php echo "Suffix:</h5>";?>
        <input type="text" name="valuesuffixEdit" id="valuesuffixEdit"/>
        
        <h5 id="gendertitleEdit"><?php echo "Gender:</h5>";?>
        <input type="text" name="valuegenderEdit" id="valuegenderEdit"/>

        <h5 id="contacttitleappEdit"><?php echo "Contact:</h5>";?>
        <input type="text" name="valuecontactappEdit" id="valuecontactappEdit"/>
        <input type="submit" class="submit-update-btn" name="submit" value="Submit"/>
        </form>
        </div>
       
        <button class="profile-btn" id="profileBack">Back</button>
         
         <!-- View Information-->
         <div id="line">
         <br><h5 id="fnametitle"><?php echo "Firstname:</h5>";?>
         <input type="text" name="valuefname" id="valuefname" value="<?php echo $res['first_name'];?>" readonly/>

        <h5 id="mnametitle"><?php echo "Middlename:</h5>";?>
        <input type="text" name="valuemname" id="valuemname" value="<?php echo $res['middle_name'];?>" readonly/>

        <h5 id="lnametitle"><?php echo "Lastname:</h5>";?>
         <input type="text" name="valuelname" id="valuelname" value="<?php echo $res['last_name'];?>" readonly/>

        <h5 id="suffixtitle"><?php echo "Suffix:</h5>";?>
        <input type="text" name="valuesuffix" id="valuesuffix" value="<?php echo $res['suffix'];?>" readonly/>
        
        <h5 id="gendertitle"><?php echo "Gender:</h5>";?>
        <input type="text" name="valuegender" id="valuegender" value="<?php echo $res['gender'];?>" readonly/>

        <h5 id="contacttitleapp"><?php echo "Contact:</h5>";?>
        <input type="text" name="valuecontactapp" id="valuecontactapp" value="<?php echo $res['contact_number'];?>" readonly/>
       <button class="update-btn" id="updateBtn" name="updateBtn">Update</button>
      </div>
     

                <?php
      }?>
