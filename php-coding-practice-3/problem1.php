<?php
# array input value and print

$n = readline("Enter array lenth: ");
$num = array();

for($i=0; $i<$n; $i++){
$value = readline("Enter array value: ");
    $num[$i] = $value;
}
  for($i=0; $i<$n; $i++){     
      echo "$num[$i], ";
}

?>