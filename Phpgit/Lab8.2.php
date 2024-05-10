<?php
//Applying logical operators
$a=true;
$b=false;
if($a&&$b){
    echo "Both conditions are true.<br>";
}else{
    echo"Atleast one condition is true<br>";
}
if($a||$b){
    echo "Atleast one condition is false.<br>";
}else{ 
    echo "Both conditions are false.<br>";
}
if(!$a){
    echo "The condition is false.<br>";
}else{
    echo"The  condition is true.<br>";
}
?>