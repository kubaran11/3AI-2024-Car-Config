<?php

require "conn.php";

function getColorNames(){
    $conn = $GLOBALS["conn"];

    $colorNames = array();

    $sql = "SELECT id, RGB, price, name FROM Color";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($id, $rgb, $price, $name);
    while ($stmt -> fetch())
    {
        array_push($colorNames, array("id" => $id, "name" => $name, "rgb" => $rgb, "price" => $price));
    }

    return $colorNames;
}

?>
