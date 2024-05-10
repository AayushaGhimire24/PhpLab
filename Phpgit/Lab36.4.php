<?php
session_start();
//unset all session variables
$_SESSION=array();
//destroy the session
session_destroy();
//redirect to the login page
header('location:Lab36.1.php');
exit;
?>