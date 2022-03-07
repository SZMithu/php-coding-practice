<?php

#e triangle is valid or not if sides are given

$a = 7;
$b = 10;
$c = 5;

if((($a + $b) > $c) && (($a + $c) > $b) && (($b + $c) > $a))
{
    echo "It is a valid triangle.";
}
else
{
    echo "It is not a valid triangle.";
}

?>