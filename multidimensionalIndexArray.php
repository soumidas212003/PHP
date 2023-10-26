<?php
    $emp=[
        [1,"Sou","Web Developer",40000],
        [2,"Suchi","Teacher",30000],
        [3,"Soma","Teacher",30000],
        [2,"Anu","Docter",60000]
    ];

    //print_r($emp);    

    /*echo "<pre>";
    print_r($emp);
    echo "</pre>";*/

    /*echo "<pre>";
    var_dump($emp);
    echo "</pre>";*/

    //echo $emp[0][1];

    /*for($row=0;$row<4;$row++){
        for($col=0;$col<4;$col++){
            echo $emp[$row][$col]." ";
        }
        echo "<br>";
    }*/

    /*foreach($emp as $row){
        foreach($row as $col){
            echo $col." ";
        }
        echo "<br>";
    }*/
    
    echo "<table border='2px' cellpadding='10px' cellspacing='0'>";
    echo "<tr>
        <th> Emp Id </th>
        <th> Emp Name </th>       
        <th> Designation </th>
        <th> Salary </th>
    ";
    foreach($emp as $row){
        echo "<tr>";
        foreach($row as $col){
            echo "<td>$col</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>