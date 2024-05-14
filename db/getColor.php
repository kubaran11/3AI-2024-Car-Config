<?php

require "conn.php";

function getColorNames(){
    $conn = $GLOBALS["conn"];

    $colorNames = array();

    $sql = "SELECT name, RGB, price FROM Color";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($name $RGB $price);
    while ($stmt -> fetch())
    {
        array_push($colorNames, $name, $RGB, $price);
    }

    return $colorNames;
}


?>
