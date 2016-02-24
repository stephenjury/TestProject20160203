<?php
$myArray = array("do", "re", "mi"); //Declares the array

echo $myArray[0]; //outputs "do"

$myArray[1] = "la"; //modifies position 1 (re)

echo " ";

echo $myArray[1]; //outputs "la"

unset($myArray[2]); // removes the array in position 2

?>