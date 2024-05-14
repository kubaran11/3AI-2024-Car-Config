<?php

require "conn.php";

function getAddons(){
    $conn = $GLOBALS["conn"];

    $addons = array();

    $sql = "SELECT idAddons, name, price FROM Addons";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($idAddons, $name, $price);
    while ($stmt -> fetch())
    {
        array_push($addons, array("name" => $name, "price" => $price, "idAddons" => $idAddons));
    }

    return $addons;
}


?>
