<?php

echo "Enter a number:";

$number =(int)readline();

if ($number>0){
    echo "  Number Posative";
}elseif($number<0){
    echo "  Number is negative";
}else {
    echo"the number is zero";
}