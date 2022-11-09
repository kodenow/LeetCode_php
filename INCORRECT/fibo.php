<?php

/*
The Fibonacci numbers, commonly denoted F(n) form a sequence, called the Fibonacci sequence, such that each number is the sum of the two preceding ones, starting from 0 and 1. That is,

F(0) = 0, F(1) = 1
F(n) = F(n - 1) + F(n - 2), for n > 1.
Given n, calculate F(n).

 

Example 1:

Input: n = 2
Output: 1
Explanation: F(2) = F(1) + F(0) = 1 + 0 = 1.
Example 2:

Input: n = 3
Output: 2
Explanation: F(3) = F(2) + F(1) = 1 + 1 = 2.
Example 3:

Input: n = 4
Output: 3
Explanation: F(4) = F(3) + F(2) = 2 + 1 = 3.
 

Constraints:

0 <= n <= 30
*/

//INCORRECT ANSWER
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
 /*    function fib($n) {
        if($n > 1 && $n <= 30){
            $x = $n - 1;
            $y = $n - 2;
            var_dump("x $x + y $y");

            if($x > 1){
                $x--;
            }
            if($y > 1) {
                $y--;
            }
            var_dump("x $x + y $y");
    
            return $x + $y;            
        }
        return $n;
    } */

    //this one is correct, but can't understand it
  /*   function fib($n) {
        if ($n <= 1) {
         return $n;
        }
        
       var_dump($n);
        $q = $this->fib($n - 1);
        $e = $this->fib($n - 2);
        var_dump("N $n => Q $q and E $e");        
        return $q +  $e;
    } */

    function fib($n) {
       
        if($n==0){
            return 0;
        }
        if($n==1 || $n==2){
            return 1;
        }
        $n1 = 1;
        $n2 = 1;
        $result = "";
       for($i=3;$i<=$n;$i++){
            var_dump("I $i <= N = $n, Result = $result, n1 = $n1, n2 = $n2");
           $result = $n1+$n2;
           $n1=$n2;
           $n2=$result;
       }
        return $result;
               
    }
}


$n = 6;
$solution = New Solution;
$output = $solution->fib($n);
print_r($output);

