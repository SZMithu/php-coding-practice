<?php
//Factorial

$n = 4;
$result = 1;
for($i=1; $i<=$n; $i++){
    $result = $result * $i;
}
echo "!$n = $result";
?>