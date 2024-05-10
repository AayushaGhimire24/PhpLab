<?php
//Sorting arrays in ascending and descending order
$arr=array(1,4,100,8,2,10);
sort($arr);
echo "ascending:";
foreach($arr as $v){
echo "<br>".$v;
}
// descending
rsort($arr);
echo "<br>descending:";
foreach($arr as $v){
echo "<br>".$v;
}
?>