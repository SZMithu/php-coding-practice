<?php

# array input value and print reverse

$n = readline("Enter array lenth: ");
$num = array();

for($i=0; $i<$n; $i++){
$value = readline("Enter array value: ");
    $num[$i] = $value;
}
for($i=$n-1; $i>=0; $i--){     
    echo "$num[$i], ";
}

?>