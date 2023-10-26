<?php
    //Indexed Array
    /*$emp=[
        [1,"Sou","Web Developer",40000],
        [2,"Suchi","Teacher",30000],
        [3,"Soma","Teacher",30000],
        [2,"Anu","Docter",60000]
    ];
    echo "<table border='2px' cellpadding='10px' cellspacing='0'>";
    echo "<tr>
        <th> Emp Id </th>
        <th> Emp Name </th>       
        <th> Designation </th>
        <th> Salary </th>
    ";
    foreach($emp as list($id,$name,$designation,$salary)){
        echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
    }
    echo "</table>";*/

    //Associative Array
    $emp=[
        [
            "id"=>1,
            "name"=>"Sou",
            "designation"=>"Web Developer",
            "salary"=>40000
        ],
        [
            "id"=>2,
            "name"=>"Soma",
            "designation"=>"Teacher",
            "salary"=>30000
        ],
        [
            "id"=>3,
            "name"=>"Suchi",
            "designation"=>"Teacher",
            "salary"=>30000
        ],
        [
            "id"=>4,
            "name"=>"Anu",
            "designation"=>"Doctor",
            "salary"=>60000
        ]
    ];
    echo "<table border='2px' cellpadding='10px' cellspacing='0'>";
    echo "<tr>
        <th> Emp Id </th>
        <th> Emp Name </th>       
        <th> Designation </th>
        <th> Salary </th>
    ";
    foreach($emp as list("id"=>$id,"name"=>$name,"designation"=>$designation,"salary"=>$salary)){
        echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
    }
    echo "</table>";
?>