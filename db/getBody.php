<?php

require "db/conn.php";

function getBody(){
    $conn = $GLOBALS["conn"];

    $body = array();

    $sql = "SELECT name, price, id FROM Body";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($name, $price, $id);
    while ($stmt -> fetch())
    {
        array_push($body, array("name" => $name, "price" => $price, "id" => $id));
    }

    return $body;
}


?>