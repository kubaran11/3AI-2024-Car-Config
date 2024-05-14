<?php

require "conn.php";

function getColorNames(){
    $conn = $GLOBALS["conn"];

    $colorNames = array();

    $sql = "SELECT name, rgb, price FROM Color";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($name, $rgb, $price);
    while ($stmt -> fetch())
    {
        array_push($colorNames, array("name" => $name, "rgb" => $rgb, "price" => $price));
    }

    return $colorNames;
}


?>
