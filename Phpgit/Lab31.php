<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // If you have a password, replace it here
$dbname = "webdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query with aggregate functions
$sql = "SELECT 
            COUNT(*) AS total_guests,
            AVG(age) AS avg_age,
            MAX(age) AS max_age,
            MIN(age) AS min_age
        FROM 
            myguests";

// Execute the query
$result = $conn->query($sql);

// Check if query executed successfully
if ($result) {
    // Fetch associative array of the result
    $row = $result->fetch_assoc();

    // Display the results
    echo "Total Guests: " . $row["total_guests"] . "<br>";
    echo "Average Age: " . $row["avg_age"] . "<br>";
    echo "Maximum Age: " . $row["max_age"] . "<br>";
    echo "Minimum Age: " . $row["min_age"] . "<br>";
} else {
    echo "Error executing query: " . $conn->error;
}

// Close the connection
$conn->close();
?>
