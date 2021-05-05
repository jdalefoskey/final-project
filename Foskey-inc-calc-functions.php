<?php

// this function returns the average of all the numbers in the file
function avgArray($scores)
{
    $total =0;
    for($i = 0;$i < sizeof($scores); $i++) 
    {
        $total += $scores[$i];
    }
    $average = round($total / sizeof($scores), 2);
    
    return $average;
}


// this function returns the highest number in the file
function highestInArray($scores)
{
    $highestNumber = 0;
    for($count = 0; $count < count($scores); $count++) {
        if($highestNumber < $scores[$count])
        $highestNumber = $scores[$count];
    }
    
    return $highestNumber;
}


//  this function returns the lowest score in the file
function lowestInArray($scores)
{
    $lowestNumber = 100;
    for($count = 0; $count < count($scores); $count++) {

        if($lowestNumber > $scores[$count] && !empty($scores[$count]))
        $lowestNumber = $scores[$count];
    }
    
    return $lowestNumber;
}



//  this function returns all scores in the file that are equal or greater than 60
function numPassingArray($scores)
{
    $numberPassing = [];
    for($i = 0; $i < count($scores); $i = $i + 1) {
        if($scores[$i] >= 60) {
           array_push($numberPassing, $scores[$i]);
        }   
    } 
    return count($numberPassing);
}




?>