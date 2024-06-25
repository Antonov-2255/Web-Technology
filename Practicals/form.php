<!DOCTYPE html>
<html>
<head>
 <title>Registration Form</title>
<style>
    
body {
 background: rgb(34,193,195);
 background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(121,32,153,1) 86%);
 background-attachment: fixed;
 margin:0;
 font-family: 'Poppins', sans-serif;
}

#form {
 width:400px;
 margin:20vh auto 0 auto;
 background-color:#fff;
 padding:30px;
 border-radius:8px;
 box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

#form h2 {
 text-align:center;
 margin-bottom:30px;
 color:#333;
}

#form label {
 display:block;
 margin-bottom:5px;
 font-size:14px;
 color:#333;
}

#form input[type="text"], #form input[type="email"], #form input[type="password"] {
 width:100%;
 padding:10px;
 border:1px solid #ccc;
 border-radius:4px;
 box-sizing:border-box;
 margin-bottom:20px;
}

#form input[type="submit"] {
 background-color:#4CAF50;
 color:#fff;
 padding:10px 20px;
 border:none;
 border-radius:4px;
 cursor:pointer;
}

#form input[type="submit"]:hover {
 background-color:#45a049;
}
</style>


</head>
<body>
 <div id="form">
  <h2>Registration Form</h2>
  <form method="post" action="">
   <label for="fname">First Name:</label><br>
   <input type="text" id="fname" name="fname"><br>
   
   <label for="lname">Last Name:</label><br>
   <input type="text" id="lname" name="lname"><br>
   
   <label for="email">Email:</label><br>
   <input type="email" id="email" name="email"><br>
   
   <label for="password">Password:</label><br>
   <input type="password" id="password" name="password"><br>
   
   <label for="confirm-password">Confirm Password:</label><br>
   <input type="password" id="confirm-password" name="confirm-password"><br>
   
   <input type="submit" value="Submit">
  </form>
 </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $servername = "localhost";
    $username = "root"; 
    $db_password = ""; 
    $database = "test";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $db_password, $database);

    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        // SQL query to be executed
        $sql = "INSERT INTO `qqq` (`First name`, `Last Name`, `Email`, `Password`, `confirm`) VALUES ('$fname', '$lname', '$email', '$password', '$confirmPassword')";
            $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
