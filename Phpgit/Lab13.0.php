<?php
//Iterating over arrays using for and foreach loops
$City=["Brooklyn","NYC","LA"];
echo "for loop:<br>";
for($i=0;$i<sizeOf($City);$i++){
    echo $City[$i]."<br>";
}
echo "for each loop:<br>";
foreach ($City as $d){
    echo $d."<br>";
}
?>