<?php

require "db/conn.php";
require "db/getColor.php";

function getColor(){
    $conn = $GLOBALS["conn"];

    $colorInfo = array();
    $sql = "SELECT name, hexCode, price FROM Colors LIMIT 12";
    $stmt = $conn->prepare ($sql);
    $stmt->bind_result ($name, $hexCode);
    
    while ($stmt->fetch()) {
        array_push ($colorInfo, array("name" => $name, "hexCode" => $hexCode, "price" => $price));
    }
    return $colorInfo;
}