<?php

# number of positive/negative in array

$n = readline("Enter a number n: ");
$num = array();


for($i=0; $i<$n; $i++){
$value = readline("Enter array value: ");
    $num[$i] = $value;
}


$positive = 0;
$negative = 0;
for($i=0; $i<$n; $i++){
    if($num[$i] > 0){
        $positive++;
    }else{
        $negative++;
    }
}
echo "Number of positive numbers: $positive\n";
echo "Number of negative numbers: $negative";

?>



