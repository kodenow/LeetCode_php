<?php
/* 
Performed by:
https://github.com/kriscondev/
https://leetcode.com/kriscondev/
https://www.linkedin.com/in/kristian-software-engineer/

3. Longest Substring Without Repeating Characters
Difficulty: Medium
Runtime: 151 ms, faster than 67.77% of PHP online submissions for Two Sum.
Memory Usage: 20 MB, less than 48.70% of PHP online submissions for Two Sum.
*/
class Solution {

    /**
     * @param Int[] $array
     * @return Int
     */ 
    function lengthOfLongestSubstring($str) {
        $arr = str_split($str);
        $unq = [];
        $sub = 0;
        foreach($arr as $key => $val){
            if($val == "") continue;
            $in = in_array($val,$unq);
            var_dump("InArray $val  $in");

            if(!in_array($val,$unq)){
                $unq[] = $val;
                // $sub = count($unq);
            }else{
                $x = count($unq);
                var_dump("$sub < unqCount $x");
                if($sub < count($unq) ){
                    $sub = count($unq) ;
                    var_dump('sub--------');var_dump($sub);
                    $unq = [];
                    $unq[] = $arr[$key-1];
                    $unq[] = $val;
                    
                }
            }
            var_dump('unq--------');
            var_dump($unq);
        }

        $longest = (count($unq) > $sub ? count($unq) : $sub);
        return $longest;
    }
}
//Uncomment  test case
$str = "pwwkew"; //[w,k,e] return 3 
// $str = " "; //return 1
// $str = ""; //return 0
// $str = "dvdf"; //[v,d,f] return 3 

//uncomment below and test in your IDE
$solution = New Solution;
$answer = $solution->lengthOfLongestSubstring($str);
var_dump($answer);
