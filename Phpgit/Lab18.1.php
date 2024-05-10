<?php
function num(){
    static $num=1;
    echo $num;
    $num++;
   
}
num();
echo "<BR>";
num();
echo "<BR>";
num();
?>