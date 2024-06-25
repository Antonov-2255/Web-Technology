<?php
   session_start();
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   } else {
      $_SESSION['counter'] = 1;
   }
   $msg = "Number of visits in this session: ".  $_SESSION['counter'];

// Check if the user is already logged in
if(isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'] . "!";
} else {
    // If not logged in, check if the login form is submitted
    if(isset($_POST['login'])) {
        // Simulating login validation (replace this with your actual validation logic)
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // For demonstration, let's just check if username and password are not empty
        if(!empty($username) && !empty($password)) {
            // Set the username in the session
            $_SESSION['username'] = $username; $_SESSION['age'] = $age; $_SESSION['city'] = $city; 
            echo "Welcome, " ."<br>". $_SESSION['username'] ."<br>". $_SESSION['age'] . $_SESSION['city'] ."!";
        } else {
            echo "Please enter both username and password.";
        }
    } else {
        // Display login form
        echo '<form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter Name" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"  placeholder="Enter Password" required><br>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" placeholder="Enter Age" required><br>
                <label for="city">City:</label>
                <input type="text" id="city" name="city"  placeholder="Enter City" required><br>
                <input type="submit" name="login" value="Login">
              </form>';
    }
}
?>
<?php  
    echo"<br>";
   echo "$msg"; 
?>