<?php

require "conn.php";

function getCarInfo(){
    $conn = $GLOBALS["conn"];

    $carFullInfo = array();

    $sql = "SELECT Model.url, Car.model, Color.name FROM Model JOIN Car ON Model.idCar=Car.id JOIN Color ON Color.id=Model.idColor";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($url, $model, $color);
    while ($stmt -> fetch())
    {
        array_push($carFullInfo, array("url" => $url, "model" => $model, "color" => $color));
    }

    return $carFullInfo;
}
?>
