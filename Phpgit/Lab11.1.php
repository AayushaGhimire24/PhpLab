<?php
//Controlling loop execution (e.g., break, continue)
for($i=1;$i<=10;$i++){
    
        if($i%2==0){
            continue;
        }
        echo $i.' ';
        if($i==17){
            break;
        }
    }

?>