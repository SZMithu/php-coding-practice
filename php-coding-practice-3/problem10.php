<?php

# Find a number in array

// $n = readline("Enter a number n: ");
// $num = array();


// for($i=0; $i<$n; $i++){
// $value = readline("Enter array value: ");
//     $num[$i] = $value;
// } 
$num = array(4,3,5,4,2);
$n = count($num);


$mini = $num[0];
for($i=0; $i<$n; $i++){
    for($k=$i+1; $k<$n; $k++)
    if(($num[$k]<$num[$i])&&($index!=$i)){
        $index = $i;
        $mini = $num[$k];
       }
    echo $mini;
}