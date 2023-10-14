<?php
    function factorial($n){
        if($n==0){
            return 1;
        }else{
            return ($n*factorial($n-1));
        }
    }
    echo factorial(5);
    /*function display($n){
        if($n<=5){
            echo $n."<br>";
            echo display($n+1);
        }
    }
    display(1);*/
?>