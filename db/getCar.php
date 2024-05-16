<?php

require "db/conn.php";
require "db/getCar.php"

function getCarId(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT id FROM Car";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($id);
    $stmt -> fetch();

    return $id;

}
function getCarModel(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT model FROM Car";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($model);
    $stmt -> fetch();
   
    return $model;

}
function getCarPrice(){
    $conn = $GLOBALS["conn"];

    $sql = "SELECT price FROM Car";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $stmt -> bind_result($price);
    $stmt -> fetch();
   
    return $price;

}



?>