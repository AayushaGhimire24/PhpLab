<?php
function local(){
    $x="Welcome";
    echo $x."<br>";
}
local();
//Global
$y="Bye";
function globally(){
global $y;
echo $y;
}
globally();
echo $y;