<?php

// print sum of all odd numbers from 1750 to 2160 

$sum = 0;

for ($i = 1750; $i <= 2160; $i++) {
    if ($i % 2 !== 0) {
        $sum += $i;
    }
}

echo "The sum of all odd numbers from 1750 to 2160 is: " . $sum;
?>
