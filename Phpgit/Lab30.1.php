<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <!-- <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style> -->
</head>
<body>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if search term is provided
if(isset($_POST['search_term'])) {
    $search_term = $_POST['search_term'];

    // SQL query to retrieve data based on search term
    $sql = "SELECT * FROM myguests WHERE firstname LIKE ? OR lastname LIKE ? OR email LIKE ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $search_param = "%$search_term%";
    $stmt->bind_param("sss", $search_param, $search_param, $search_param);

    // Execute the statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
} else {
    echo "No search term provided";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
</body>
</html>
