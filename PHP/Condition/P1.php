<?php

$sub1 = 98;
$sub2 = 89;
$sub3 = 97;
$sub4 = 95;
$sub5 = 87;

$total = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5) / 5;

echo "Average of all subjects is " . $total . "<br>"; 

if ($total >= 86 && $total <= 100) 
{
    echo "Your Grade is O";
} 
else if ($total >= 76  && $total <= 85) 
{
    echo "Your Grade is A+";
} 
else if ($total >= 66  && $total <= 75) 
{
    echo "Your Grade is A";
} 
else if ($total >= 56  && $total <= 65)
 {
    echo "Your Grade is B ";
} 
else if ($total >= 46  && $total <= 53)
 {
    echo "Your Grade is C ";
} 
else if ($total >= 35  && $total <= 45) 
{
    echo "Your Grade is D ";
}
else 
{
    echo "Your Grade is F"; 
}

?>
