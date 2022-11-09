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



function test($str){
    $array = str_split($str);
    $string = "";
    $counted = [];
    $i = 0;
    $x = 0;
    $lastVal = "";
    $y= 0;
    $str = "";
    $lastElement = array_key_last($array);
    foreach($array as $key => $val){

        // if(array_key_exists($val,$counted)){
        //     $x++;
        //     $counted[$i] = [$x => $val];
        // }else{
        //     $i++;
        //     $counted = [];
        // }
        // var_dump($counted);
        if($key == 0){
            $y = 1;
            $lastVal = $val;
        }
        elseif($val == $lastVal){
            $y++;
            // $str = $str . $y . $val;
        }
       else{
           if($lastElement){
           $str = $str . $y . $val;
            
           }else{
               $str = $str . $y . $lastVal;

           }
           $lastVal = $val;
           $string = $string . $str;
            $str = "";
            $y = 0;
            $y++;
        }
        var_dump($string);

    }
    // var_dump($string);

    
}

$str = "wwwbbbw";
test($str);

    

?>