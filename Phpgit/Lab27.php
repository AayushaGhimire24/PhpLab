
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webdb";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("connection failed: ".mysqli_connect_errno());
}
$sql="SELECT * FROM myguests";
 //Execute sql statements
 $res =mysqli_query($conn,$sql);
 //check if query was successful
 if(mysqli_num_rows($res)>0){
    //fetch the data and output
    while($row=mysqli_fetch_assoc($res)){
        echo "id:".$row["id"]."-Name:".$row["firstname"]."".$row["lastname"]."".$row["email"]."<br>";
    }
 }else{
    echo "Zero record";
 }
 mysqli_close($conn);
        ?>