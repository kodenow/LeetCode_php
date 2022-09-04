<?php
/* 
Performed by:
https://github.com/kriscondev/
https://leetcode.com/kriscondev/
https://www.linkedin.com/in/kristian-software-engineer/

164. Add Two Numbers
Difficulty: Easy
Runtime: 151 ms, faster than 67.77% of PHP online submissions for Two Sum.
Memory Usage: 20 MB, less than 48.70% of PHP online submissions for Two Sum.
*/
class Solution {

    /**
     * @param Int[] $array
     * @return Int
     */ 
    function addTwoNumbers($l1, $l2) {
        $l1 = array_reverse($l1);
        $l2 = array_reverse($l2);
   

        $val1 = implode("",$l1);
        $val2 = implode("",$l2);

        $sum = $val1 + $val2;
        $sum = str_split(strrev($sum)); //split string to array
        
       return $sum;
    }
}
//Uncomment  test case
$l1 = [2,4,3];
$l2 = [5,6,4];

//uncomment below and test in your IDE
$solution = New Solution;
$answer = $solution->addTwoNumbers($l1, $l2);
var_dump($answer);
