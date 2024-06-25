<?php 

$servername = "localhost"; //localhost everytime
$username = "root"; //name of the username 
$password = ""; //alaways null password

$conn = new mysqli($servername, $username, $password); 
if ($conn->connect_error) { 
	die("Connection failure: ". $conn->connect_error); 
} 
// Creating a database 
$sql = "CREATE DATABASE mydb"; 
if ($conn->query($sql) === TRUE) { 
	echo "Database with name mydb"; 
} else { 
	echo "Error: " . $conn->error; 
} 

// Closing connection 
$conn->close(); 
?> 