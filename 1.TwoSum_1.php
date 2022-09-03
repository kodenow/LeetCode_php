<?php
/* 
Performed by:
https://github.com/kriscondev/
https://leetcode.com/kriscondev/
https://www.linkedin.com/in/kristian-software-engineer/

164. Two Sum
Difficulty: Easy
Runtime: 151 ms, faster than 67.77% of PHP online submissions for Two Sum.
Memory Usage: 20 MB, less than 48.70% of PHP online submissions for Two Sum.
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
        for ($i=0; $i < $valCount ; $i++) {
            $find = $target - $array[$i];
            unset($array[$i]); // unsetting the current key:value so it will not be compared on next loop
            $found = array_search($find,$array);
            if($found){
                $index = [$i,$found];
                break;
            }
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
