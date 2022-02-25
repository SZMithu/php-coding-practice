<?php
# Check triangle is equilateral,scalene, or isosceles

$a = 11;
$b = 54;
$c = 11;

if(($a == $b) && ($a == $c))
{
    echo "It is a equilateral triangle";
}
else if(($a == $b) || ($a == $c) || ($b == $c))
{
    echo "It is a isosceles triangle";
}
else
{
    echo "It is a scalene triangle";

}
?>