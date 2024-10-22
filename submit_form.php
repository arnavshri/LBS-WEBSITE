<?php
// Retrieve form data
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lbs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO form (name, email, lastname, mobile, message) VALUES ('$name', '$email', '$lastname', '$mobile', '$message')";

if ($conn->query($sql) === TRUE) {
    // echo "Data submitted successfully!";
    include "message.php";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>