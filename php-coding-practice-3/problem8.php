<?php

# Find how many time number in array

$n = readline("Enter a number n: ");
$num = array();


for($i=0; $i<$n; $i++){
$value = readline("Enter array value: ");
    $num[$i] = $value;
}

$m = readline("Enter a number m: ");
$find = 0;
for($i=0; $i<$n; $i++){
    if($num[$i] == $m){
        $find++;
    }
}
if($find>0){
    echo "$m found: $find times";
}
    else{
        echo "No $m not found in the array";
    }

?>



