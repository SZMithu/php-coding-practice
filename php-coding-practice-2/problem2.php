<?php

$n = readline("Enter a number: ");

for($i=1; $i<=10; $i++){
    $res[$i] = $n*$i;
    echo "$n * $i = $res[$i]\n";
}
?>