<?php
//declaring a function
function hello(){
    echo "Namaste"."<br>";
}
//calling function
hello();
//declaring parameterized function
function hello_user($name){
    echo "Namaste,$name"."<br>";
}
hello_user("world");
//invoking function with different argument types
function add($num1,$num2){
    return $num1+$num2;
}
function concatinate($a1, $a2){
    return $a1 . $a2;
}
echo "The sum is".add(5,3)."<br>";
echo "Concatinating:".concatinate("Aayush", "Aayusha");
?>