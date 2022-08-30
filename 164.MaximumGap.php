<?php
/* 
Performed by: https://github.com/kriscondev/

164. MaximumGap
Runtime: 489 ms, faster than 85.71% of PHP online submissions for Maximum Gap.
Memory Usage: 31.8 MB, less than 42.86% of PHP online submissions for Maximum Gap.
*/
class Solution {

    /**
     * @param Int[] $array
     * @return Int
     */
    function maximumGap($array) {
        $valCount = count($array);
        if($valCount < 2) return 0;
        sort($array);
        $maxGap = 0;
        for ($i=1; $i < $valCount ; $i++) {          
            $gap = $array[$i] - $array[$i-1];
            if($gap > $maxGap){
                $maxGap = $gap;
            }     
        }
        return $maxGap;
    }    
}
//Uncomment 1 array below for test case
// $array = [3,6,9,1]; return 3
// $array = [3]; return 0
// $array = [1,4]; return 3
// $array = [1,2]; return 1
// $array = [1,1,1,1]; return 0
// $array = [15255,15256,15257]; return 1
// $array = [12115,10639,2351,29639,31300,11245,16323,24899,8043,4076,17583,15872,19443,12887,5286,6836,31052,25648,17584,24599,13787,24727,12414,5098,26096,23020,25338,28472,4345,25144,27939,10716,3830,13001,7960,8003,10797,5917,22386,12403,2335,32514,23767,1868,29882,31738,30157,7950,20176,11748,13003,13852,19656,25305,7830,3328,19092,28245,18635,5806,18915,31639,24247,32269,29079,24394,18031,9395,8569,11364,28701,32496,28203,4175,20889,28943,6495,14919,16441,4568,23111,20995,7401,30298,2636,16791,1662,27367,2563,22169,1607,15711,29277,32386,27365,31922,26142,8792]; //return 1244

//uncomment below and test in you IDE
// $solution = New Solution;
// $maxGap = $solution->maximumGap($array);
// var_dump($maxGap);
