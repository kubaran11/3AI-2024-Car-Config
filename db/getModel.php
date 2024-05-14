<?php

require "conn.php";

function getCarInfo(){
    $conn = $GLOBALS["conn"];

    $carFullInfo = array();

    $sql = "SELECT Model.url, Car.model, Color.name, Body.name, Addons.name FROM Model 
            JOIN Car ON Model.idCar=Car.id 
            JOIN Color ON Color.id=Model.idColor 
            JOIN Body ON Body.id=Model.idBody 
            JOIN Addons ON Addons.id=Model.idAddons";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($url, $model, $color, $body, $addon);
    while ($stmt -> fetch())
    {
        array_push($carFullInfo, array("url" => $url, "model" => $model, "color" => $color, "body" => $body, "addon" => $addon));
    }

    return $carFullInfo;
}
?>
