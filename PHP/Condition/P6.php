<?php

//  print sum of even numbers from 1070 to 705

$sum = 0;

for ($i = 1070; $i >= 705; $i--) 
{
    if ($i % 2 === 0) 
    {
        $sum += $i;
    }
}

echo "The sum of even numbers from 1070 to 705 is: " . $sum;
?>
