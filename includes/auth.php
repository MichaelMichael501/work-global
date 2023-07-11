<?php

/**
* Description 	: Main script for redirection to the correct directory
* Author 		: JOHN MICHAEL mASMELA.
* Date Created  : MARCH. 17, 2023
* Date Modified : MARCH. 17, 2023
* Revised By 	: JOHN MICHAEL mASMELA.	
*/

// Start session
session_start();

/** 
 * check stored session id if its the same as the generated session id for the
 * current session
 */




	// code...

if ($_SESSION['id'] != session_id()) 
   {
		
	    header("location: login_form.php");
	    exit();


   }



// EOF