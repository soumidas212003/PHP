<?php
/*
//foreach loop for indexed array
    $colors=array(
        "red",
        "green",
        "blue"
    );
    foreach($colors as $values){
        echo $values."<br>";
    }
*/
//foreach loop for Associative array
$age=[
    "bill"=>50,
    "joe"=>23,
    "peter"=>80
];
foreach($age as $key=>$values){
    echo "$key = $values<br>";
}
?>