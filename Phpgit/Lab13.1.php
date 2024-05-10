<?php
//Performing operations on array elements
 $arr =array("red","blue");
 array_unshift($arr,"green");
 print_r($arr);
 echo "<br>";
 echo array_shift($arr);
 echo "<br>";
 print_r($arr);
 echo "<br>";
 array_push($arr , "yellow","lime");
 print_r($arr);
 echo "<br>";
 array_pop($arr);
 print_r($arr);
 echo "<br>";
// //array_merge combines two or more array doesnt support in associative array 
// //it only stores last and removes first
$arr2=array("pink","black");
 $arr3=array_merge($arr,$arr2);
 print_r($arr3);
 echo "<br>";

//array slice
$arr1 =array("red","green","blue","orange","yellow");
print_r($arr);
echo "<br>";
print_r(array_slice($arr,2));
echo "<br>";
//negative index search from last
print_r(array_slice($arr,-4,3));
echo "<br>";
///preserve saves original index while is false is default
print_r(array_slice($arr,1,4,true));
echo "<br>";
print_r(array_slice($arr,1,4,false));
echo "<br>";
?>