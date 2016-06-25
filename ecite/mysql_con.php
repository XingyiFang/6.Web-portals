<?php
$servername = "localhost";
$username = "root";
$password = "cisc255b";
$db = 'onlineform';
// Create connection
$conn = new mysqli($servername, $username, $password, $db) or die("Connection failed: " . $conn->connect_error);

//echo "success!";
?>