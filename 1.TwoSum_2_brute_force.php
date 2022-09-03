<?php
/* 
Performed by:
https://github.com/kriscondev/
https://leetcode.com/kriscondev/
https://www.linkedin.com/in/kristian-software-engineer/

164. Two Sum
Difficulty: Easy
Runtime: 2454 ms, faster than 14.39% of PHP online submissions for Two Sum.
Memory Usage: 19.9 MB, less than 66.60% of PHP online submissions for Two Sum.
*/
class Solution {

    /**
     * @param Int[] $array
     * @return Int
     */ 
    function twoSum($array, $target) {
        $valCount = count($array);
        $maxGap = 0;
        $index = false;
        //brute force approach
        for ($i=0; $i < $valCount ; $i++) {
            var_dump("count $i");
            for ( $x= $i + 1; $x < $valCount ; $x++) { //$x= $i + 1 so that it will skip the current $i
                var_dump("{$array[$i]} VS {$array[$x]}");
                if( ($array[$i] + $array[$x]) == $target){
                    var_dump($i . " $x");
                    $index = [$i,$x];
                    break;
                }                
            }

            if(!empty($index)) break;         
        }

        return $index;
    }    
}
//Uncomment  test case
// $array = [3,2,4];
// $target = 6;

// $array = [2,5,5,11];
// $target = 10;

// $array = [2,7,11,15];
// $target = 9;

//uncomment below and test in your IDE
// $solution = New Solution;
// $answer = $solution->twoSum($array, $target);
