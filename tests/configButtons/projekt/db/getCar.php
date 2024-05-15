<?php

require "conn.php";

function getCarNames(){
    $conn = $GLOBALS["conn"];

    $carNames = array();

    $sql = "SELECT model FROM Car";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($name);
    while ($stmt -> fetch())
    {
        array_push($carNames, $name);
    }

    return $carNames;
}


?>