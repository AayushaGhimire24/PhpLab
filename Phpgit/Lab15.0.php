<?php
//Creating and working with multidimensional arrays
$arr=array(
    array(1,2,3,4),
    array(5,6,7,8));
    $sum=0;
    foreach($arr as $o){
    foreach($o as $d){
    if($d%2!=0){
  $sum=$sum+$d;
    }
    }
}
echo $sum;
?>