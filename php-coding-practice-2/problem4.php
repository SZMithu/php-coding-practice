<?php
// Summation 1 to n

$n  = readline("Enter a number: ");
$sum = 0;
for($i=1; $i<=$n; $i++){
    $sum = $sum + $i;
}
echo "Summation = $sum";

?>