<!DOCTYPE html>
<html>
<body>

<?php
$c = array("Name"=>"Ketan", "E-no"=>92200938121, "City"=>Varanasi , "GR-No"=>118000 , "Contact"=>9978003065 , "CLass"=>"4DC-2", "Division"=>"B");

echo $c["City"];
$c["City"]= "Bhavanagr";

foreach ($c as $x => $y)
{
  echo "$x: $y <br>";
}

unset($c[Name]);
var_dump($c);


?>

</body>
</html>
