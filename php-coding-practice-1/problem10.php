<?php
#enter student marks and find percentage and grade

$x = readline("Entee marks");

if($x < 25)
{
    echo " Grade is F";
}
else if($x < 46)
{
    echo " Grade is E";
}
else if($x < 51)
{
    echo " Grade is D";
}
else if($x < 61)
{
    echo " Grade is C";
}
else if($x < 81)
{
    echo " Grade is B";
}
else if($x > 80)
{
    echo " Grade is A";
}
?>
