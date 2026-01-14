<?php
 
session_start();
 
/*Destroy session */
 
session_unset();
 
session_destroy();
 
/* Redirect */
 
header("Location: login.php");
 
exit;