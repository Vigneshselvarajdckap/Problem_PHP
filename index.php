<?php

function numbers($values)
{

    $result;

    if($values == 1)
    {
            $result = "It's not prime number";
    }
    for ($i=2; $i < $values; $i++) 
    { 
      
        if($values % $i == 0)
        {
            $result = "It's not prime number";
            break;
        }
        else
        {
            $result = "It's prime number";
        }
    }
    return $result;
}
$numbers = 9;

echo numbers($numbers);