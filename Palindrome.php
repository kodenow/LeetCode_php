<?php

// function palindrome($num){
//     $x = (string)$num;
//     $newest = 0;
//     while(floor($x)){
//         $y = $x % 10;
//         $newest = 10 * $newest;
//         $newest = $newest + $y;
//         $x = $x/10;
//     }

//     return ($newest == $num ? true : false);
// }

function palindrome($original){

    
    if (strrev($original) ==  $original){
        return true;
    }
    return false;
}

// $num = 12321;
$num = "ball";
// $num = 65356;
// $num = "civic";

var_dump(palindrome($num))
?>