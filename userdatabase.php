
<?php
$Servername = "localhost";
$Username = "root";
$Password = " ";

// Create connection
$conn = new mysqli($Servername, $Username, $Password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE userDataBase";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();

