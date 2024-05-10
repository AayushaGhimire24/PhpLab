<?php
//Implementing switch...case statements
$i=0;
while(++$i){
    switch($i){
        case 1:
            echo "At 1<br>";
            break 1;
            case 2:
                echo "At 2<br>";
                break ;
                default:
                break 2;
    }
}
?>