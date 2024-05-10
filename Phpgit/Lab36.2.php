<?php
session_start();
//check if the user is authenticated 
if(!isset($_SESSION['authenticated'])||
$_SESSION['authenticated']!==true){
    //redirect to login page if not authenticated
    header('location:Lab36.1.php');
    exit;
}
//display the dashbord content for authenticated users
?>