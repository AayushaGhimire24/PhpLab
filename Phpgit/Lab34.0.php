<?php
session_start();
// Store information in session variables
$_SESSION['username'] = 'Spiderman';
$_SESSION['user_id'] = 123;

// Retrieve information from session variables
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Display the retrieved information
echo "Welcome, $username! Your userID is $user_id.";
?>
