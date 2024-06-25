<html>
<head>
    <title>GET and POST Example</title>
</head>
<body>

<h2>GET Method</h2>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name_get">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieving data using GET method
    if(isset($_GET['name_get'])) {
        $name_get = $_GET['name_get'];
        echo "Hello, $name_get!";
    }
}
?>

<hr>

<h2>POST Method</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name_post">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving data using POST method
    if(isset($_POST['name_post'])) {
        $name_post = $_POST['name_post'];
        echo "Hello, $name_post!";
    }
}
?>

</body>
</html>
