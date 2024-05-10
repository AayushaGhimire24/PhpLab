<?php
$name="Aayu";
function show(){
$a=5;
echo $a."<br>";
global $name;//global variable
echo $name;
}
echo $a;//local variable
show();
$x=10;
$y=40;
function scope(){
    $z="<br>".$GLOBALS['x']+$GLOBALS['y'];
    echo $z;
}
scope();
?>