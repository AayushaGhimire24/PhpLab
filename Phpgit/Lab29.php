<?php
// $servername="localhost";
// $username="root";
// $password="";
// $dbname="webdb";
// $conn=mysqli_connect("localhost","root","","webdb");
// if(!$conn){
//     die("connection failed: ".mysqli_connect_errno());
// }
// //sample data
// $username="Oasis";
// $email="oasica@gmail.com";
// $password="a@123";
// //SQL Statement with parameter building
// $sql="INSERT INTO users(username,email,password)
// VALUES($username,$email,$password)";
// //prepare the statement
// $stmt=$conn->prepare ($sql);
// //bind parameters
// $stmt->bind_param("101",$username,$email,$password);
// //execute the statement
// if($stmt->execute()){
//     echo "Data inserted successfully";
// }else{
//     echo "error inserting data:".$stmt->error;
// }
// $stmt->close();
//$conn->close();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdb";

// Sample data
$firstname = "John";
$lastname = "Doe";
$email = "johndoe@example.com";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL statement with parameterized query
$sql = "INSERT INTO myguests (firstname, lastname, email) VALUES (?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Execute the statement
if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
