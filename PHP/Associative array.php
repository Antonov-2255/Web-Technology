<!DOCTYPE html>
<html>
<body>

<pre>
<?php  
$book = array("book");
$book["Author"] = "me";
$book["price"] = 250;
$book["edition"] = 1;

echo $book["price"];
$book["price"]= 500;

foreach($book as $x => $y)
{ 
	echo "$x:$y <br>";
}

var_dump($book);
?>
</pre>

</body>
</html>
