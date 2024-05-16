<?php

require "db/conn.php";

function getAddons(){
    $conn = $GLOBALS["conn"];

    $addons = array();

    $sql = "SELECT name, price, id FROM Addons";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($name, $price, $id);
    while ($stmt -> fetch())
    {
        array_push($addons, array("name" => $name, "price" => $price, "id" => $id));
    }

    return $addons;
}


?>