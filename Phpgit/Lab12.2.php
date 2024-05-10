<?php
//Manipulating arrays (e.g., adding, modifying, deleting elements)
$arr =array("red","blue");
array_unshift($arr,"green");
echo"Adding:<br>";
 print_r($arr);
 echo "<br>";
 $arr[1]="Yellow";
 echo"Modifying:<br>";
 print_r($arr);
 echo "<br>";
 array_pop($arr);
 echo "Deleting:<br>";
 print_r($arr);
 echo "<br>";
 ?>