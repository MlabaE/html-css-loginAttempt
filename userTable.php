<?php
$Servername = "localhost";
$Username = "root";
$Password = " ";
$dbname = "userDatabase";

// Create connection
$conn = new mysqli($Servername, $Username, $Password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE MyUsers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyUsers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


