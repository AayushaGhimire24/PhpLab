<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webdb";
$conn=mysqli_connect($servername,$useraname,$password,$dbname);
if(!$conn){
       die("connection failed: ".mysqli_connect_errno());
     }
     $sql="insert into myguests(firstname,lastname,email)
     values ('aayusha','ghimire','aayu@gmail.com')";
     if(mysqli_query($conn,$sql)){
                echo "database created successfully";
            }else{
              echo "error creating database: ".mysqli_error($conn);
            }
        mysqli_close($conn);
?>