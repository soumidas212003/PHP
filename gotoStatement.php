<?php
    for($a=1;$a<=10;$a++){
        if($a==3){
            goto message;
        }
        echo $a."<br>";
    }
    for($a=1;$a<=10;$a++){
        echo "Hello<br>";
    }
    message:
    for($a=1;$a<=10;$a++){
        echo "Welcome<br>";
    }
?>