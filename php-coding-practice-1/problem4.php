<?php
#Find the greatest number between three numbers

$num1 = 13;
$num2 = 54;
$num3 = 11;

if(($num1 > $num2) && ($num1 > $num3))
{
echo "$num1 is greatest";
}
else if($num2 > $num3)
{
    echo "$num2 is greatest";
}
else
{
    echo "$num3 is greatest";
}

?>