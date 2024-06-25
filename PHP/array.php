<!DOCTYPE html>
<html>
<body>

<?php

$c = array("abc", "def", "hello" , 54);
var_dump($c);
// print normal array
echo "<br>";

echo count($c);
// count array element
echo "<br>";

echo $c[0];[1];
// access element by index

echo "<br>";

echo $c [1]="1234567";
// replace array element at particular index
echo "<br>";
var_dump($c);

echo "<br>";

foreach ($c as $d)
	{
		echo $d;
        echo "<br>";
	}
 // display each array element by for loop
    
array_push($c, "world");
var_dump($c);
// add new element in array

echo "<br>";

//array_splice($c, 3, 4);
unset($c[1]);
var_dump($c);

// remove element at index in array

echo "<br>";

array_pop($c);
var_dump($c);

// pop last element in array

?>

</body>
</html>
