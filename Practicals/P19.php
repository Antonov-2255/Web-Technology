
<?php
$servername = "localhost"; // Your server name, usually localhost
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "mydb"; // Your database name

$conn = new mysqli($servername, $username, $password); 
if ($conn->connect_error) { 
	die("Connection failure: "
		. $conn->connect_error); 
} 
echo "Connected successfully";
?>


