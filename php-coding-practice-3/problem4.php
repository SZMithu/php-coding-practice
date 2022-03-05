<?php
# Find max value in array

$n = readline("Enter array lenth: ");
$num = array();


for($i=0; $i<$n; $i++){
$value = readline("Enter array value: ");
    $num[$i] = $value;
}
    $max = $num[0];
    for($i=1; $i<count($num); $i++){
    if($num[$i]>$max){
        $max = $num[$i];
    }
}
echo "Max number in array is: $max";

?>