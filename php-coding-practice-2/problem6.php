<?php
//Prime Number
$n = readline("Enter a number: ");
$counter = 0;
for($i=2; $i<$n; $i++){
    if($n%$i == 0){
        $counter++;
        break;
    }
}
if($counter>0){
    echo "It is not a prime number";
}
else{
    echo "It is a prime number";
}
?>