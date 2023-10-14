<?php
    function sum($a,$b,$c){
        $s= $a+$b+$c;
        return $s;
    }
    function percentage($t){
        $per= $t/3;
        echo $per . "%";
    }
    $total=sum(55,65,88);
    percentage($total);
?>