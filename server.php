<?php


//initialising variables
if(isset($_POST['Register']))
{
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password1 = $_POST['Password1'];
$Password2 = $_POST['Password2'];
$Role = $_POST["Role"];

//connect to db

$conn = new mysqli('localhost','root',' ','usersDatabaseB');

//check connection
if($conn -> connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyUsers (username, email, password) VALUES ('$Username', '$Email', '$Password')";

if($conn->query($sql) == TRUE)
{ 
    echo "New record created successfully" ;
}else{
    echo "Error: " .$sql."<br>".$conn->error;
}

$conn->close();
}
