<?php  
function factorial($num121)  
{  
    if($num121 <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $num121 * factorial($num121 - 1);  
    }  
}  

echo "Factorial of 121 is " .factorial(121);  
?>
