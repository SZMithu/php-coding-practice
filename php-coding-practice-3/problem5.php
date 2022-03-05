<?php
# Find minimum value in array

$n = readline("Enter array lenth: ");
$num = array();


for($i=0; $i<$n; $i++){
$value = readline("Enter array value: ");
    $num[$i] = $value;
}
    $min = $num[0];
    for($i=1; $i<count($num); $i++){
    if($num[$i]<$min){
        $min = $num[$i];
    }
}
echo "Min number in array is: $min";

?>