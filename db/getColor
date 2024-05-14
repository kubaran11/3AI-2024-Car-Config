<?php

require "conn.php";

function getColorNames(){
    $conn = $GLOBALS["conn"];

    $carNames = array();

    $sql = "SELECT name FROM Color";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($name);
    while ($stmt -> fetch())
    {
        array_push($colorNames, $name);
    }

    return $colorNames;
}


?>
