
<?php
    // Function argument by value 
    function calculate1($a){
        $a=$a+7;
    }
    $c=10;
    calculate1($c);
    echo $c."<br>";
    // Function argument by reference 
    function calculate2(&$a){
        $a=$a+7;
    }
    $d=10;
    calculate2($d);
    echo $d;
?>