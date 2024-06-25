<?php
function prac13($numbers) 
{
    $maxNumber = $numbers[0];

    $count = count($numbers);
    for ($i = 1; $i < $count; $i++) 
    {
        if ($numbers[$i] > $maxNumber) 
        {
            $maxNumber = $numbers[$i];
        }
    }

    return "The maximum number is: " . $maxNumber;
}

$Array = [165, 53, 380, 185, 235, 210];
$result = prac13($Array);
echo $result;
?>
