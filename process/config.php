<?php


/**
* Description  : Main script for redirection to the correct directory
* Author       : JOHN MICHAEL MASMELA.
* Date Created  : MAY. 17, 2023
* Date Modified : MAY. 17, 2023
* Revised By   : JOHN MICHAEL mASMELA. 
*/



   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'work_global');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $con->set_charset("utf8mb4");

?>