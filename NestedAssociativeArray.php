<?php
    $marks=[
        "Sou"=>[70,80,90],
        "Soma"=>[45,55,56],
        "Suchi"=>[70,64,90]
    ];
    /*echo "<pre>";
    print_r($marks);
    echo "</pre>";*/

    /*foreach($marks as $key=>$row){
        echo $key." ";
        foreach($row as $col){
            echo $col." ";
        }
        echo "<br>";
    }*/

    echo "<table border='2px' cellspacing='0' cellpadding='10px'>";
    echo "<tr>
        <th>Name</th>
        <th>Beng</th>
        <th>Eng</th>
        <th>Math</th>
    </tr>";
    foreach($marks as $key=>$row){
        echo "<tr>
            <td>$key</td>";
        foreach($row as $col){
            echo "<td>$col</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>