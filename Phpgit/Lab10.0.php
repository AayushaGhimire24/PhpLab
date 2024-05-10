<?php
//Using nested if statements
$marks=0;
if($marks>=30){
    echo"passed";
}else{
    if($marks>=40){
        echo"good";
    }elseif($marks>=50){
        echo"excellent";
    }else{
        echo "not qualified";
    }
        
    }
?>
