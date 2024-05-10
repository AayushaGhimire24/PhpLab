<?php
//sav read garna chai loop lagauna parcha
$file=fopen("enclosures.csv","r");
while(!feof($file)){
    print_r(fgetcsv($file));
    echo"<br>";
}
fclose($file);
?>