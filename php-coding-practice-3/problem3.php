<?php
# array input value and print summation

$n = readline("Enter array lenth: ");
$num = array();
$sum = 0;
for($i=0; $i<$n; $i++){
$value = readline("Enter array value: ");
    $num[$i] = $value;
    $sum += $num[$i];
}
for($i=0; $i<$n; $i++){
    echo "$num[$i] + "; 
}   echo " = $sum";



?>