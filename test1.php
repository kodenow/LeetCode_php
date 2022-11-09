<?php 
   
// keep this function call here  
// echo StringChallenge(fgets(fopen('php://stdin', 'r')));  


// function test($str){
//     $array = str_split($str);
//     $string = "";
//     $counted = [];
//     foreach($array as $key => $val){
//         if(array_key_exists($val,$counted)) continue;
        

//         $count = count_vals($val,$array);
//         $counted[$val] = $count;
//         $string = $string . $count . $val;

//     }
//     var_dump($string);

    
// }



echo array_search(1, array_count_values(str_split('aabbcde')))

    

?>