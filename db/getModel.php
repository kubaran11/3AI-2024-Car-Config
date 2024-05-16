<?php

require "db/conn.php";

function getId(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT id FROM model";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($id);
    $stmt -> fetch();

    return $id;

}

function getCarId(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT idCar FROM Model";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($idCar);
    $stmt -> fetch();

    return $idCar;

}
function getColorId(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT idColor FROM Model";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($idColor);
    $stmt -> fetch();
   
    return $idColor;

}
function getBodyId(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT idBody FROM Model";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($idBody);
    $stmt -> fetch();
   
    return $idBody;

}
function getAddonsId(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT idAddons FROM Model";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($idAddons);
    $stmt -> fetch();
   
    return $idAddons;

}
function getUrl(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT url FROM Model";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($url);
    $stmt -> fetch();
   
    return $url;

}

?>