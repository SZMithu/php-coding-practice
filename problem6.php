<?php
# check character is an alphabet or a number or others

$x =  "h";
$y = is_int($x);

if($y == 1)
{
    echo " It is a number";
}
else if(is_string($x) == 1)
{
    echo "It is an alphabet";
}
else
{
    echo "It is neither a number nor an alphabet.";
}
?>
