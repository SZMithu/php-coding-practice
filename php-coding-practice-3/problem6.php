<?php
# Find odd/even value in array

$n = readline("Enter array lenth: ");
$num = array();


for($i=0; $i<$n; $i++){
$value = readline("Enter array value: ");
    $num[$i] = $value;
}
echo "\nOdd numbers are: ";
for($i=0; $i<$n; $i++){
    if($num[$i]%2 != 0){
       echo "$num[$i], ";
    }
}
echo "\nEven numbers are: ";
for($i=0; $i<$n; $i++){
    if($num[$i]%2 == 0){
       echo "$num[$i], ";
    }
}

?>