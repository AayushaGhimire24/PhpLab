<?php
function value($number){
    if($number%2==0){
        return true;
    }else{
        return false;
    }
}
$number=2004;
if(value($number)){
    echo "The number $number is even";
}else{
    echo "The number $number is odd";
}
?>