<?php

function avgArray($scores)
{
    $total =0;
    for($i = 0,$i < sizeof($scores)) 
    {
        $total += $scores[$i];
    }
    $average = round($total / sizeof($scores), 2);
    return $average;
}

function highestInArray($scores)
{
    $highestNumber = 0;
    for($count = 0; $count < count($scores); $count++) {
        if($highestNumber < $scores[$count])
        $highestNumber = $scores[$count];
    }
    
    return $highestNumber;
}

function lowestInArray($scores)
{
    for()
    return $lowestNumber;
}

function numPassingArray($scores)
{
    for()
    return $greaterEqual60;
}




?>