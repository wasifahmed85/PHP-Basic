
<!-- Gread marking use nasted if else -->

<?php
$marks = 99;

if ($marks<=32){
    echo "Gread F";
}
else{
    if ($marks<=39){
        echo "Gread D";
    }else{
        if ($marks<=49){
            echo "Gread B-";
        }else{
            if($marks<=59){
                echo "Gread B";
            }
            else{
                if($marks<=69){
                    echo "Gread A-";
                }
                else{
                    if($marks<=79){
                        echo "Gread A";
                    }
                    else{
                        if($marks<=100){
                            echo "Gread A+";
                        }
                        else{
                           echo "unknown gread";
                        }
                    }
                }
            }
         }
    }
    
}
