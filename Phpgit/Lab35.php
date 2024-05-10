<?php
session_start();
$message="";
if(isset($_POST['submit'])){
    $err=1;
    $fname=$_POST['fname'];
    $mail=$_POST['mail'];
$conn=mysqli_connect("localhost","root",'',"myDB");
$sql="SELECT * from myGuests 
       WHERE firstname='$fname' and email ='$mail'";
       $res=mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($res); 
       if(is_array($row)){
        $_SESSION['firstname']=$fname;
       }else{
         $message="invalid user";
       }
}
if(isset($_SESSION["firstname"])){
  header("Location:index.php");
}
?>
<form  method="POST">
  <div class ="message"><?php if($message!=""){
    echo $message; } ?></div>
    <label> FirstName</label>
    <input type="text" name="fname">
    <label> Email</label>
    <input type="text" name="mail">
    <input type="submit" name="submit" value="login">
</form>
