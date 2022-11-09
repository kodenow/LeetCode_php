<?php

//PERFECT ANSWER
class Solution {

/**
 * @param Integer[] $candyType
 * @return Integer
 */
function distributeCandies($candyType) {
    $unique = array_unique($candyType);
    $uniqueCount = count($unique);

    $entriesCount = count($candyType);
    $x = $entriesCount/2;
    $y = count($unique);

    if($y < 2) {
        return $y;
    }else{
        return ($x < $y) ? $x : $y;
    }


}

}
$candyType = [1,1,2,2,3,3];

$solution = New Solution;
$output = $solution->distributeCandies($candyType);
print_r($output);