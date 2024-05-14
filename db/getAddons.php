<?php

require "conn.php";

function getAddons(){
    $conn = $GLOBALS["conn"];

    $addons = array();

    $sql = "SELECT idAddons, label, price FROM Addons";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($idAddons, $label, $price);
    while ($stmt -> fetch())
    {
        array_push($addons, array("label" => $label, "price" => $price, "idAddons" => $idAddons));
    }

    return $addons;
}


?>