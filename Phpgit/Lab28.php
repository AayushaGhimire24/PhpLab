<?php
$username="root";
$servername="localhost";
//$useraname="root";
$password="";
$dbname="webdb";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("connection failed: ".mysqli_connect_errno());
}
$sql ="SELECT id,firstname,lastname,email FROM myguests";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "<h2>Guest List</h2>";
    echo "<table border='1'
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
                </tr>";
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["firstname"]."</td>
                    <td>".$row["lastname"]."</td>
                    <td>".$row["email"]."</td></tr>";
                }
                echo "</table>";
}else{
    echo "No records found";
}mysqli_close($conn);
        ?>
