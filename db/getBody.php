<?php

require "conn.php";

function getBody(){
    $conn = $GLOBALS["conn"];

    $body = array();

    $sql = "SELECT name, price, idBody FROM Body";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($name, $price, $idBody);
    while ($stmt -> fetch())
    {
        array_push($body, array("name" => $name, "price" => $price, "idBody" => $idBody));
    }

    return $body;
}


?>