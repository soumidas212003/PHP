<?php
    /*function test(){
        $a=10; //Local variable
    }
    test();
    echo $a;*/
    /*$a=10;
    function test(){
        global $a;
        echo $a;
    }
    test();*/
    $x=10;
    $y=5;
    function test(){
        global $x,$y;
        $x=$x+$y;
    }
    test();
    echo $x;
?>