<!DOCTYPE html>
<html>
<head>
    <title> PHP Pr-15</title>
</head>
<body>
    <h1> Dynamic web-page using PHP and HTML</h1>
    <hr>

    <?php

     echo "add more content of php....";
    $c_date = date('Y-m-d');
    $c_time = date('H:i:s');
    $c_ip = $_SERVER['REMOTE_ADDR'];
    echo "<p>Current Date: $c_date</p>";
    echo "<p>Current Time: $c_time</p>";
    echo "<p>Your IP Address: $c_ip</p>";
    ?>
</body>
</html>
