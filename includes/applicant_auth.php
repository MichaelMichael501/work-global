<?php
session_start(); 
if(isset($_SESSION["applicantId"])){

    if ($_SESSION["applicantId"] != "")  {
            
        // redirect to the login page
            ?><style>#loginbutton{display: none;}#logoutbutton{display: block;}#signupbtn{display: none;}#editprofileapp{display:block;}</style><?php
    }
    
    }
    else{
               ?><style>#logoutbutton{display: none;} #loginbutton{display: block;}#signupbtn{display: block;}#editprofileapp{display:none;}</style><?php
    
    }
?>