<?php
//Accessing and modifying nested array elements
$arr=array(
    array(1,2,3),
    array(5,6,7),
    array(9,10,11));
    $s=0;
    $s1=0;
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            echo $arr[$i][$j]." ";
            $s=$s+$arr[$i][$j];
    }
    echo "<br>";
}
echo "sum :".$s;
?>