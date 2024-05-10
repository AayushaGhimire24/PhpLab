<?php
session_start();
$validUsername='user123';
$validPassword='pasw123';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    //validate credentials
    if($username=$validUsername && $password==$validPassword){
        //authentication successful
        $_SESSION['authenticated']=true;
        $_SESSION['username']=$username;
        //redirect to a protected page or dashbord
        header('location:Lab36.2.php');
        exit;
    }else{
        //authorization failed
        $error='invalid username or password';
    }
}
