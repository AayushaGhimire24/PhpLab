<?php
//creating a table using PHP and SQL
$servername="localhost";
$username="root";
$password="";
$dbname="webdb";
//create connection
$conn=mysqli_connect($servername,$useraname,$password,$dbname);
//check connection
if(!$conn){
    die("connection failed: ".mysqli_connect_errno());
}
// $sql="CREATE TABLE students(
//     student_id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(50) NOT NULL,
//     password VARCHAR(20) NOT NULL
//     )";
   $sql="CREATE TABLE myguests (
            id INT Auto_increment primary key,
            firstname varchar(30) not null,
            lastname varchar(30) not null,
            email varchar(50),
            reg_date timestamp
        )";
    if(mysqli_query($conn,$sql)){
       echo "Table created successfully";
    }else{
        echo "Error creating table";
    }
    ?>